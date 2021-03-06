import initUpdatePurchaseDescription from "./update-purchase-description.js";

export default function initSelectsGuarantee() {


}


const selectBreakageGuarantee = document.querySelector('#breakage_guarantee_select');
const selectTheftGuarantee = document.querySelector('#theft_guarantee_select');

if (selectBreakageGuarantee && selectTheftGuarantee) {
    const optionsBreakageGuarantee = document.querySelectorAll('input[name=breakage_guarantee_months]');
    const optionsTheftGuarantee = document.querySelectorAll('input[name=theft_guarantee_months]');
    const breakagePrice = document.querySelector('input[name=product_breakage_guarantee_price]');
    const theftPrice = document.querySelector('input[name=product_theft_guarantee_price]');
    //Hidden default guarantee
    const hiddenBreakageRadio = document.querySelectorAll('.option-breakage_guarantee_default');
    const hiddenTheftRadio = document.querySelectorAll('.option-theft_guarantee_default');

    selectBreakageGuarantee.addEventListener('change', event => {
        const divBreakageGuarantee = document.querySelector('#div_breakage_guarantee_months');
        if (selectBreakageGuarantee.options[selectBreakageGuarantee.selectedIndex].value === '1') {

            hiddenBreakageRadio.forEach(hiddenBreakage => {
                if (hiddenBreakage.checked === true) {
                    console.log('teste')
                    hiddenBreakage.checked = false;
                }
            });

            if (divBreakageGuarantee.classList.contains('d-none'))
                divBreakageGuarantee.classList.toggle('d-none');

        } else {
            //reset all
            optionsBreakageGuarantee.forEach(inputRadio => inputRadio.checked = false);
            initUpdatePurchaseDescription('item-guarantee', 'breakage_guarantee_months', 0, 'hidden', optionsBreakageGuarantee, optionsTheftGuarantee);
            breakagePrice.value = 0;

            hiddenBreakageRadio.forEach(hiddenBreakage => {
                if (hiddenBreakage.checked == false)
                    hiddenBreakage.checked = true;
            });

            if (!divBreakageGuarantee.classList.contains('d-none'))
                divBreakageGuarantee.classList.toggle('d-none');
        }

    });

    selectTheftGuarantee.addEventListener('change', event => {
        const divTheftGuarantee = document.querySelector('#div_theft_guarantee_months');

        if (selectTheftGuarantee.options[selectTheftGuarantee.selectedIndex].value === '1') {

            hiddenTheftRadio.forEach(hiddenTheft => {
                if (hiddenTheft.checked == true)
                    hiddenTheft.checked = false;
            });

            if (divTheftGuarantee.classList.contains('d-none'))
                divTheftGuarantee.classList.toggle('d-none');

        } else {
            //reset all
            optionsTheftGuarantee.forEach(inputRadio => inputRadio.checked = false);
            initUpdatePurchaseDescription('item-guarantee', 'theft_guarantee_months', 0, 'hidden', optionsBreakageGuarantee, optionsTheftGuarantee);
            theftPrice.value = 0;

            hiddenTheftRadio.forEach(hiddenTheft => {
                if (hiddenTheft.checked == false)
                    hiddenTheft.checked = true;
            });

            if (!divTheftGuarantee.classList.contains('d-none'))
                divTheftGuarantee.classList.toggle('d-none');
        }

    });

    function inputRadioChange(input, inputsRadio) {
        input.addEventListener('change', event => {
            const radioValue = event.target.value;
            const radioName = event.target.getAttribute('name');

            if (radioValue === '6') {

                if (radioName === 'breakage_guarantee_months')
                    breakagePrice.value = 400;
                else
                    theftPrice.value = 400;

                initUpdatePurchaseDescription('item-guarantee', radioName, 400, 'show', inputsRadio);

            } else if (radioValue === '12') {

                if (radioName === 'breakage_guarantee_months')
                    breakagePrice.value = 800;
                else
                    theftPrice.value = 800;

                initUpdatePurchaseDescription('item-guarantee', radioName, 800, 'show', inputsRadio);

            } else {

                if (radioName === 'breakage_guarantee_months')
                    breakagePrice.value = 1200;
                else
                    theftPrice.value = 1200;

                initUpdatePurchaseDescription('item-guarantee', radioName, 1200, 'show', inputsRadio);

            }
        });

    }

    optionsBreakageGuarantee.forEach(inputRadio => inputRadioChange(inputRadio, optionsBreakageGuarantee));
    optionsTheftGuarantee.forEach(inputRadio => inputRadioChange(inputRadio, optionsTheftGuarantee));
}






