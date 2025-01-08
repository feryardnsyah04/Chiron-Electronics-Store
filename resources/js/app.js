// Mengatur durasi toast notification
document.addEventListener('DOMContentLoaded', function () {
    const toastElement = document.querySelector('.toast');
    if (toastElement) {
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
        setTimeout(() => {
            toast.hide();
        }, 4000);
    }
});
