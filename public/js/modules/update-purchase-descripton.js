import initFormatProductPrice from "./format-product-price.js";

export default function initUpdatePurchaseDescription(itemId, itemValue, price, actionListItem, checkboxs) {

    const purchaseDescription = document.querySelector('#purchase-description');
    const defaultPrice = document.querySelector('#item-default-price .only-price');
    const durabilityPrice = document.querySelector('#item-durability .only-price');
    const enchantPrice = document.querySelector('#item-enchants .only-price');
    const purchaseTotalPrice = document.querySelector('#purchase-total-price span');

    //Hidden Inputs price
    const inputProductDefaultPrice = document.querySelector('input[name=product_default_price]');
    const inputProductLvlPrice = document.querySelector('input[name=product_lvl_price]');
    const inputProductEnchantPrice = document.querySelector('input[name=product_enchant_price]');
    const inputProductTotalPrice = document.querySelector('input[name=product_total_price]');

    function updateTotalPrice() {
        let defaultPriceFormated = parseInt(defaultPrice.textContent.replace('.', ''));
        let durabilityPriceFormated = parseInt(durabilityPrice.textContent.replace('.', ''));
        let enchantPriceFormated = parseInt(enchantPrice.textContent.replace('.', ''));

        inputProductDefaultPrice.value = defaultPriceFormated;
        inputProductLvlPrice.value = durabilityPriceFormated;
        inputProductEnchantPrice.value = enchantPriceFormated;
        inputProductTotalPrice.value = defaultPriceFormated + durabilityPriceFormated + enchantPriceFormated;

        purchaseTotalPrice.textContent = defaultPriceFormated + durabilityPriceFormated + enchantPriceFormated;
    }


    if (purchaseDescription && purchaseTotalPrice)
        if (itemId && itemValue)
            if (itemId === 'item-durability') {
                const option = document.querySelector('#item-durability');
                const infoSelected = option.querySelector('.purchase-list-info');
                const spanLvl = infoSelected.querySelector('span');
                const spanPrice = option.querySelector('.only-price');

                spanLvl.textContent = itemValue;
                spanPrice.textContent = price;
                purchaseTotalPrice.textContent = parseInt(purchaseTotalPrice.textContent.replace('.', '')) + price;

                if (actionListItem === 'show')
                    if (option.classList.contains('d-none'))
                        option.classList.toggle('d-none');

                initFormatProductPrice();
                updateTotalPrice();

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

                    purchaseTotalPrice.textContent = parseInt(purchaseTotalPrice.textContent.replace('.', '')) + price;
                    if (parseInt(spanPrice.textContent) === 0)
                        spanPrice.textContent = price;
                    else if (parseInt(spanPrice.textContent) !== 0)
                        spanPrice.textContent = parseInt(spanPrice.textContent) + price;
                } else if (actionListItem === 'hidden' && contCheckboxs !== 0) {
                    if (parseInt(spanPrice.textContent) !== 0) {
                        purchaseTotalPrice.textContent = parseInt(purchaseTotalPrice.textContent.replace('.', '')) - price;
                        spanPrice.textContent = parseInt(spanPrice.textContent) - price;
                    }
                } else if (actionListItem === 'hidden' && contCheckboxs === 0) {
                    if (!option.classList.contains('d-none'))
                        option.classList.toggle('d-none')
                    spanPrice.textContent = 0;
                }

                updateTotalPrice();
            }
}


