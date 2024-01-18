document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('.btn-primary').addEventListener('click', function(event) {
        event.preventDefault();

        var successContainer = document.createElement('div');
        successContainer.classList.add('success-animation');

        var successIcon = document.createElement('i');
        successIcon.classList.add('fas', 'fa-check');
        successContainer.appendChild(successIcon);

        var successText = document.createElement('p');
        successText.textContent = 'Platba prebehla úspešne!';
        successContainer.appendChild(successText);

        document.body.appendChild(successContainer);


        setTimeout(function() {
            if (document.body.contains(successContainer)) {
                document.body.removeChild(successContainer);
            }

            axios.post('/payments', new FormData(document.querySelector('form')))
                .then(function(response) {
                    window.location.href = '/';
                })
                .catch(function(error) {
                    console.error(error);
                });
        }, 2000);
    });
});
