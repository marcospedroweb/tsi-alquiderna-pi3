import initUpdatePurchaseDescription from "./update-purchase-descripton.js";

export default function initLvlOptions() {


    const lvlMinOptions = document.querySelectorAll('.lvl-min-option');

    if (lvlMinOptions) {
        lvlMinOptions.forEach(element => {
            const checkbox = element.querySelector('input[type=radio]');
            checkbox.addEventListener('change', event => {
                const inputLvlSelected = document.querySelector('input[name=lvl_selected]');
                const checkboxId = event.target.getAttribute('id');
                const lvl = checkboxId.replace('option-lvl-', '');
                let price;

                inputLvlSelected.value = lvl;
                switch (parseInt(lvl)) {
                    case 0:
                        price = 0;
                        break;
                    case 10:
                        price = 100;
                        break;
                    case 20:
                        price = 200;
                        break;
                    case 30:
                        price = 300;
                        break;
                    case 31:
                        price = 0;
                        break;
                    case 40:
                        price = 500;
                        break;
                    case 50:
                        price = 700;
                        break;
                    case 60:
                        price = 900;
                        break;
                    case 61:
                        price = 1200;
                        price = 0;
                        break;
                    case 70:
                        price = 1500;
                        break;
                    case 80:
                        price = 1700;
                        break;
                    case 90:
                        price = 2000;
                        break;
                    case 100:
                        price = 2300;
                        break;
                }
                initUpdatePurchaseDescription('item-durability', lvl, price, 'show');
            });

        });
    }


}
