import initAlertUser from "./alert-user.js";

export default function initShippingRates() {

}

const inputCep = document.querySelector('#input-cep');
const btnSearchCep = document.querySelector('#search-cep');
const divCep = document.querySelector('#div-cep');

if (inputCep && btnSearchCep && divCep) {

    //Validation
    inputCep.addEventListener('input', event => {
        if (event.inputType === 'insertFromPaste')
            inputCep.value = '';
    });
    //Validation
    inputCep.addEventListener('keypress', event => {
        if (inputCep.value.length > 7 && inputCep.value.indexOf('-') === -1)
            // without ' - '
            event.preventDefault();
        else if (inputCep.value.length > 8 && inputCep.value.indexOf('-') !== -1)
            // with ' - '
            event.preventDefault();
        else if ((event.key === '-' && inputCep.value.indexOf('-') !== -1))
            event.preventDefault();
        else if (isNaN(event.key) && event.key !== '-')
            event.preventDefault();
    });

    async function initFetchCep(cep) {
        const promisseCep = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        return promisseCep;
    }

    //Search
    btnSearchCep.addEventListener('click', event => {
        if (inputCep.value.replace('-', '').length && inputCep.value.replace('-', '').length === 8) {
            const promisseCep = initFetchCep(inputCep.value.replace('-', ''));
            promisseCep
                .then(response => response.json())
                .then(cepJson => {
                    console.log(cepJson);
                });
        } else {
            initAlertUser('danger', 'Adicione um CEP válido.');
        }
    });
}
