const texts = document.getElementById('texts');
chatBox=document.querySelector(".chat-box");
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

const recognition = new SpeechRecognition();
recognition.interimResults = true;

let p = document.createElement('p');

recognition.addEventListener('result', (e) => {
  const text = Array.from(e.results)
    .map((result) => result[0])
    .map((result) => result.transcript)
    .join('');

  p.innerText = text;
  if (e.results[0].isFinal) {
    const userChat = document.createElement('div');
    userChat.classList.add('chat', 'outgoing');
    userChat.innerHTML = `<div class="details"><p>${text}</p></div>`;
    texts.appendChild(userChat);

    // Assuming you have the artwork ID stored in a variable `artworkId`
    const artworkId = document.getElementById('artworkID').value; // Replace this with the actual artwork ID
    console.log(artworkId);
    $.ajax({
      url: '/api/get_artwork_info',
      type: 'POST',
      data: {
        query: text,
        artwork_id: artworkId
      },
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function(response) {
        const botChat = document.createElement('div');
        botChat.classList.add('chat', 'incoming');
        botChat.innerHTML = `<img src="/assets/img/artistCartoon.png" alt=""><div class="details"><p>${response}</p></div>`;
        texts.appendChild(botChat);
        scrollToBottom();
      },
      error: function(xhr, status, error) {
        const botChat = document.createElement('div');
        botChat.classList.add('chat', 'incoming');
        botChat.innerHTML = `<img src="/assets/img/artistCartoon.png" alt=""><div class="details"><p>Sorry, I couldn't understand your question. Please try again.</p></div>`;
        texts.appendChild(botChat);
        console.error('Error:', error);
      }
    });
    p = document.createElement('p');
  }
});

recognition.addEventListener('end', () => {
  recognition.start();
});


document.getElementById('voiceButton').addEventListener('click', () => {
  recognition.start();
});

function scrollToBottom(){
  chatBox.scrollTop=chatBox.scrollHeight;
}