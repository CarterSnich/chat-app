document.getElementById('composer').addEventListener('submit', function (e) {
    e.preventDefault()

    let messageInput = document.getElementById('message-input');
    let body = new FormData();
    body.append('message', messageInput.value);

    fetch('send.php', {
        method: 'POST',
        body: body
    })
    messageInput.value = '';
})

setInterval(() => {
    fetch('receive.php')
        .then(res => res.json())
        .then(data => {
            let messagesWrapper = document.getElementById('messages-wrapper');
            let bubble, messageId

            data.forEach(message => {
                messageId = `message-id-${message.id}`
                if (document.getElementById(messageId) == null) {
                    bubble = document.createElement('div')
                    bubble.classList.add('bubble')
                    bubble.id = messageId
                    bubble.innerText = message.message;
                    messagesWrapper.appendChild(bubble)
                }
            });
        })
}, 500);

