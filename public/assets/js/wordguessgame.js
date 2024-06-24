const options = {
    StarryNight: "A famous painting with swirling skies.",
    Netherlands: "The country where Van Gogh painted many of his masterpieces.", //Asnwer: "Hint"
    PostImpressionism: "An art movement that followed Impressionism.",
    SelfPortrait: "Artworks where the artist painted himself.",
    Theo: "Van Gogh's supportive brother",
};

const messege = document.getElementById("message");
const hintRef = document.querySelector(".hint-ref");
const controls = document.querySelector(".controls-container");
const startBtn = document.getElementById("start");
const letterContainer = document.getElementById("letter-container");
const userInpSection = document.getElementById("user-input-section");
const resultText = document.getElementById("result");
const word = document.getElementById("word");
const words = Object.keys(options);
let randomWord = "",
    randomHint = "";
let winCount = 0,
    lossCount = 0;

//generate random value
const generateRandomValue = (array) => Math.floor(Math.random() * array.length);

//Block all buttons
const blocker = () => {
    let lettersButtons = document.querySelectorAll(".letters");
    lettersButtons.forEach(button => button.disabled = true);
    stopGame();
};

//start game
startBtn.addEventListener("click", () => {
    controls.classList.add("hide");
    init();
});

//stop game
const stopGame = () => {
    controls.classList.remove("hide");
    startBtn.innerText = "Restart";
};

//generate word function
const generateWord = () => {
    letterContainer.classList.remove("hide");
    userInpSection.innerText = "";
    randomWord = words[generateRandomValue(words)];
    randomHint = options[randomWord];
    hintRef.innerHTML = `<div id="wordHint" class="text-black"><span class="text-black">Hint:</span> ${randomHint}</div>`;
    let displayItem = "";
    randomWord.split("").forEach(value => {
        displayItem += '<span class="inputSpace text-black">_ </span>';
    });

    //Display each element as span
    userInpSection.innerHTML = displayItem;
    userInpSection.innerHTML += `<div id='chanceCount' class="text-black">Chances Left: ${lossCount}</div>`;
};

//Initial function
const init = () => {
    winCount = 0;
    lossCount = 5;
    randomWord = "";
    randomHint = "";
    messege.innerText = "";
    userInpSection.innerHTML = "";
    letterContainer.classList.add("hide");
    letterContainer.innerHTML = "";
    generateWord();

    // for creating letter buttons
    for (let i = 65; i < 91; i++) {
        let button = document.createElement("button");
        button.classList.add("letters");

        //Number to ASCII[A-Z]
        button.innerText = String.fromCharCode(i);

        //character button onclick
        button.addEventListener("click", () => {
            messege.innerText = `Correct Letter`;
            messege.style.color = "#008000";
            let charArray = randomWord.toUpperCase().split("");
            let inputSpace = document.getElementsByClassName("inputSpace");

            //if array contains clicked value replace the matched dash with letter
            if (charArray.includes(button.innerText)) {
                charArray.forEach((char, index) => {

                    //if character in array is same as clicked button
                    if (char == button.innerText) {
                        button.classList.add("correct");
                        //replace dash with letter
                        inputSpace[index].innerText = char;
                        //increment counter
                        winCount += 1;
                        //if winCount equals word length
                        if (winCount == charArray.length) {
                            resultText.innerHTML = "You Won";
                            word.innerHTML = `The word was: <span>${randomWord}</span>`;
                            startBtn.innerText = "Restart";
                            //block all buttons
                            blocker();
                        }
                    }
                });
            } else {
                //lose count
                button.classList.add("incorrect");
                lossCount -= 1;
                document.getElementById("chanceCount").innerText = `Chances Left: ${lossCount}`;
                messege.innerText = `Incorrect Letter`;
                messege.style.color = "#ff0000";
                if (lossCount == 0) {
                    word.innerHTML = `The word was: <span>${randomWord}</span>`;
                    resultText.innerHTML = "Game Over";
                    blocker();
                }
            }

            //Disable clicked buttons
            button.disabled = true;
        });

        //Append generated buttons to the container
        letterContainer.appendChild(button);
    }
};

window.onload = () => {
    init();
};
