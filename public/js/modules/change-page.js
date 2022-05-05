export default function initChangePage(actualPage, nextPage, lastPage, changeValue, categoryName, itemClassName) {
    let initFetch = {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            'X-CSRF-TOKEN': document.querySelector('#token-laravel').value,
        },
        method: 'POST',
        credentials: "same-origin",
        body: JSON.stringify({
            category_name: categoryName,
            itemClass_name: itemClassName,
            changePage: true,
            changePageValue: changeValue,
        }),
    }

    async function returnJSON() {

        const fetchProducts = await fetch('/product/json', initFetch);
        return fetchProducts;
    }

    return returnJSON();

}
