<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const flashSuccess = $('.flash-success').data('flashsuccess');
    if (flashSuccess) {
        Swal.fire({
            title: 'Notifikasi',
            text: flashSuccess,
            icon: 'success'
        });
    };

    const flashError = $('.flash-error').data('flasherror');
    if (flashError) {
        Swal.fire({
            title: 'Notifikasi',
            text: flashError,
            icon: 'error'
        });
    };

    const flashWarning = $('.flash-warning').data('flashwarning');
    if (flashWarning) {
        Swal.fire({
            title: 'Notifikasi',
            text: flashWarning,
            icon: 'warning'
        });
    };
</script>
</body>

</html>