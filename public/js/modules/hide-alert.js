export default function initHideAlert() {
    const alert = document.querySelectorAll('.alert');
    if (alert)
        setTimeout(() => {
            alert.forEach(alert => {
                if (!alert.classList.contains('d-none'))
                    alert.classList.toggle('d-none');
            });
        }, 3000);
}
