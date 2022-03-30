

var  formEl = document.getElementById("form")
var  email = document.getElementById("email")


var  username = document.getElementById("username")
var  e_password = document.getElementById("e_password")


var errorEmail = document.querySelector('.errorEmail')
var errorName = document.querySelector('.errorName')
var errorPassword = document.querySelector('.errorPassword')


// var label_input_email = document.getElementById("label_input_email");
// var label_input_UserName = document.getElementById("label_input_UserName");
// var label_input_Password = document.getElementById("label_input_Password");

// var  submit = document.getElementById("submit")


formEl.addEventListener('submit', (e) =>{
    let regex = /^[a-zA-Z0-9_.-]{4,}@[a-z]{4,7}[.]{1}[a-z]{3,5}$/
    if( email.value.trim() == "" ){
        e.preventDefault()
        errorEmail.textContent = 'empty email'
    }
    else if(!regex.test(email.value)){
        e.preventDefault()
        errorEmail.textContent = 'empty invalid'
    }
    if(username.value.trim() == "" ){
        e.preventDefault()
        errorName.textContent = 'empty UserName'
    }
    if(e_password.value.trim() == "" ){
        e.preventDefault()
        errorPassword.textContent = 'empty Password'
    }
})


