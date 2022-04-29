export default function initChangeInputValues() {

}

const formsFilter = document.querySelectorAll('.form-filter-by');

function returnFormatedValue(input, value) {
    input.value = value;
}

formsFilter.forEach(element => {
    element.addEventListener('submit', (event) => {
        let inputOrderByColumn = event.target.querySelector('input[name="filterByOrderByColumn"]') || '';
        let inputOrderByValue = event.target.querySelector('input[name="filterByOrderByValue"]') || '';
        let inputCategory = event.target.querySelector('input[name="filterByCategory"]') || '';
        let inputItemClass = event.target.querySelector('[name="filterByItemClass"]') || '';
        const valuesOfInputs = event.submitter.value.split('-');

        if (inputCategory && valuesOfInputs[2] !== 'none' && inputItemClass && valuesOfInputs[3] !== 'none') {
            if (inputOrderByColumn && valuesOfInputs[0] !== 'none' && inputOrderByValue && valuesOfInputs[1] !== 'none') {
                returnFormatedValue(inputOrderByColumn, valuesOfInputs[0]);
                returnFormatedValue(inputOrderByValue, valuesOfInputs[1]);
            }
            returnFormatedValue(inputCategory, valuesOfInputs[2]);
            returnFormatedValue(inputItemClass, valuesOfInputs[3]);
        } else if (inputCategory && valuesOfInputs[2] !== 'none') {
            if (inputOrderByColumn && valuesOfInputs[0] !== 'none' && inputOrderByValue && valuesOfInputs[1] !== 'none') {
                returnFormatedValue(inputOrderByColumn, valuesOfInputs[0]);
                returnFormatedValue(inputOrderByValue, valuesOfInputs[1]);
            }
            returnFormatedValue(inputCategory, valuesOfInputs[2]);
        } else {
            returnFormatedValue(inputOrderByColumn, valuesOfInputs[0]);
            returnFormatedValue(inputOrderByValue, valuesOfInputs[1]);
        }

    });
});
