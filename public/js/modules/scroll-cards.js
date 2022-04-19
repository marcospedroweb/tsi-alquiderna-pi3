export default function initScrollCards() {
    const carouselProducts = document.querySelectorAll('.carousel-products');
    let translateValue;

    function slideToCarousel(carouselTarget, slideTo) {
        const dataShowCard = carouselTarget.querySelector('.carousel-products-inner').dataset;
        if (slideTo === 'left')
            switch (dataShowCard.carouselShowCard) {
                // case '4':
                //     dataShowCard.carouselShowCard = 5;
                //     translateValue = 100;
                //     break;
                case '5':
                    if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        }, 50);
                    }

                    dataShowCard.carouselShowCard = 4;
                    translateValue = 0;
                    break;
                case '6':
                    console.log('teste');
                    dataShowCard.carouselShowCard = 5;
                    translateValue = '-115';
                    break;
                case '7':
                    dataShowCard.carouselShowCard = 6;
                    translateValue = '-215';
                    break;
                case '8':
                    translateValue = '-315';
                    dataShowCard.carouselShowCard = 7;
                    break;
                default:
                    console.log('erro');
            }
        else
            switch (dataShowCard.carouselShowCard) {
                case '4':
                    if (carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        }, 50);
                    }

                    dataShowCard.carouselShowCard = 5;
                    translateValue = 115;
                    break;
                case '5':
                    translateValue = 215;
                    dataShowCard.carouselShowCard = 6;
                    break;
                case '6':
                    translateValue = 315;
                    dataShowCard.carouselShowCard = 7;
                    break;
                case '7':
                    translateValue = 365;
                    dataShowCard.carouselShowCard = 8;
                    break;
                case '8':
                    if (!carouselTarget.querySelector('.carousel-control-prev-icon').classList.contains('d-none')) {
                        carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('d-none');
                        setTimeout(() => {
                            carouselTarget.querySelector('.carousel-control-prev-icon').classList.toggle('show');
                        }, 50);
                    }

                    dataShowCard.carouselShowCard = 4;
                    translateValue = 0;
                    break;
                default:
                    console.log('erro');
            }

    }

    carouselProducts.forEach((element) => {
        element.addEventListener('click', (e) => {
            const carouselTarget = document.querySelector(e.target.dataset.carouselTarget);
            const cardsCarousel = carouselTarget.querySelectorAll('.carousel-products-inner .card-product');

            if (
                e.target.classList.contains('carousel-control-prev-icon')
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
        });
    });
}

