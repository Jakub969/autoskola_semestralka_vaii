window.onload = function() {
    document.getElementById('email').addEventListener('input', function (event) {
        var email = event.target.value;

        var error = '';
        if (email === '') {
            error = 'Email je povinný.';
        } else if (!validateEmail(email)) {
            error = 'Prosím zadajte validný email.';
        }

        document.getElementById('emailError').textContent = error;
    });

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
}
