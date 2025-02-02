const registerModal = document.getElementById('register-modal');
const loginModal = document.getElementById('login-modal');

const signupModalBtn = document.getElementById('signup-btn');
const loginModalBtn = document.getElementById('login-btn');

const gotoSignupBtn = document.getElementById('gotoSignup-btn');
const gotoLoginBtn = document.getElementById('gotoLoginup-btn');


const overlay = document.getElementById('overlay');

signupModalBtn.addEventListener('click', () => {
    registerModal.classList.add('active');
    overlay.classList.add('active');
    document.body.classList.add('no-scroll');
})

overlay.addEventListener('click', () => {
    registerModal.classList.remove('active');
    loginModal.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('no-scroll');
})


loginModalBtn.addEventListener('click', () => {
    loginModal.classList.add('active');
    overlay.classList.add('active');
    document.body.classList.add('no-scroll');
})

gotoSignupBtn.addEventListener('click', () => {
    loginModal.classList.remove('active');
    registerModal.classList.add('active');
})

gotoLoginBtn.addEventListener('click', () => {
    loginModal.classList.add('active');
    registerModal.classList.remove('active');
})
