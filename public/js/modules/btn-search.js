export default function initBtnSearch() {
    const btnSearch = document.querySelector('#btn-search');
    const btnCancelSearch = document.querySelector('#btn-cancel-search');
    const divNav = document.querySelector('#div-nav');
    const divSearch = document.querySelector('#div-search');

    if (btnSearch) {
        btnSearch.addEventListener('click', () => {
            if (divNav.classList.contains('show'))
                divNav.classList.toggle('show');

            setTimeout(() => {
                if (!divNav.classList.contains('d-none'))
                    divNav.classList.toggle('d-none');
                if (divSearch.classList.contains('d-none'))
                    divSearch.classList.toggle('d-none');
            }, 150);
            setTimeout(() => {
                if (!divSearch.classList.contains('show'))
                    divSearch.classList.toggle('show');
            }, 300);

        });

        btnCancelSearch.addEventListener('click', () => {
            if (divSearch.classList.contains('show'))
                divSearch.classList.toggle('show');

            setTimeout(() => {
                if (!divSearch.classList.contains('d-none'))
                    divSearch.classList.toggle('d-none');
                if (divNav.classList.contains('d-none'))
                    divNav.classList.toggle('d-none');
            }, 150);
            setTimeout(() => {
                if (!divNav.classList.contains('show'))
                    divNav.classList.toggle('show');
            }, 300);
        });
    }
}
