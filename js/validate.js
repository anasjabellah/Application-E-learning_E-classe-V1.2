var  formElment = document.getElementById("formEl");
var  emaillogin = document.getElementById("emaillogin");
var  passwordlogin = document.getElementById("e_passwordlogin");

var errorEmail = document.querySelector('.errorEmail');
var errorName = document.querySelector('.errorName');
var errorPassword = document.querySelector('.errorPassword');


formElment.addEventListener('submit', (e) =>{

    if(passwordlogin.value == "" ){
        e.preventDefault()
        errorPassword.textContent = 'empty Password'
    }

    if (emaillogin.value == "") {

        e.preventDefault()
        errorEmail.textContent = 'empty email';
    }

})