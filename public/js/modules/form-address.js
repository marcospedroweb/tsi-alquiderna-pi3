import initBreadcrumbsPayment from "./breadcrumbs-payment.js";

export default function initFormAddress() {
    const formAddress = document.querySelector('#form-address');
    const inputCep = document.querySelector('#input-payment-cep');
    const inputStreet = document.querySelector('#street');

    function updateFormFinish() {
        //form address
        const name = document.querySelector('#name');
        const street = document.querySelector('#street');
        const number = document.querySelector('#number');
        const complement = document.querySelector('#complement');
        //form finish
        const streetFinish = document.querySelector('#street-finish');
        const nameFinish = document.querySelector('#name-finish');
        const numberFinish = document.querySelector('#number-finish');
        const complementFinish = document.querySelector('#complement-finish');
        const cepFinish = document.querySelector('#cep-finish');
        //Inputs hidden
        const inputCepFinish = document.querySelector('input[name=cep]');
        const inputName = document.querySelector('input[name=name]');
        const inputStreet = document.querySelector('input[name=street]');
        const inputNumber = document.querySelector('input[name=number]');
        const inputComplement = document.querySelector('input[name=complement]');

        streetFinish.textContent = name.value
        nameFinish.textContent = street.value;
        numberFinish.textContent = number.value;
        complementFinish.textContent = complement.value;
        cepFinish.textContent = inputCep.value;
        //Hidden
        inputCepFinish.value = inputCep.value;
        inputName.value = name.value;
        inputStreet.value = street.value;
        inputNumber.value = number.value;
        inputComplement.value = complement.value;
    }

    if (formAddress) {
        formAddress.addEventListener('submit', event => {
            event.preventDefault();
            updateFormFinish();
            initBreadcrumbsPayment('payment');
        });

        inputCep.addEventListener('input', event => {
            if (event.inputType == 'insertFromPaste')
                inputCep.value = '';
            if (inputCep.value.length == 9) {
                const fetchCep = fetch(`https://viacep.com.br/ws/${inputCep.value.replace('-', '')}/json/`);
                fetchCep.then(r => r.json())
                    .then(json => {
                        if (!json.erro)
                            inputStreet.value = json.logradouro;
                    });
            }
        });

        inputCep.addEventListener('keypress', event => {
            if (inputCep.value.length == 5)
                inputCep.value += '-';
            else if (inputCep.value.length > 8 && inputCep.value.indexOf('-') != -1)
                event.preventDefault();
            else if (isNaN(event.key))
                event.preventDefault();
        });
    }
}
