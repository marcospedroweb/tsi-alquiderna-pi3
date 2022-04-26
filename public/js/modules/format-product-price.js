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

}

