let speech = null;
let isPaused = false;
const backgroundMusic = document.getElementById('backgroundMusic');
backgroundMusic.volume = 0.3;

function tellStory() {
  if (speech === null) {
    // Play background music
    backgroundMusic.play();

    const storyContent = document.getElementById('storyContent').innerText;
    speech = new SpeechSynthesisUtterance(storyContent);
    speech.lang = 'en-US';
    speech.rate = 0.7; 
    speech.onend = function() {
      speech = null;
      // Stop background music when story ends
      backgroundMusic.pause();
    };
    window.speechSynthesis.speak(speech);
  } else if (isPaused) {
    window.speechSynthesis.resume();
    isPaused = false;
    // Resume background music
    backgroundMusic.play();
  } else {
    window.speechSynthesis.pause();
    isPaused = true;
    // Pause background music when story is paused
    backgroundMusic.pause();
  }
}

// Stop speech synthesis and background music when leaving the page
window.addEventListener('beforeunload', () => {
  if (speech !== null) {
    window.speechSynthesis.cancel();
    speech = null;
    isPaused = false;
    backgroundMusic.pause();
  }
});

document.querySelector('.tell-story-button').addEventListener('click', tellStory);
