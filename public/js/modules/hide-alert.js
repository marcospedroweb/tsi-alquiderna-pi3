export default function initHideAlert() {
    const alert = document.querySelector('#div-alert-flash');
    setTimeout(() => {
        if (!alert.classList.contains('d-none'))
            alert.classList.toggle('d-none');
    }, 3000);
}
