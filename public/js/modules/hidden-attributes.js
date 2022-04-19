export default function initHiddenAttributes() {

    const itemClassesId = {
        armadura: ['1', '2', '3'],
        armaFisica: ['4', '5', '6'],
        armaMagica: ['4', '7'],
        pocoes: ['8', '9', '10'],
        grimorio: ['11'],
    }

    const selectcategoryChosen = document.querySelector("[data-category]");
    const divInputLife = document.querySelector("#div-input-life");
    const divInputSpeed = document.querySelector("#div-input-speed");
    const divInputstrength = document.querySelector("#div-input-strength");
    const divInputPhysicalProtection = document.querySelector("#div-input-physical-protection");
    const divInputMagicProtection = document.querySelector("#div-input-magic-protection");
    const divInputPhysicalAttack = document.querySelector("#div-input-physical-attack");
    const divInputMagicAttack = document.querySelector("#div-input-physical-magic");
    const divInputMana = document.querySelector("#div-input-mana");

    function removeInputsAndClasses(optionsSelectClasses) {
        // Tira o d-none de todos os inputs
        divInputPhysicalAttack.classList.remove("d-none");
        divInputMagicAttack.classList.remove("d-none");
        divInputMana.classList.remove("d-none");
        divInputPhysicalProtection.classList.remove("d-none");
        divInputMagicProtection.classList.remove("d-none");
        divInputLife.classList.remove("d-none");
        divInputSpeed.classList.remove("d-none");
        divInputstrength.classList.remove("d-none");

        // Tira todos os d-none de classes
        optionsSelectClasses.forEach(elementOption => {
            if (!elementOption.classList.contains('d-none') && elementOption.value !== '0') {
                elementOption.classList.add('d-none');
            }
        });
    }


    if (selectcategoryChosen && divInputLife && divInputSpeed && divInputstrength && divInputPhysicalProtection && divInputMagicProtection && divInputPhysicalAttack && divInputMagicAttack && divInputMana) {

        selectcategoryChosen.addEventListener("change", () => {
            const selectItemClasses = document.querySelector('select[name="itemClass_id"]');
            if (selectItemClasses.classList.contains("d-none"))
                selectItemClasses.classList.remove("d-none");

            const categoryChosen = selectcategoryChosen.selectedOptions[0].textContent; // Qual categoria a pessoa escolheu
            const optionsSelectClasses = Array.from(selectItemClasses.options); // Transforma todas as classes em array
            removeInputsAndClasses(optionsSelectClasses); // Retorna todos os inputs e selects a zero
            selectItemClasses.value = '0';
            if (categoryChosen.trim() === 'Armadura') {
                divInputPhysicalAttack.classList.add("d-none");
                divInputMagicAttack.classList.add("d-none");
                divInputMana.classList.add("d-none");
                divInputstrength.classList.add('d-none');

                //Tira a classe [d-none] de todas as classes relacionadas a armadura
                itemClassesId.armadura.forEach(elementCLass => {
                    optionsSelectClasses.forEach(elementOption => {
                        if (elementCLass == elementOption.value | elementOption.value == '12')
                            elementOption.classList.remove('d-none');
                    });
                });
            } else if (['Arma física', 'Arma mágica'].includes(categoryChosen.trim())) {
                //Tirando os inputs que não são validos para armaduras
                divInputPhysicalProtection.classList.add("d-none");
                divInputMagicProtection.classList.add("d-none");
                divInputLife.classList.add("d-none");
                divInputSpeed.classList.add("d-none");
                divInputstrength.classList.add('d-none');

                //Tira a classe [d-none] de todas as classes relacionadas a armadura
                itemClassesId.armaFisica.forEach(elementCLass => {
                    optionsSelectClasses.forEach(elementOption => {
                        if (elementCLass == elementOption.value | elementOption.value == '12')
                            elementOption.classList.remove('d-none');
                    });
                });
            } else if (categoryChosen.trim() === 'Poção') {

                divInputPhysicalProtection.classList.add("d-none");
                divInputMagicProtection.classList.add("d-none");
                divInputMagicAttack.classList.add("d-none");
                divInputPhysicalAttack.classList.add("d-none");

                //Tira a classe [d-none] de todas as classes relacionadas a armadura
                itemClassesId.pocoes.forEach(elementCLass => {
                    optionsSelectClasses.forEach(elementOption => {
                        if (elementCLass == elementOption.value | elementOption.value == '12')
                            elementOption.classList.remove('d-none');
                    });
                });

            } else {
                divInputPhysicalProtection.classList.add("d-none");
                divInputMagicProtection.classList.add("d-none");
                divInputLife.classList.add("d-none");
                divInputSpeed.classList.add("d-none");
                divInputstrength.classList.add('d-none');

                itemClassesId.grimorio.forEach(elementCLass => {
                    optionsSelectClasses.forEach(elementOption => {
                        if (elementCLass == elementOption.value | elementOption.value == '12')
                            elementOption.classList.remove('d-none');
                    });
                });
            }

        });

    }
}
