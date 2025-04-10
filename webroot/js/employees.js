$(document).ready(function () {
    var table = $('#employeesTable').DataTable({
        pageLength: 50,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]], 
    });

    table.clear(); // Clear any existing rows

    employees.forEach(function (employee, index) {
        table.row.add([
            index + 1,
            `<input type="checkbox" class="department-checkbox" value="${employee.id}">`,
            employee.first_name,
            employee.middle_name,
            employee.last_name,
            employee.address,
           
            employee.telephone_number,
            employee.mobile_number,
            employee.email,
            new Date(employee.created).toLocaleDateString('en-US'),
            new Date(employee.modified).toLocaleDateString('en-US'),
            `<div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="/master-list/employees/view/${employee.id}" class="btn btn-primary btn-sm me-1">View</a>
             <a href="/master-list/employees/edit/${employee.id}" class="btn btn-success  btn-sm me-1">Edit</a>
             <a href="#" onclick="confirmDelete(${employee.id})" class="btn btn-danger  btn-sm me-1">Delete</a>
             </div>`
        ]).draw(false);
    });

    table.rows().invalidate().draw();


    setTimeout(function(){
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
          }
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
            Swal.fire({
                title: "Delete?",
                icon: "question",
                color: "#716add",
                text: "Ask mo muna si nikks HAHAHA.",
                backdrop: `
                    rgba(0,0,123,0.4)
                    url("img/doggo.gif")
                    left
                    no-repeat`,
                confirmButtonText: "Ghesi"
            })
        }
    });
}
    
function cconfirmDelete(id) {
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
                url: `/master-list/employees/delete/${id}`,
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

