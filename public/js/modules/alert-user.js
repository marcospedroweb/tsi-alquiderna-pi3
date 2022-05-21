export default function initAlertUser(color, msg) {
    const alertColors = ['alert-danger', 'alert-success', 'alert-warning'];
    const divAlertUser = document.querySelector('#div-alert-user');

    if (divAlertUser)
        if (color && msg) {
            const mainAlertUser = divAlertUser.querySelector('.alert');
            function removeAlertColor() {
                alertColors.forEach(element => mainAlertUser.classList.remove(element));
            }

            const alertSpan = mainAlertUser.querySelector('span');

            removeAlertColor();
            mainAlertUser.classList.add(`alert-${color}`);

            alertSpan.textContent = msg;

            divAlertUser.classList.toggle('d-none');
            setTimeout(() => {
                divAlertUser.classList.toggle('show');
            }, 200);

            setTimeout(() => {
                divAlertUser.classList.toggle('show');
                setTimeout(() => {
                    divAlertUser.classList.toggle('d-none');
                }, 1000);
            }, 5000);
        }

}

