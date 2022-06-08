import initBreadcrumbsPayment from "./breadcrumbs-payment.js";

export default function initFormPayment() {
    const formPayment = document.querySelector('#form-payment');
    const selectPayment = document.querySelector('#select-payment');
    const divPaymentCard = document.querySelector('#div-payment-card');

    function updateFormFinish() {
        //Form payment
        const nameCard = document.querySelector('#name_card');
        const numberCard = document.querySelector('#number_card');
        const dateCard = document.querySelector('#date_card');
        const codeCard = document.querySelector('#code_card');
        //Form finish
        const paymentType = document.querySelector('#payment-finish');
        const numberCardFinish = document.querySelector('#number-card');
        const divEndCard = document.querySelector('#div-end-card');
        //Inputs hidden
        const inputPaymentType = document.querySelector('input[name=payment_type]');
        const inputNumberCard = document.querySelector('input[name=number_card]');

        inputPaymentType.value = selectPayment.value;
        inputNumberCard.value = numberCard.value.trim().slice(-4);

        if (selectPayment.value == 'boleto')
            paymentType.textContent = 'Boleto';
        else if (selectPayment.value == 'pix')
            paymentType.textContent = 'PIX';
        else {
            if (divEndCard.classList.contains('d-none'))
                divEndCard.classList.toggle('d-none');
            paymentType.textContent = 'Cartão';
            numberCardFinish.textContent = numberCard.value.trim().slice(-4);
        }

    }

    if (formPayment) {
        const inputsPayment = divPaymentCard.querySelectorAll('.form-control');

        formPayment.addEventListener('submit', event => {
            event.preventDefault();
            updateFormFinish();
            initBreadcrumbsPayment('finish');
        });

        selectPayment.addEventListener('change', event => {
            if (event.target.value == 'cartao') {
                if (divPaymentCard.classList.contains('d-none'))
                    divPaymentCard.classList.toggle('d-none');
                inputsPayment.forEach(input => input.setAttribute('required', 'required'));
            } else {
                if (!divPaymentCard.classList.contains('d-none'))
                    divPaymentCard.classList.toggle('d-none');
                inputsPayment.forEach(input => input.removeAttribute('required'));
                inputsPayment.forEach(input => input.value = '');
            }

        });
    }

}
