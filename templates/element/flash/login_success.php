<script>
    $(document).ready(function() {
        toastr.success('Login Success', 'Success', {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showDuration": "300",
            "hideDuration": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Login Success",
            showConfirmButton: false,
            timer: 1500
        });
    })
</script>