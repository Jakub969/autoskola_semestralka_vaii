
var changedUsers = {};

function updateRole(userId, selectElement) {

    var originalRole = selectElement.getAttribute('data-original-role');

    if (selectElement.value !== originalRole) {
        selectElement.parentElement.parentElement.classList.add('highlight');
        changedUsers[userId] = selectElement.value;
    } else {
        selectElement.parentElement.parentElement.classList.remove('highlight');
        delete changedUsers[userId];
    }
}

function submitChanges() {
    if (!changedUsers.isEmpty) {
        $.ajax({
            url: '/update-user-roles',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                users: changedUsers
            },
            success: function(response) {
                console.log(response);
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR.responseText);
            }
        });
        console.log(changedUsers);
    }
}

function filterTable() {
    var filter = document.getElementById('filter').value;
    var search = document.getElementById('search').value.toLowerCase();
    var rows = document.querySelectorAll('.full-width-centered tr');
    for (var i = 1; i < rows.length; i++) {
        var row = rows[i];
        var cellValue = row.cells[filter === 'name' ? 0 : 1].textContent.toLowerCase();
        row.style.display = cellValue.includes(search) ? '' : 'none';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('search').addEventListener('input', filterTable);
});



