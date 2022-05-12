export default function initChangeInputValues() {
    const formsFilter = document.querySelectorAll('.form-filter-by');

    if (formsFilter) {

        function hasOrderBy(condition, inputColumn, inputValue, valuesOfInputs) {
            if (condition) {
                inputColumn.value = valuesOfInputs[0];
                inputValue.value = valuesOfInputs[1];
            } else {
                inputColumn.value = 'name';
                inputValue.value = 'ASC';
            }

        }

        formsFilter.forEach(element => {
            element.addEventListener('submit', (event) => {
                const inputOrderByColumn = event.target.querySelector('input[name="filterByOrderByColumn"]') || '';
                const inputOrderByValue = event.target.querySelector('input[name="filterByOrderByValue"]') || '';
                const inputCategory = event.target.querySelector('input[name="filterByCategory"]') || '';
                const inputItemClass = event.target.querySelector('[name="filterByItemClass"]') || '';
                const valuesOfInputs = event.submitter.value.split('-');

                const conditionCategoryItemClass = inputCategory && valuesOfInputs[2] !== 'none' && inputItemClass && valuesOfInputs[3] !== 'none';
                const codigitionItemClass = inputCategory && valuesOfInputs[2] !== 'none';
                const coditionOrderColumnOrderValue = inputOrderByColumn && valuesOfInputs[0] !== 'none' && inputOrderByValue && valuesOfInputs[1] !== 'none';

                if (conditionCategoryItemClass) {
                    hasOrderBy(coditionOrderColumnOrderValue, inputOrderByColumn, inputOrderByValue, valuesOfInputs);

                    inputCategory.value = valuesOfInputs[2];
                    inputItemClass.value = valuesOfInputs[3];
                } else if (codigitionItemClass) {
                    hasOrderBy(coditionOrderColumnOrderValue, inputOrderByColumn, inputOrderByValue, valuesOfInputs);

                    inputCategory.value = valuesOfInputs[2];
                } else {
                    hasOrderBy(coditionOrderColumnOrderValue, inputOrderByColumn, inputOrderByValue, valuesOfInputs);
                }

            });
        });
    }
}





