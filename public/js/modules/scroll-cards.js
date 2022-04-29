export default function initScrollCards() {
    const carouselProducts = document.querySelectorAll('.carousel-products');
    let translateValue = 15;
    let totalOfCards;

    function slideToCarousel(carouselTarget, slideTo) {
        const dataShowCard = carouselTarget.querySelector('.carousel-products-inner').dataset;
        if (slideTo === 'left') {

            if (dataShowCard.carouselShowCard == -1) {
                dataShowCard.carouselShowCard = totalOfCards;
                translateValue = `-${Math.abs(parseInt(translateValue)) - 50}`;
            } else {
                dataShowCard.carouselShowCard = parseInt(dataShowCard.carouselShowCard) - 1;
                if (dataShowCard.carouselShowCard == 4) {
                    if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        }, 50);
                    }
                    translateValue = 0;
                } else {
                    translateValue = `-${Math.abs(parseInt(translateValue)) - 100}`;
                }

            }

        } else {
            if (dataShowCard.carouselShowCard == -1) {
                if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                    carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                    setTimeout(() => {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                    }, 50);
                }

                dataShowCard.carouselShowCard = 4;
                translateValue = 0;

            } else if (dataShowCard.carouselShowCard < totalOfCards) {
                if (dataShowCard.carouselShowCard == '4') {
                    if (carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        }, 50);
                    }
                }

                dataShowCard.carouselShowCard = parseInt(dataShowCard.carouselShowCard) + 1;
                translateValue = Math.abs(parseInt(translateValue)) + (translateValue == 0 ? 15 + 100 : 100);

            } else {
                dataShowCard.carouselShowCard = -1;
                translateValue = Math.abs(parseInt(translateValue)) + 50;
            }
        }


        // if (slideTo === 'left')
        //     switch (dataShowCard.carouselShowCard) {
        //         case '5':
        //             if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
        //                 carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
        //                 setTimeout(() => {
        //                     carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
        //                 }, 50);
        //             }

        //             dataShowCard.carouselShowCard = 4;
        //             translateValue = 0;
        //             break;
        //         case '6':
        //             dataShowCard.carouselShowCard = 5;
        //             translateValue = '-115';
        //             break;
        //         case '7':
        //             dataShowCard.carouselShowCard = 6;
        //             translateValue = '-215';
        //             break;
        //         case '8':
        //             translateValue = '-315';
        //             dataShowCard.carouselShowCard = 7;
        //             break;
        //         case '9':
        //             translateValue = '-415';
        //             dataShowCard.carouselShowCard = 8;
        //             break;
        //         default:
        //             console.log('erro');
        //     }
        // else
        //     switch (dataShowCard.carouselShowCard) {
        //         case '4':
        //             if (totalOfCards <= dataShowCard.carouselShowCard) {
        //                 if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
        //                     carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
        //                     setTimeout(() => {
        //                         carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
        //                     }, 50);
        //                 }
        //                 translateValue = 365;
        //                 dataShowCard.carouselShowCard = 5;
        //             } else {
        //                 if (carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
        //                     console.log(carouselTarget.querySelector('.carousel-control-prev-icon'))
        //                     carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
        //                     setTimeout(() => {
        //                         carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
        //                     }, 50);
        //                 }

        //                 dataShowCard.carouselShowCard = 5;
        //                 translateValue = 115;
        //             }

        //             break;
        //         case '5':
        //             if (totalOfCards <= dataShowCard.carouselShowCard) {
        //                 translateValue = 165;
        //                 dataShowCard.carouselShowCard = -1;
        //             } else {
        //                 translateValue = 215;
        //                 dataShowCard.carouselShowCard = 6;
        //             }

        //             break;
        //         case '6':
        //             if (totalOfCards <= dataShowCard.carouselShowCard) {
        //                 translateValue = 265;
        //                 dataShowCard.carouselShowCard = -1;
        //             } else {
        //                 translateValue = 315;
        //                 dataShowCard.carouselShowCard = 7;
        //             }
        //             break;
        //         case '7':
        //             if (totalOfCards <= dataShowCard.carouselShowCard) {
        //                 translateValue = 365;
        //                 dataShowCard.carouselShowCard = -1;
        //             } else {
        //                 translateValue = 415;
        //                 dataShowCard.carouselShowCard = 8;
        //             }
        //             break;
        //         case '8':
        //             translateValue = 470;
        //             dataShowCard.carouselShowCard = 9;
        //             break;
        //         default:
        //             if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
        //                 carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
        //                 setTimeout(() => {
        //                     carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
        //                 }, 50);
        //             }

        //             translateValue = 0;
        //             dataShowCard.carouselShowCard = 4;
        //     }

    }

    carouselProducts.forEach((element) => {
        element.addEventListener('click', (event) => {
            const carouselTarget = document.querySelector(event.target.dataset.carouselTarget);
            if (carouselTarget) {
                const cardsCarousel = carouselTarget.querySelectorAll('.carousel-products-inner .card-product');
                totalOfCards = cardsCarousel.length;

                if (
                    event.target.classList.contains('carousel-control-prev-icon')
                    && (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none'))
                ) {
                    slideToCarousel(carouselTarget, 'left');
                    cardsCarousel.forEach(element => {
                        element.style.transform = `TranslateX(${translateValue}%)`;
                    });
                } else {
                    slideToCarousel(carouselTarget, 'right');
                    cardsCarousel.forEach(element => {
                        element.style.transform = `TranslateX(-${translateValue}%)`;
                    });
                }
            }
        });
    });
}

