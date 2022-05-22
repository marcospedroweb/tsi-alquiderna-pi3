import initAlertUser from "./alert-user.js";

export default function initMarkProduct() {
    const markUnchecked = document.querySelector('.fa-regular.fa-bookmark');
    const markChecked = document.querySelector('.fa-solid.fa-bookmark');

    if (markUnchecked && markChecked) {
        markUnchecked.addEventListener('click', event => {
            if (markChecked.classList.contains('d-none'))
                markChecked.classList.toggle('d-none');
            if (!markUnchecked.classList.contains('d-none'))
                markUnchecked.classList.toggle('d-none');
            initAlertUser('success', 'Produto adicionando aos favoritos salvo com sucesso');
        });
        markChecked.addEventListener('click', event => {
            if (markUnchecked.classList.contains('d-none'))
                markUnchecked.classList.toggle('d-none');
            if (!markChecked.classList.contains('d-none'))
                markChecked.classList.toggle('d-none');
            initAlertUser('success', 'Produto removido dos favoritos com sucesso');
        });
    }
}
