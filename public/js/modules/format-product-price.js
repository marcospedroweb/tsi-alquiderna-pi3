export default function initFormatProductPrice() {
    // Cards price
    const productPrice = document.querySelectorAll('span.product-price');
    const productDiscountPrice = document.querySelectorAll('span.product-discount-price');

    function formatPrice(price, length) {
        if (length === 5)
            return price.slice(0, 2) + '.' + price.slice(2);
        else
            return price.slice(0, 1) + '.' + price.slice(1);
    }

    function verifyLength(element) {
        const price = element.textContent.trim();
        if ((price.length) >= 5 && element.textContent.indexOf('.') === -1)
            element.textContent = formatPrice(price, 5);
        else if ((price.length) >= 4 && element.textContent.indexOf('.') === -1)
            element.textContent = formatPrice(price, 4);
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

