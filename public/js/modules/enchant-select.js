import initUpdatePurchaseDescription from "./update-purchase-descripton.js";

export default function initEnchantSelect() {

}

//Select and div enchant types
const enchantSelect = document.querySelector('#enchant-select');
const divEnchantTypes = document.querySelector('#div-enchant-types');
//checkbox enchant types
const enchantTypes = document.querySelectorAll('.enchant-type');

if (enchantSelect && divEnchantTypes && enchantTypes) {
    enchantSelect.addEventListener('change', event => {
        const optionSelected = enchantSelect.options[enchantSelect.selectedIndex].value;

        if (optionSelected === '1') {
            if (divEnchantTypes.classList.contains('d-none'))
                divEnchantTypes.classList.toggle('d-none');
        } else {
            if (!divEnchantTypes.classList.contains('d-none'))
                divEnchantTypes.classList.toggle('d-none');
        }

    });

    enchantTypes.forEach(checkbox => {
        checkbox.addEventListener('change', event => {
            const checkboxName = event.target.getAttribute('name');
            const checkboxId = event.target.getAttribute('id');
            const label = divEnchantTypes.querySelector(`label[for=${checkboxId}]`);
            const labelSpanUpgrade = label.querySelector('span');

            labelSpanUpgrade.classList.toggle('d-none');
            if (event.target.checked)
                initUpdatePurchaseDescription('item-enchants', checkboxName, 600, 'show', enchantTypes);
            else
                initUpdatePurchaseDescription('item-enchants', checkboxName, 600, 'hidden', enchantTypes);
        });
    });
}