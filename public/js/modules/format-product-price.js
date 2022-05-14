export default function initFormatProductPrice() {
    const productPrice = document.querySelectorAll('.product-price');
    const productDiscountPrice = document.querySelectorAll('.product-discount-price');

    function formatPrice(price) {
        return price.textContent.slice(0, 1) + '.' + price.textContent.slice(1);
    }

    productPrice.forEach(element => {
        if ((element.textContent.trim().length) >= 4)
            element.textContent = formatPrice(element);
    });

    productDiscountPrice.forEach(element => {
        if ((element.textContent.trim().length) >= 4)
            element.textContent = formatPrice(element);
    });


    /* Banners price */
    const productPriceBanner = document.querySelectorAll('.div-product-price .p-product-price');
    const productDiscountPriceBanner = document.querySelectorAll('.div-product-price .original-price');

    productPriceBanner.forEach(element => {
        if ((element.textContent.trim().length) >= 4)
            element.textContent = formatPrice(element);
    });

    productDiscountPriceBanner.forEach(element => {
        if ((element.textContent.trim().length) >= 4)
            element.textContent = element.textContent.trim().slice(0, 1) + '.' + element.textContent.trim().slice(1);
    });
}

