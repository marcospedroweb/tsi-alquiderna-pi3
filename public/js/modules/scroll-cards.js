export default function initScrollCards() {

}




// const cardsProduct = document.querySelectorAll('.card-product');
// const btnScroll = document.querySelectorAll('.scroll-cards');

// if (cardsProduct && btnScroll) {
//     let quantityCards = cardsProduct.length;
//     let quantityScroll = 1;
//     let quantityTranslate = 0;

//     function restartValues() {
//         quantityCards = cardsProduct.length;
//         quantityScroll = 1;
//         quantityTranslate = 0;
//     }

//     btnScroll.addEventListener('click', () => {
//         quantityTranslate += 100;
//         quantityScroll++;
//         cardsProduct.forEach(Element => {
//             if (quantityScroll === quantityCards - 2) {
//                 Element.style.transform = `translateX(-${quantityTranslate - 50}%)`;

//             } else if (quantityScroll < quantityCards - 2) {
//                 Element.style.transform = `translateX(-${quantityTranslate}%)`;

//             } else {
//                 console.log('teste', quantityTranslate);
//                 Element.style.transform = `translateX(0%)`;
//                 restartValues();
//             }
//         });
//     });
// }
