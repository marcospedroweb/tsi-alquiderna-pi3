export default function initFormatProductPrice() {
    // Cards price
    const productPrice = document.querySelectorAll('span.product-price');
    const productDiscountPrice = document.querySelectorAll('span.product-discount-price');

    function formatPrice(price, length) {
        if (length === 5)
            return price.textContent.slice(0, 2) + '.' + price.textContent.slice(2);
        else
            return price.textContent.slice(0, 1) + '.' + price.textContent.slice(1);
    }

    function verifyLength(element) {
        if ((element.textContent.trim().length) >= 5 && element.textContent.indexOf('.') === -1)
            element.textContent = formatPrice(element, 5);
        else if ((element.textContent.trim().length) >= 4 && element.textContent.indexOf('.') === -1)
            element.textContent = formatPrice(element, 4);
    }

    productPrice.forEach(element => {
        verifyLength(element);
    });

    productDiscountPrice.forEach(element => {
        verifyLength(element);
    });


    /* Banners price */
    const productPriceBanner = document.querySelectorAll('.div-product-price .p-product-price');
    const productDiscountPriceBanner = document.querySelectorAll('.div-product-price .original-price');

    productPriceBanner.forEach(element => {
        verifyLength(element);
    });

    productDiscountPriceBanner.forEach(element => {
        verifyLength(element);
    });
}

