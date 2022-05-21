import initAlertUser from "./alert-user.js";
import initWhatsMonth from "./whats-month.js";

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
                    if (cepJson.logradouro) {
                        const spanStreet = divCep.querySelector('#street');
                        const divsOptionsCep = divCep.querySelectorAll('.option-cep');

                        divsOptionsCep.forEach((element, index) => {
                            const date = new Date();
                            let dayNow = date.getDate();
                            let monthNow = date.getMonth();
                            const cepDate = element.querySelector('.cep-date');
                            const cepPrice = element.querySelector('.cep-price');

                            if (index === 0) {
                                if (dayNow >= 27) {
                                    if (monthNow === 11)
                                        monthNow = 0
                                    else
                                        monthNow += 1;
                                    dayNow = 1;
                                }
                                dayNow += 2;
                                dayNow = dayNow.toString().length === 1 ? `0${dayNow}` : dayNow;

                                cepDate.textContent = `${dayNow} de ${initWhatsMonth(monthNow)}`;
                                cepPrice.textContent = 'R$ 80,99';
                            } else if (index === 1) {
                                if (dayNow >= 20) {
                                    if (monthNow === 11)
                                        monthNow = 0
                                    else
                                        monthNow += 1;
                                    dayNow = 1;
                                }
                                dayNow += 7;
                                dayNow = dayNow.toString().length === 1 ? `0${dayNow}` : dayNow;

                                cepDate.textContent = `${dayNow} de ${initWhatsMonth(monthNow)}`;
                                cepPrice.textContent = 'R$ 40,99';
                            } else {
                                if (monthNow === 11)
                                    monthNow = 0;
                                else
                                    monthNow += 1;
                                cepDate.textContent = `${dayNow} de ${initWhatsMonth(monthNow)}`;
                                cepPrice.textContent = 'R$ 5,99';
                            }
                        });

                        spanStreet.textContent = cepJson.logradouro;

                        if (divCep.classList.contains('d-none'))
                            divCep.classList.toggle('d-none');
                    } else {
                        if (!divCep.classList.contains('d-none'))
                            divCep.classList.toggle('d-none');
                        initAlertUser('danger', 'Adicione um CEP válido.');
                    }
                });
        } else {
            if (!divCep.classList.contains('d-none'))
                divCep.classList.toggle('d-none');
            initAlertUser('danger', 'Adicione um CEP válido.');
        }
    });
}
