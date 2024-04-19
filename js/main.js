var followBtn = document.getElementsByName('un_follow_project')[0];
if (followBtn) {
    followBtn.addEventListener('mouseenter', () => {
        followBtn.value = 'Unfollow';
    });
    followBtn.addEventListener('mouseleave', () => {
        followBtn.value = 'Followed';
    });
}

const collapse = document.querySelectorAll('.collapse');

collapse.forEach(item => {
    let clickHead = item.querySelector('.head-task');
    clickHead.addEventListener('click', () => {
        item.classList.toggle('active');
    })
})


let urForm = document.querySelector('header #user-registration-form-49');
let urForm2 = document.querySelector('header #user-registration');
let darkLayer = document.querySelector('.dark-layer');
if (urForm2) {

    let loginBtn = document.querySelector('header .login-btn');
    loginBtn.addEventListener('click', () => {
        urForm2.classList.toggle('active');
        darkLayer.classList.toggle('active');
    })

    darkLayer.addEventListener('click', () => {
        urForm.classList.remove('active');
        urForm2.classList.remove('active');
        darkLayer.classList.remove('active');
    })
}

if (urForm) {

    let goToLoggin = document.createElement('div');
    goToLoggin.classList.add('go-to-loggin');
    goToLoggin.innerHTML = 'Do you already have an account? <span>Loggin</span>'
    urForm.appendChild(goToLoggin);

    let goToRegister = document.createElement('div');
    goToRegister.classList.add('go-to-Register');
    goToRegister.innerHTML = 'You don\'t have an account? <span>Register</span>'
    urForm2.appendChild(goToRegister);

    goToLoggin.addEventListener('click', () => {
        urForm.classList.toggle('active');
        urForm2.classList.toggle('active');
    })

    goToRegister.addEventListener('click', () => {
        urForm.classList.toggle('active');
        urForm2.classList.toggle('active');
    })

}

