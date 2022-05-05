export default function initUpdateCards() {

}

// async function returnJSON() {
//     let actualUrl = window.location.href;
//     actualUrl = actualUrl.slice(0, actualUrl.indexOf('/', 7));
//     const jsonProdutos = await fetch(`${actualUrl}/product/json/Armadura/média`);
//     return jsonProdutos;
// }

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
        }),
    }

    let teste = fetch('/product/json', initFetch);
    return teste;
}

if (false) {

    const produtosPromisse = new Promise((resolve, reject) => {
        const objectProducts = returnJSON();
        if (objectProducts)
            resolve(objectProducts);
        else
            reject('erro');
    });

    produtosPromisse
        .then((r) => r.text())
        .then((json) => {
            console.log(json);
        }).catch(reject => {
            console.log(reject)
        });
}

