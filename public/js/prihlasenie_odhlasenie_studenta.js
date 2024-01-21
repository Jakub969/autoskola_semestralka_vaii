function signIn(button, car_id) {
    var sessionId = button.dataset.sessionId;
    var carId = car_id
    var row = button.parentNode.parentNode;

    $.ajax({
        url: '/update-session',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            session_id: sessionId,
            car_id: carId,
        },
        success: function(result) {
            row.style.backgroundColor = 'lightgreen';
            button.innerHTML = '<i class="bi bi-x-circle"></i>';
            button.onclick = function() { signOut(this); };
        }
    });
}

function signOut(button) {
    var sessionId = button.dataset.sessionId;
    var row = button.parentNode.parentNode;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/sign-out',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            session_id: sessionId,
        },
        success: function(result) {
            row.style.backgroundColor = 'white';
            button.innerHTML = '<i class="bi bi-bookmark-check"></i>';
            button.onclick = function() { signIn(this); };
        }
    });
}
