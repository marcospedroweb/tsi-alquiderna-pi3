import initAlertUser from "./alert-user.js";

export default function initShippingRates() {

}

let found;

function checkChar(event) {
    const char = String.fromCharCode(event.keyCode);
    const patternWithout = '[0-9-]';


    let cont = 0;

    console.log(inputCep.value.indexOf('-'))
    do {
        found = inputCep.value.indexOf('-');
        if (found !== -1)
            cont++;
    } while (found === -1);

    // if ()
    //     inputCep.value = inputCep.value.replace('-', '');

    if (!char.match(patternWithout) || inputCep.value.length > 8) {
        event.preventDefault();
    }
}

const inputCep = document.querySelector('#input-cep');
const btnSearchCep = document.querySelector('#search-cep');
const divCep = document.querySelector('#div-cep');
if (inputCep && btnSearchCep && divCep) {
    inputCep.addEventListener('keypress', event => {
        checkChar(event);
    });

    btnSearchCep.addEventListener('click', event => {
        if (inputCep.value.length && inputCep.value.length >= 8) {
            if (inputCep.value.indexOf(/[@!#$%^&*()/\\_]/))
                console.log('teste');
            else
                console.log('não')
        } else {
            initAlertUser('danger', 'Adicione um CEP válido.');
        }
    });
}
