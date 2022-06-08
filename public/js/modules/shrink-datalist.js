export default function initShrinkDatalist() {
    const inputNavbar = document.querySelector('#inputSearch');//input de busca do navbar
    const datalistNavbar = document.querySelector('#datalist-products');//datalist do navbar
    const templateContent = document.querySelector('#list-template').content;//template

    if (inputNavbar) {
        inputNavbar.addEventListener('input', () => {
            showOptions(inputNavbar, datalistNavbar);
        });
    }

    function showOptions(input, datalist) {
        while (datalist.children.length) datalist.removeChild(datalist.firstChild);//Enquanto datalist tiver option, remove
        let inputVal = new RegExp(input.value.trim(), 'i');//Compila aquele texto e remove os espaços em branco
        let set = Array.prototype.reduce.call(templateContent.cloneNode(true).children, function inputFilter(frag, item, i) {
            if (inputVal.test(item.value) && frag.children.length < 6) frag.appendChild(item);
            return frag;
        }, document.createDocumentFragment());//Cria a option
        datalist.appendChild(set);//Adiciona aquela option ao datalist
    }
}
