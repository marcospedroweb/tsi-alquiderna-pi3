export default function initScrollCards() {
    const carouselProducts = document.querySelectorAll('.carousel-products');
    let totalOfCards;

    function convertNumberToPositive(number) {
        return Math.abs(parseInt(number));
    }

    function slideToCarousel(carouselTarget, slideTo) {
        const dataShowCard = carouselTarget.querySelector('.carousel-products-inner').dataset;
        let translateValueData = carouselTarget.dataset;

        if (slideTo === 'left') {

            if (dataShowCard.carouselShowCard == -1) {
                dataShowCard.carouselShowCard = totalOfCards;
                console.log(dataShowCard.carouselShowCard != totalOfCards && dataShowCard.carouselShowCard != '4')
                if (dataShowCard.carouselShowCard != '4') {
                    if (carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        }, 300);
                    }
                } else if (dataShowCard.carouselShowCard == '4') {
                    if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        }, 300);
                    }
                }


                if (!carouselTarget.querySelector('.carousel-control-next-icon').classList.contains('show')) {
                    carouselTarget.querySelector('.carousel-control-next-icon').classList.toggle('d-none');
                    setTimeout(() => {
                        carouselTarget.querySelector('.carousel-control-next-icon').classList.toggle('show');
                    }, 50);
                }

                translateValueData.translateValue = `-${convertNumberToPositive(translateValueData.translateValue) - 53}`;
            } else {
                dataShowCard.carouselShowCard = parseInt(dataShowCard.carouselShowCard) - 1;
                if (dataShowCard.carouselShowCard == 4) {
                    if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        }, 300);
                    }
                    translateValueData.translateValue = 0;
                } else {
                    translateValueData.translateValue = `-${convertNumberToPositive(translateValueData.translateValue) - 106}`;
                }

            }

        } else {
            if (dataShowCard.carouselShowCard == -1) {
                if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                    carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                    setTimeout(() => {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                    }, 50);
                }

                dataShowCard.carouselShowCard = 4;
                translateValueData.translateValue = 0;

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
                translateValueData.translateValue = convertNumberToPositive(translateValueData.translateValue) + 106;


            } else {
                if (dataShowCard.carouselShowCard == '4') {
                    if (carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        }, 50);
                    }
                }

                if (carouselTarget.querySelector('.carousel-control-next-icon').classList.contains('show')) {
                    carouselTarget.querySelector('.carousel-control-next-icon').classList.toggle('show');
                    setTimeout(() => {
                        carouselTarget.querySelector('.carousel-control-next-icon').classList.toggle('d-none');
                    }, 300);
                }

                dataShowCard.carouselShowCard = -1;
                translateValueData.translateValue = convertNumberToPositive(translateValueData.translateValue) + 53;
            }
        }

        return translateValueData.translateValue;
    }

    carouselProducts.forEach((element) => {
        element.addEventListener('click', (event) => {
            totalOfCards = undefined;
            const carouselTarget = document.querySelector(event.target.dataset.carouselTarget);

            if (carouselTarget) {
                const cardsCarousel = carouselTarget.querySelectorAll('.carousel-products-inner .card-product');
                totalOfCards = cardsCarousel.length;

                if (
                    event.target.classList.contains('carousel-control-prev-icon')
                    && (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none'))
                ) {
                    let translateValue = slideToCarousel(carouselTarget, 'left');
                    cardsCarousel.forEach(element => {
                        element.style.transform = `TranslateX(${translateValue}%)`;
                    });
                } else {
                    let translateValue = slideToCarousel(carouselTarget, 'right');
                    cardsCarousel.forEach(element => {
                        element.style.transform = `TranslateX(-${translateValue}%)`;
                    });
                }
            }
        });
    });
}

