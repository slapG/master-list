$(document).ready(function () {
    console.log('Loaded')
    var table = $('#employeesTable').DataTable({
        pageLength: 50,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]], 
    });

    table.clear();

    employees.forEach(function (employee, index) {
        table.row.add([
            index + 1,
            `<div style="display: flex; justify-content: center; margin-top: 10px;">
            <input type="checkbox" class="department-checkbox" value="${employee.id}">
            </div>`,
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

function handleDepartmentChange(select) {
    const departmentId = select.value;
    if (departmentId === '') {
        window.location.href = '/master-list/employees';
    } else {
        select.form.submit();
    }
}

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


document.getElementById('add-sibling-birthday').addEventListener('click', function () {
    const hiddenSiblings = document.querySelectorAll('[name^="family_background[siblings]"]:not([type="hidden"])[hidden]');
    const hiddenBirthdays = document.querySelectorAll('[name^="family_background[bithdays]"]:not([type="hidden"])[hidden]');

    if (hiddenSiblings.length > 0) {
        hiddenSiblings[0].removeAttribute('hidden');
    }

    if (hiddenBirthdays.length > 0) {
        hiddenBirthdays[0].removeAttribute('hidden');
        
    }
});

document.getElementById('add-speciality').addEventListener('click', function () {
    const hiddenLaws = document.querySelectorAll('[name^="speciality[speciality_laws]"]:not([type="hidden"])[hidden]');
    const hiddenRatings = document.querySelectorAll('[name^="speciality[rating]"]:not([type="hidden"])[hidden]');
    const hiddenExamination = document.querySelectorAll('[name^="speciality[date_of_examination]"]:not([type="hidden"])[hidden]');
    const hiddenPlace = document.querySelectorAll('[name^="speciality[place_of_examination]"]:not([type="hidden"])[hidden]');
    const hiddenNumber = document.querySelectorAll('[name^="speciality[license_number]"]:not([type="hidden"])[hidden]');
    const hiddenValidity = document.querySelectorAll('[name^="speciality[date_of_validity]"]:not([type="hidden"])[hidden]');

    if (hiddenLaws.length > 0) {
        hiddenLaws[0].removeAttribute('hidden');
    }

    if (hiddenRatings.length > 0) {
        hiddenRatings[0].removeAttribute('hidden');
        
    }
    if (hiddenExamination.length > 0) {
        hiddenExamination[0].removeAttribute('hidden');
    }

    if (hiddenPlace.length > 0) {
        hiddenPlace[0].removeAttribute('hidden');
        
    }
    if (hiddenNumber.length > 0) {
        hiddenNumber[0].removeAttribute('hidden');
    }

    if (hiddenValidity.length > 0) {
        hiddenValidity[0].removeAttribute('hidden');
        
    }
});

document.getElementById('add-organizations').addEventListener('click', function () {
    const hiddenOrg = document.querySelectorAll('[name^="organization[name_of_organization]"]:not([type="hidden"])[hidden]');
    const hiddenFrom = document.querySelectorAll('[name^="organization[exclusive_from]"]:not([type="hidden"])[hidden]');
    const hiddenTo = document.querySelectorAll('[name^="organization[exclusive_to]"]:not([type="hidden"])[hidden]');
    const hiddenHours = document.querySelectorAll('[name^="organization[number_of_hours]"]:not([type="hidden"])[hidden]');    
    const hiddenPosition = document.querySelectorAll('[name^="organization[position]"]:not([type="hidden"])[hidden]');

    if (hiddenOrg.length > 0) {
        hiddenOrg[0].removeAttribute('hidden');
    }

    if (hiddenFrom.length > 0) {
        hiddenFrom[0].removeAttribute('hidden');
        
    }
    if (hiddenTo.length > 0) {
        hiddenTo[0].removeAttribute('hidden');
    }

    if (hiddenHours.length > 0) {
        hiddenHours[0].removeAttribute('hidden');
        
    }
    if (hiddenPosition.length > 0) {
        hiddenPosition[0].removeAttribute('hidden');
    }
});
document.getElementById('add-lnd').addEventListener('click', function () {
    const hiddenTraining = document.querySelectorAll('[name^="lnd[training_program]"]:not([type="hidden"])[hidden]');
    const hiddenFrom = document.querySelectorAll('[name^="lnd[exclusive_from]"]:not([type="hidden"])[hidden]');
    const hiddenTo = document.querySelectorAll('[name^="lnd[exclusive_to]"]:not([type="hidden"])[hidden]');
    const hiddenHours = document.querySelectorAll('[name^="lnd[number_of_hours]"]:not([type="hidden"])[hidden]');
    const hiddenType = document.querySelectorAll('[name^="lnd[type]"]:not([type="hidden"])[hidden]');
    const hiddenBy = document.querySelectorAll('[name^="lnd[conducted_by]"]:not([type="hidden"])[hidden]');

    if (hiddenTraining.length > 0) {
        hiddenTraining[0].removeAttribute('hidden');
    }
    if (hiddenFrom.length > 0) {
        hiddenFrom[0].removeAttribute('hidden');
    }
    if (hiddenTo.length > 0) {
        hiddenTo[0].removeAttribute('hidden');
    }
    if (hiddenHours.length > 0) {
        hiddenHours[0].removeAttribute('hidden');
    }
    if (hiddenType.length > 0) {
        hiddenType[0].removeAttribute('hidden');
    }
    if (hiddenBy.length > 0) {
        hiddenBy[0].removeAttribute('hidden');
    }
});

document.getElementById('add-other').addEventListener('click', function (){
    const hiddenSpecial = document.querySelectorAll('[name^="other_information[special_skill]"]:not([type="hidden"])[hidden]');
    const hiddenDistinction = document.querySelectorAll('[name^="other_information[non_academic_distinction]"]:not([type="hidden"])[hidden]');
    const hiddenMembership = document.querySelectorAll('[name^="other_information[membership]"]:not([type="hidden"])[hidden]');

    if (hiddenSpecial.length > 0 ){
        hiddenSpecial[0].removeAttribute('hidden')
    }
    if (hiddenDistinction.length > 0 ){
        hiddenDistinction[0].removeAttribute('hidden')
    }
    if (hiddenMembership.length > 0 ){
        hiddenMembership[0].removeAttribute('hidden')
    }
});

document.getElementById('add-work-experience').addEventListener('click', function (){
    const hiddenPosition = document.querySelectorAll('[name^="work_experience[start_from]"]:not([type="hidden"])[hidden]');
    const hiddenCompany = document.querySelectorAll('[name^="work_experience[upto]"]:not([type="hidden"])[hidden]');
    const hiddenFrom = document.querySelectorAll('[name^="work_experience[position]"]:not([type="hidden"])[hidden]');
    const hiddenTo = document.querySelectorAll('[name^="work_experience[department_name]"]:not([type="hidden"])[hidden]');
    const hiddenHours = document.querySelectorAll('[name^="work_experience[monthly_salary]"]:not([type="hidden"])[hidden]');
    const hiddenDescription = document.querySelectorAll('[name^="work_experience[salary_grade]"]:not([type="hidden"])[hidden]');
    const hiddenStatus = document.querySelectorAll('[name^="work_experience[status_of_appointment]"]:not([type="hidden"])[hidden]');
    const hiddenGov = document.querySelectorAll('[name^="work_experience[government_service]"]:not([type="hidden"])[hidden]');

    if (hiddenPosition.length > 0 ){
        hiddenPosition[0].removeAttribute('hidden')
    }
    if (hiddenCompany.length > 0 ){
        hiddenCompany[0].removeAttribute('hidden')
    }
    if (hiddenFrom.length > 0 ){
        hiddenFrom[0].removeAttribute('hidden')
    }
    if (hiddenTo.length > 0 ){
        hiddenTo[0].removeAttribute('hidden')
    }
    if (hiddenHours.length > 0 ){
        hiddenHours[0].removeAttribute('hidden')
    }
    if (hiddenDescription.length > 0 ){
        hiddenDescription[0].removeAttribute('hidden')
    }
    if (hiddenStatus.length > 0 ){
        hiddenStatus[0].removeAttribute('hidden')
    }
    if (hiddenGov.length > 0 ){
        hiddenGov[0].removeAttribute('hidden')
    }
})