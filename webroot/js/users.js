$(document).ready(function () {
    console.log('Users script loaded');
    var table = $('#usersTable').DataTable({
        pageLength: 50, // Set the number of rows to display per page (e.g., 50)
        columnDefs: [
            { width: '5%', targets: 0, className: 'text-center' },
            { width: '5%', targets: 1, className: 'text-center' },
            { width: '15%', targets: 2, className: 'text-center' },
            { width: '35%', targets: 3, className: 'text-center' },
            { width: '10%', targets: 4, className: 'text-center' },
            { width: '10%', targets: 5, className: 'text-center' },
            { width: '20%', targets: 6, className: 'text-center' }
        ]
    });

    users.forEach(function (user, index) {
        table.row.add([
            index + 1,
            `<input type="checkbox" class="user-checkbox" value="${user.id}">`,
            user.username,
            user.email,
            new Date(user.created).toLocaleDateString('en-US'),
            new Date(user.modified).toLocaleDateString('en-US'),
            `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-success btn-sm me-1 editUserBtn"
                data-id="${user.id}"
                data-username="${user.username}"
                data-email="${user.email}"
                data-toggle="modal"
                data-target="#editModal">
                Edit
            </button>
            <button type="button" class="btn btn-primary btn-sm me-1 viewUserBtn"
                data-id="${user.id}"
                data-username="${user.username}"
                data-email="${user.email}"
                data-toggle="modal"
                data-target="#viewModal">
                view
            </button>
            <a href="#" onclick="confirmDelete(${user.id})" class="btn btn-danger btn-sm me-1">Delete</a>
        </div>`

        ]).draw(false);
    });

    $('#submitAdd').on('click', function () {
        var csrfToken = $('meta[name="csrfToken"]').attr('content');
        var formData = new FormData($('#addUserForm')[0]);
        $.ajax({
            url: '/master-list/users/add',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-Token': csrfToken
            },
            success: function (response) {
                location.reload(); 
                toastr.success('User added successfully!');
            },
            error: function (xhr, status, error) {
                console.error('Error:', xhr.responseText); 
                toastr.error('Failed to add user. Please try again.');
            }
        });
    });

    $('.editUserBtn').on('click', function () {
        let userId = $(this).data('id');
        let username = $(this).data('username');
        let email = $(this).data('email');
    
        $('#editUserForm input[name="username"]').val(username);
        $('#editUserForm input[name="email"]').val(email);
        $('#editUserForm input[name="password"]').val(''); // leave blank for security
    
        // Set the correct action URL dynamically
        $('#submitEdit').data('id', userId);
    
        $('#editModal').modal('show');
    });

    $('.viewUserBtn').on('click', function () {
        let userId = $(this).data('id');
        let username = $(this).data('username');
        let email = $(this).data('email');
    
        $('#editUserForm input[name="username"]').val(username);
        $('#editUserForm input[name="email"]').val(email);
        $('#editUserForm input[name="password"]').val(''); // leave blank for security
    
        // Set the correct action URL dynamically
        $('#submitEdit').data('id', userId);
    
        $('#viewModal').modal('show');
    });
    

    $('#submitEdit').on('click', function () {
        let csrfToken = $('meta[name="csrfToken"]').attr('content');
        let userId = $(this).data('id');
        let formData = new FormData($('#editUserForm')[0]);
    
        $.ajax({
            url: `/master-list/users/edit/${userId}`,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-Token': csrfToken
            },
            success: function (response) {
                toastr.success('User updated successfully!');
                location.reload();
            },
            error: function (xhr) {
                console.error('Error:', xhr.responseText);
                toastr.error('Failed to update user. Please try again.');
            }
        });
    });
    

    setTimeout(function () {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr.success('Loaded Successfully!');
    }, 1000);
});

function confirmDelete(id) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: `/master-list/users/delete/${id}`,
                type: 'POST', 
                headers: {
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                success: function (response) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        location.reload();
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        title: "Error!",
                        text: "There was an error deleting the file.",
                        icon: "error"
                    });
                }
            });
        }
    });
}


