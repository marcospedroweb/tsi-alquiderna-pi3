export default function initSelectsGuarantee() {

    const selectBreakageGuarantee = document.querySelector('#breakage_guarantee_select');
    const selectTheftGuarantee = document.querySelector('#theft_guarantee_select');

    if (selectBreakageGuarantee && selectTheftGuarantee) {
        const optionsBreakageGuarantee = document.querySelectorAll('input[name=breakage_guarantee_months]');
        const optionsTheftGuarantee = document.querySelectorAll('input=[name=theft_guarantee_months]');

        selectBreakageGuarantee.addEventListener('change', event => {
            const divBreakageGuarantee = document.querySelector('#div_breakage_guarantee_months');

            if (selectBreakageGuarantee.options[selectBreakageGuarantee.selectedIndex].value === '1') {
                if (divBreakageGuarantee.classList.contains('d-none'))
                    divBreakageGuarantee.classList.toggle('d-none');
            } else {
                if (!divBreakageGuarantee.classList.contains('d-none'))
                    divBreakageGuarantee.classList.toggle('d-none');
            }

        });

        selectTheftGuarantee.addEventListener('change', event => {
            const divTheftGuarantee = document.querySelector('#div_theft_guarantee_months');

            if (selectTheftGuarantee.options[selectTheftGuarantee.selectedIndex].value === '1') {
                if (divTheftGuarantee.classList.contains('d-none'))
                    divTheftGuarantee.classList.toggle('d-none');
            } else {
                if (!divTheftGuarantee.classList.contains('d-none'))
                    divTheftGuarantee.classList.toggle('d-none');
            }

        });
    }

}
