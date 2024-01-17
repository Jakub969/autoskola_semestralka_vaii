document.querySelector('.btn-primary').addEventListener('click', function(event) {
    event.preventDefault();


    var successIcon = document.createElement('div');
    successIcon.classList.add('success-animation');
    document.body.appendChild(successIcon);


    setTimeout(function() {

        document.body.removeChild(successIcon);


        axios.post('/payments', new FormData(document.querySelector('form')))
            .then(function(response) {
                window.location.href = '/home';
            })
            .catch(function(error) {
                console.error(error);
            });
    }, 2000);
});
