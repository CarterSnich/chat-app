$('#composer').on('submit', function (e) {
    e.preventDefault()

    let messageInput = $('#message-input');
    let body = new FormData();
    body.append('message', messageInput.val());

    fetch('send.php', {
        method: 'POST',
        body: body
    })
    messageInput.val('');
})


setInterval(() => {
    fetch('receive.php')
        .then(res => res.json())
        .then(data => {
            let messagesWrapper = $('#messages');
            data.forEach(message => {
                if (document.getElementById(message.id) == null) {
                    let bubble = document.createElement('div')
                    bubble.classList.add('bubble')
                    bubble.innerText = message.message;
                    console.dir(bubble)
                    messagesWrapper.appendChild(bubble)
                }
            });
        })
}, 1000);

