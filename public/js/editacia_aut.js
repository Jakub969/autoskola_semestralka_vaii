var car = {};
var originalCar = {};
function editRow(button, car_id) {
    var row = button.parentNode.parentNode;
    var cells = row.getElementsByTagName('td');
    originalCar = {
        id: car_id,
        car_brand: cells[0].innerText,
        model: cells[1].innerText,
        year: cells[2].innerText,
        license_plate: cells[3].innerText,
        type: cells[4].innerText
    };
    for (var i = 0; i < cells.length - 2; i++) {
        cells[i].contentEditable = true;
    }
    button.innerHTML = '<i class="bi bi-check-lg"></i>';
    button.onclick = function() { updateRow(this, car); };
}


function updateRow(button) {
    var row = button.parentNode.parentNode;
    var cells = row.getElementsByTagName('td');
    car = {
        id: originalCar.id,
        car_brand: cells[0].innerText,
        model: cells[1].innerText,
        year: cells[2].innerText,
        license_plate: cells[3].innerText,
        type: cells[4].innerText
    };
    console.log(car);
    if (JSON.stringify(car) !== JSON.stringify(originalCar)) {
        $.ajax({
            url: '/update-car/' + car.id,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: car,
            success: function(response) {
                console.log(response);
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
