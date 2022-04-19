export default function initReplaceRecommendation() {
    const recommendationText = document.querySelectorAll('.recommendation-text');
    if (recommendationText)
        recommendationText.forEach(element => {
            switch (element.textContent) {
                case 'ini':
                    element.textContent = 'Recomendado para aventureiros iniciantes';
                    break;
                case 'int':
                    element.textContent = 'Recomendado para aventureiros intermediários';
                    break;
                case 'avan':
                    element.textContent = 'Recomendado para aventureiros avançados';
                    break;
                default:
                    element.textContent = 'Não há recomendação';
            }
        })
}

