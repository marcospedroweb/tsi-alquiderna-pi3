export default function initChangeInputPrice() {
    const selectSale = document.querySelector('[name="sale"]');
    const colDiscountPrice = document.querySelector('#col-discount-price');


    if (selectSale && colDiscountPrice)
        selectSale.addEventListener('change', () => {
            if (selectSale.selectedOptions[0].value === '1')
                colDiscountPrice.classList.toggle('d-none');
        });
}


