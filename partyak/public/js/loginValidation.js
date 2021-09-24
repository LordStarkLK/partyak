// Color values
let validColor = '#38d39f';
let invalidColor = '#f44336';


// Input fields and form fields
let email = document.getElementById('email');
let password = document.getElementById('password');
let loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit',function(event){
    event.preventDefault();

    if(validateLoginPassword() && validateEmail()){
        loginForm.submit();
    }
});

function validateAll(){
    validateLoginPassword();
    validateEmail();
}

function setValid(iconField,lineField,messageField){
    iconField.style.color = validColor;
    lineField.style.borderBottomColor = validColor;
    messageField.innerHTML = '';
}

function setInvalid(iconField,lineField,messageField,message){
    iconField.style.color = invalidColor;
    lineField.style.borderBottomColor = invalidColor;
    messageField.innerHTML =message;
}

function checkEmailEmpty(field){
    let iconField = document.getElementById('icon-email');
    let lineField = document.getElementById('div-email');
    let messageField = document.getElementById('helper-email');

    if(field.value.trim() === ''){
        let message = 'Email must not be empty';
        setInvalid(iconField,lineField,messageField,message)
        return true;
    }else {
        setValid(iconField,lineField,messageField)
        return false;
    }
}

function containsCharacters(field){
    let iconField = document.getElementById('icon-email');
    let lineField = document.getElementById('div-email');
    let messageField = document.getElementById('helper-email');

    regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(field.value.match(regEx)){
        setValid(iconField,lineField,messageField)
        return true;
    }else {
        let message = 'Must be a valid email address';
        setInvalid(iconField,lineField,messageField,message)
        return false;
    }
}

function validateEmail(){
    if(checkEmailEmpty(email)){
        return false;
    }

    if(!containsCharacters(email)){
        return false;
    }

    return true;
}

// End of email & password validation

function checkPasswordEmpty(field){
    let iconField = document.getElementById('icon-password');
    let lineField = document.getElementById('div-password');
    let messageField = document.getElementById('helper-password');

    if(field.value.trim() === ''){
        let message = 'Password must not be empty';
        setInvalid(iconField,lineField,messageField,message)
        return true;
    }else {
        setValid(iconField,lineField,messageField)
        return false;
    }
}

function meetLength(field,minLength,maxLength){
    let iconField = document.getElementById('icon-password');
    let lineField = document.getElementById('div-password');
    let messageField = document.getElementById('helper-password');

    if(field.value.length >= minLength && field.value.length < maxLength){
        setValid(iconField,lineField,messageField)
        return true;
    }else if(field.value.length < minLength){
        let message = `Password must be at least ${minLength} characters long`
        setInvalid(iconField,lineField,messageField,message)
        return false;
    }else {
        let message = `Password must be shorter than ${maxLength} characters`
        setInvalid(iconField,lineField,messageField,message)
        return false;
    }
}

function validateLoginPassword(){
    if(checkPasswordEmpty(password)){
        return false;
    }

    if(!meetLength(password,3,100)){
        return false;
    }

    let iconField = document.getElementById('icon-password');
    let lineField = document.getElementById('div-password');
    let messageField = document.getElementById('helper-password');

    setValid(iconField,lineField,messageField);
    return true;
}




