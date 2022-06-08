import initAlertUser from "./alert-user.js";

export default function initBreadcrumbsPayment(actionCrumb) {
    const formAddress = document.querySelector('#form-address');
    const formPayment = document.querySelector('#form-payment');
    const formConfirm = document.querySelector('#form-confirm');
    const crumbAddress = document.querySelector('#breadcrumb-address');
    const crumbPayment = document.querySelector('#breadcrumb-payment');
    const crumbFinish = document.querySelector('#breadcrumb-finish');

    function actionForm(action) {
        if (action == 'address') {
            if (!formPayment.classList.contains('hide'))
                formPayment.classList.toggle('hide')
            if (!formConfirm.classList.contains('hide'))
                formConfirm.classList.toggle('hide')

            setTimeout(() => {
                if (!formPayment.classList.contains('d-none'))
                    formPayment.classList.toggle('d-none')
                formPayment.classList.remove('hide');
                formPayment.classList.remove('show');
                if (!formConfirm.classList.contains('d-none'))
                    formConfirm.classList.toggle('d-none')
                formConfirm.classList.remove('hide');
                formConfirm.classList.remove('show');

                if (formAddress.classList.contains('d-none'))
                    formAddress.classList.toggle('d-none')
            }, 250);

            setTimeout(() => {
                if (!formAddress.classList.contains('show'))
                    formAddress.classList.toggle('show')
            }, 300);
        } else if (action == 'payment') {
            if (!formAddress.classList.contains('hide'))
                formAddress.classList.toggle('hide')
            if (!formConfirm.classList.contains('hide'))
                formConfirm.classList.toggle('hide')

            setTimeout(() => {
                if (!formAddress.classList.contains('d-none'))
                    formAddress.classList.toggle('d-none')
                formAddress.classList.remove('hide');
                formAddress.classList.remove('show');
                if (!formConfirm.classList.contains('d-none'))
                    formConfirm.classList.toggle('d-none')
                formConfirm.classList.remove('hide');
                formConfirm.classList.remove('show');

                if (formPayment.classList.contains('d-none'))
                    formPayment.classList.toggle('d-none')
            }, 250);

            setTimeout(() => {
                if (!formPayment.classList.contains('show'))
                    formPayment.classList.toggle('show')
            }, 300);
        } else if (action == 'finish') {
            if (!formAddress.classList.contains('hide'))
                formAddress.classList.toggle('hide')
            if (!formPayment.classList.contains('hide'))
                formPayment.classList.toggle('hide')

            setTimeout(() => {
                if (!formAddress.classList.contains('d-none'))
                    formAddress.classList.toggle('d-none')
                formAddress.classList.remove('hide');
                formAddress.classList.remove('show');
                if (!formPayment.classList.contains('d-none'))
                    formPayment.classList.toggle('d-none')
                formPayment.classList.remove('hide');
                formPayment.classList.remove('show');

                if (formConfirm.classList.contains('d-none'))
                    formConfirm.classList.toggle('d-none')
            }, 250);

            setTimeout(() => {
                if (!formConfirm.classList.contains('show'))
                    formConfirm.classList.toggle('show')
            }, 300);
        }
    }

    function actionBreadcrumb(action) {
        if (action == 'address') {
            actionForm(action);
            crumbPayment.dataset.back = "false";
            crumbPayment.classList.remove('active');
            crumbPayment.classList.remove('back');
            if (!crumbPayment.classList.contains('unavailable'))
                crumbPayment.classList.add('unavailable');
            crumbFinish.dataset.back = "false";
            crumbFinish.classList.remove('active');
            crumbFinish.classList.remove('back');
            if (!crumbFinish.classList.contains('unavailable'))
                crumbFinish.classList.add('unavailable');

            crumbAddress.dataset.back = "false";
            if (crumbAddress.classList.contains('active') || crumbPayment.classList.contains('back')) {
                crumbAddress.classList.remove('active');
                crumbAddress.classList.remove('back');
            }
            if (!crumbAddress.classList.contains('active'))
                crumbAddress.classList.add('active');

        } else if (action == 'payment') {
            actionForm(action);
            crumbAddress.dataset.back = "true";
            crumbAddress.classList.remove('active');
            crumbAddress.classList.remove('unavailable');
            if (!crumbAddress.classList.contains('back'))
                crumbAddress.classList.add('back');
            crumbFinish.dataset.back = "false";
            crumbFinish.classList.remove('active');
            crumbFinish.classList.remove('back');
            if (!crumbFinish.classList.contains('unavailable'))
                crumbFinish.classList.add('unavailable');

            crumbPayment.dataset.back = "false";
            if (crumbPayment.classList.contains('back'))
                crumbPayment.classList.remove('back');
            if (!crumbPayment.classList.contains('active'))
                crumbPayment.classList.add('active');
        } else if (action == 'finish') {
            actionForm(action);
            crumbAddress.dataset.back = "true";
            crumbAddress.classList.remove('active');
            crumbAddress.classList.remove('unavailable');
            if (!crumbAddress.classList.contains('back'))
                crumbAddress.classList.add('back');
            crumbPayment.dataset.back = "true";
            crumbPayment.classList.remove('active');
            if (!crumbPayment.classList.contains('back'))
                crumbPayment.classList.add('back');
            if (!crumbPayment.classList.contains('unavailable'))
                crumbPayment.classList.add('unavailable');


            if (crumbFinish.classList.contains('back'))
                crumbFinish.classList.remove('back');
            if (!crumbFinish.classList.contains('active'))
                crumbFinish.classList.add('active');
        }
    }

    if (crumbAddress) {
        crumbAddress.addEventListener('click', () => {
            if (crumbAddress.dataset.back == 'true')
                actionBreadcrumb('address');
        });
        crumbPayment.addEventListener('click', () => {
            if (crumbPayment.dataset.back == 'true')
                actionBreadcrumb('payment');
        });
        crumbFinish.addEventListener('click', () => {
            if (crumbFinish.dataset.back == 'true')
                actionBreadcrumb('finish');
        });

        if (actionCrumb)
            actionBreadcrumb(actionCrumb);
    }

}
