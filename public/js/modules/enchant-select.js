import initUpdatePurchaseDescription from "./update-purchase-description.js";

export default function initEnchantSelect() {

}

//Select and div enchant types
const enchantSelect = document.querySelector('#enchant-select');
const divEnchantTypes = document.querySelector('#div-enchant-types');
//checkbox enchant types
const enchantTypes = document.querySelectorAll('.enchant-type');
//labels

if (enchantSelect && divEnchantTypes && enchantTypes) {
    const labelSpan = divEnchantTypes.querySelectorAll('.form-check label span');
    enchantSelect.addEventListener('change', event => {
        const optionSelected = enchantSelect.options[enchantSelect.selectedIndex].value;

        if (optionSelected === '1') {
            if (divEnchantTypes.classList.contains('d-none'))
                divEnchantTypes.classList.toggle('d-none');
        } else {
            if (!divEnchantTypes.classList.contains('d-none'))
                divEnchantTypes.classList.toggle('d-none');
            labelSpan.forEach(span => {
                if (!span.classList.contains('d-none'))
                    span.classList.toggle('d-none');
            });
            initUpdatePurchaseDescription('item-enchants', 'hidden-all', 600, 'hidden-all', enchantTypes);
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
