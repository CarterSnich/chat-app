


let form = document.getElementById("composer")

form.addEventListener('submit', function (e) {
    e.preventDefault()

    let messge = document.getElementById('message-input').value;

    let body = new FormData();

    body.append('gg', messge);

    fetch('send.php', {
        method: 'POST',
        body: body
    })
    messge.value = ''
})



setInterval(() => {
    fetch('receive.php')
        .then(res => res.json())
        .then(data => {
            let messages = document.getElementById('messages');

            data.forEach(data => {

                if (document.getElementById(data.id) == null) {

                    messages.innerHTML += `
                        <div class="message-control" id="${data.id}">
                            ${data.message}
                        </div>
                    `
                }
            });
        })

}, 1000);

