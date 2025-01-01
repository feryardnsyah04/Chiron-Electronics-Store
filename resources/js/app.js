document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi toast
    var toastEl = document.getElementById('myToast');
    if (toastEl) {
        var toast = new bootstrap.Toast(toastEl);

        // Tampilkan toast
        toast.show();

        // Atur waktu tampil toast selama 2 detik
        setTimeout(function() {
            toast.hide();
        }, 2000); // 2000 milidetik = 2 detik
    }
});
