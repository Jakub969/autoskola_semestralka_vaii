var drivingSession = {};
var originalDrivingSession = {};
function editRow(button, session_id) {
    var row = button.parentNode.parentNode;
    var cells = row.getElementsByTagName('td');
    originalDrivingSession = {
        id: session_id,
        duration: cells[1].innerText,
        location: cells[2].innerText,
        status: cells[3].innerText,
        session_category: cells[4].innerText
    };
    for (var i = 0; i < cells.length - 2; i++) {
        if (i !== 3 || i !== 0) {
            cells[i].contentEditable = true;
        }
    }
    cells[1].innerHTML = '<select><option value="60">60</option><option value="90">90</option><option value="120">120</option></select>';
    cells[2].innerHTML = '<select><option value="Spišská Nová Ves">Spišská Nová Ves</option><option value="Žilina">Žilina</option><option value="Košice">Košice</option></select>';
    cells[4].innerHTML = '<select><option value="Osobný automobil B">Osobný automobil B</option><option value="Malý motocykel AM">Malý motocykel AM</option><option value="Veľký motocykel A1">Veľký motocykel A1</option>' +
        '<option value="Veľký motocykel A2">Veľký motocykel A2</option><option value="Veľký motocykel A">Veľký motocykel A</option><option value="Nákladný automobil C">Nákladný automobil C</option>' +
        '<option value="Autobus D">Autobus D</option><option value="Traktor T">Traktor T</option><option value="Príves">Príves</option></select>';
    button.innerHTML = '<i class="bi bi-check-lg"></i>';
    button.onclick = function() { updateRow(this, drivingSession); };
}


function updateRow(button) {
    var row = button.parentNode.parentNode;
    var cells = row.getElementsByTagName('td');
    drivingSession = {
        id: originalDrivingSession.id,
        duration: document.getElementById('duration').value,
        location: document.getElementById('location').value,
        session_category: document.getElementById('session_category').value,
    };
    console.log(drivingSession);
    if (JSON.stringify(drivingSession) !== JSON.stringify(originalDrivingSession)) {
        $.ajax({
            url: '/update-driving-session/' + drivingSession.id,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: drivingSession,
            success: function(response) {
                console.log(response);
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
            }
        });
    }
    for (var i = 0; i < cells.length - 2; i++) {
        cells[i].contentEditable = false;
    }
    button.innerHTML = '<i class="bi bi-pencil-square"></i>';
    button.onclick = function() { editRow(this); };
}
