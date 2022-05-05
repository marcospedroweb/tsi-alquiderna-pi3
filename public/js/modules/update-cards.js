import initChangePage from "./change-page.js";

export default function initUpdateCards() {

}

const formFilter = document.querySelector('#form-filter');



async function returnJSON() {
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
            category_name: '',
            itemClass_name: '',
            orderByPrice: {
                order: false,
                orderByValue: '',
            },
            orderByName: {
                order: false,
                orderByValue: '',
            },
            orderByOnSale: {
                order: false,
                orderByValue: '',
            },
            orderByLvlMin: {
                order: false,
                orderByValue: '',
            },
            orderByNews: {
                order: false,
                orderByValue: '',
            },
            orderByAttributes: {
                life: 100,
                physical_protection: 100,
                magic_protection: 100,
                speed: 100,
                physical_attack: 100,
                magic_attack: 100,
                mana: 100,
                strength: 100,
            },
            changePage: false,
            changePageValue: '',
            orderCards: false,
        }),
    }

    const fetchProducts = fetch('/product/json', initFetch);
    return fetchProducts;
}

function returnProductsFormated() {
    const produtosPromisse = new Promise((resolve, reject) => {
        const objectProducts = products;
        if (objectProducts)
            resolve(objectProducts);
        else
            reject('erro');
    });

    produtosPromisse
        .then((r) => r.text())
        .then((json) => {
            return json;
        }).catch(reject => {
            console.log(reject)
        });
}

function returnNewCardsProducts() {
    const cardProductClone = cardProductsTemplate.cloneNode(true);

}

if (formFilter) {
    const cardProductsTemplate = document.querySelector('.card-product');
    let products;
    const btnFilter = document.querySelector('#btn-filter');
    // Inputs
    const totalOfPages = document.querySelector('#totalOfPages');
    const showingStartingNumber = document.querySelector('#showingStartingNumber');
    const showingFinalNumber = document.querySelector('#showingFinalNumber');
    const totalOfProducts = document.querySelector('#totalOfProducts');
    const actualPage = document.querySelector('#actualPage');
    const nextPage = document.querySelector('#nextPage');
    const lastPage = document.querySelector('#lastPage');
    const categoryName = document.querySelector('#categoryName');
    const itemClassName = document.querySelector('#itemClassName');

    const pageLinks = document.querySelectorAll('a.page-link');
    pageLinks.forEach(element => {
        element.addEventListener('click', (event) => {
            event.preventDefault();
            const targetText = event.target.textContent;

            if (targetText == nextPage.value) {
                products = initChangePage(actualPage.value, nextPage.value, lastPage.value, nextPage.value, categoryName.value, itemClassName.value);

                products = returnProductsFormated();

            }
        });
    });



    formFilter.addEventListener('submit', () => {

    });

}


