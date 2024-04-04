<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (Session::get('alert_status') == 1)
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: response.message
    });
</script>
@elseif(Session::get('alert_status') == 2)
<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Invalid username or password.'
    });
</script>
@else

@endif

<?php
Session::forget('alert_status');
Session::forget('alert_message');
?>