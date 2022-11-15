$('#composer').on('submit', function (e) {
    e.preventDefault()

    const messageInput = $('#message-input');
    const body = new FormData();
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
            $('#spinner-wrapper').addClass('d-none')

            let messagesWrapper = $('#messages-wrapper');
            let bubble, par, small, messageId
            const username = $('meta[name=username]').attr('content')

            data.forEach(message => {
                messageId = `message-id-${message.id}`
                if (document.getElementById(messageId) == null) {
                    bubble = $(`<div id="${messageId}" class="bubble"></div>`)
                    console.log(username)
                    console.log(message.username)
                    if (username == message.username) {
                        bubble.addClass('right bg-primary rounded px-2 py-1')
                    } else {
                        bubble.addClass('left bg-secondary rounded px-2 py-1')

                    }

                    par = $('<p></p>')
                    par.text(message.message)

                    small = $('<small></small>')
                    small.text(message.username)

                    bubble.append(par, small)

                    messagesWrapper.append(bubble)
                    $('#messages').animate({ scrollTop: messagesWrapper.height() }, 0);
                }
            });
        })
}, 1000);

