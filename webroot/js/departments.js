$(document).ready(function () {
    var table = $('#departmentsTable').DataTable({
        pageLength: 50, 
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]], 
        columnDefs: [
            { width: '5%', targets: 0, className: 'text-center' },
            { width: '5%', targets: 1, className: 'text-center' },
            { width: '45%', targets: 2 },
            { width: '15%', targets: 3, className: 'text-center' },
            { width: '15%', targets: 4, className: 'text-center' },
            { width: '20%', targets: 5, className: 'text-center' }
        ]
    });

    departments.forEach(function (department, index) {
        table.row.add([
            index + 1,
            `<input type="checkbox" class="department-checkbox" value="${department.id}">`,
            department.department,
            new Date(department.created).toLocaleDateString('en-US'),
            new Date(department.modified).toLocaleDateString('en-US'),
            `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-primary btn-sm me-1 viewUserBtn"
                    data-id="${department.id}"
                    data-department="${department.department}"
                    data-toggle="modal"
                    data-target="#viewModal">
                    view
                </button>
                <button type="button" class="btn btn-success btn-sm me-1 editUserBtn"
                    data-id="${department.id}"
                    data-department="${department.department}"
                    data-toggle="modal"
                    data-target="#editModal">
                    Edit
                </button>
                <a href="#" onclick="confirmDelete(${department.id})" class="btn btn-danger btn-sm me-1">Delete</a>
             </div>`
        ]).draw(false);
    });

    $('#submitImport').on('click', function () {
        var formData = new FormData($('#importForm')[0]);
        var csrfToken = $('meta[name="csrfToken"]').attr('content');

        $.ajax({
            url: '/master-list/departments/import',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-Token': csrfToken
            },
            success: function (response) {
                location.reload(); 
                toastr.success('Departments imported successfully!');
            },
            error: function (xhr, status, error) {
                console.error('Error:', xhr.responseText); 
                toastr.error('Failed to import departments. Please try again.');
            }
        });
    });

    $('#submitAdd').on('click', function () {
        var csrfToken = $('meta[name="csrfToken"]').attr('content');
        var formData = new FormData($('#addDepartmentForm')[0]);
        $.ajax({
            url: '/master-list/departments/add',
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
        let departmentId = $(this).data('id');
        let department = $(this).data('department');
    
        $('#editDepartmentForm input[name="department"]').val(department);
        $('#submitEdit').data('id', departmentId);
    
        $('#editModal').modal('show');
    });

    $('.viewUserBtn').on('click', function () {
        let departmentId = $(this).data('id');
        let department = $(this).data('department');
    
        $('#viewDepartmentForm input[name="department"]').val(department);
        $('#submitEdit').data('id', departmentId);
    
        $('#addModal').modal('show');
    });

    $('#submitEdit').on('click', function () {
        let csrfToken = $('meta[name="csrfToken"]').attr('content');
        let departmentId = $(this).data('id');
        let formData = new FormData($('#editDepartmentForm')[0]);
    
        $.ajax({
            url: `/master-list/departments/edit/${departmentId}`,
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
                url: `/master-list/departments/delete/${id}`,
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


