import initFormatProductPrice from "./format-product-price.js";

export default function initUpdatePurchaseDescription(itemId, itemValue, price, actionListItem, checkboxs) {

    const purchaseDescription = document.querySelector('#purchase-description');

    if (purchaseDescription)
        if (itemId && itemValue)
            if (itemId === 'item-durability') {
                const option = document.querySelector('#item-durability');
                const infoSelected = option.querySelector('.purchase-list-info');
                const spanLvl = infoSelected.querySelector('span');
                const spanPrice = option.querySelector('.only-price');

                spanLvl.textContent = itemValue;
                spanPrice.textContent = price;

                if (actionListItem === 'show')
                    if (option.classList.contains('d-none'))
                        option.classList.toggle('d-none');

                initFormatProductPrice();
            } else if (itemId === 'item-enchants') {
                let contCheckboxs = 0;
                const option = document.querySelector('#item-enchants');
                const lisListEnchant = option.querySelectorAll('.purchase-list-info li');
                const spanPrice = option.querySelector('.only-price');

                lisListEnchant.forEach(li => {
                    if (li.dataset.enchantName === itemValue)
                        if (li.classList.contains('d-none') && actionListItem === 'show')
                            li.classList.toggle('d-none');
                        else if (!li.classList.contains('d-none') && actionListItem === 'hidden')
                            li.classList.toggle('d-none');
                });

                checkboxs.forEach(checkboxElement => {
                    if (checkboxElement.checked)
                        contCheckboxs++;
                });

                if (actionListItem === 'show' && contCheckboxs !== 0) {
                    if (option.classList.contains('d-none'))
                        option.classList.toggle('d-none')

                    if (parseInt(spanPrice.textContent) === 0)
                        spanPrice.textContent = price;
                    else if (parseInt(spanPrice.textContent) !== 0)
                        spanPrice.textContent = parseInt(spanPrice.textContent) + price;
                } else if (actionListItem === 'hidden' && contCheckboxs !== 0) {
                    if (parseInt(spanPrice.textContent) !== 0)
                        spanPrice.textContent = parseInt(spanPrice.textContent) - price;
                } else if (actionListItem === 'hidden' && contCheckboxs === 0) {
                    if (!option.classList.contains('d-none'))
                        option.classList.toggle('d-none')
                    spanPrice.textContent = 0;
                }
            }
}


