let validColor = '#38d39f';
let invalidColor = '#f44336';

let email = document.getElementById("email");
let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let type = document.getElementById("type");
let password = document.getElementById("password");
let confpassword = document.getElementById("confpassword");
let form = document.getElementById("form");

form.addEventListener('submit', function(event){
    event.preventDefault();

    if(validateEmail() && validateFname() && validateLname() && validateType() &&
        validatePassword() && validateConfPassword()){
        form.submit();
    }
})



function typeEmpty(field){
    if(type.value == "null"){
        setInvalid(field,`Select a vendor type`);
        return true;
        
    }else{
        setValid(field);
        return false;
    }

    
}



function setValid(field){
    field.style.borderColor = validColor;
    field.nextElementSibling.innerHTML = "";
}

function setInvalid(field,message){
    field.style.borderColor = invalidColor;
    field.nextElementSibling.innerHTML = message;
}

function isEmpty(value){
    if(value === ''){
        return true;
    }else{
        return false;
    }
}

function checkEmpty(field){
    if(isEmpty(field.value.trim())){
        setInvalid(field,`${field.getAttribute("placeholder")} must not be empty`);
        return true;
    }else{
        setValid(field);
        return false;

        
    }
}

function meetLength(field,minLength,maxLength){
    if(field.value.length >= minLength && field.value.length < maxLength){
        setValid(field);
        return true;
    }else if(field.value.length < minLength){
        setInvalid(field,`${field.getAttribute("placeholder")} must be at least ${minLength} characters long`);
        return false;
    }else{
        setInvalid(field,`${field.getAttribute("placeholder")} must be shorter than ${maxLength} characters`);
        return false;
    }
}

function fixedLength(field, length) {
    if (field.value.length === length) {
        setValid(field);
        return true;
    }
    else {
        setInvalid(
            field,
            `${field.getAttribute("placeholder")} must have ${length} characters only`
        );
        return false;
    }
}

function matchWithRegEx(regEx, field, message) {
    if (field.value.match(regEx)) {
        setValid(field);
        return true;
    } else {
        setInvalid(field, message);
        return false;
    }
}

function containsCharacters(field, code) {
    let regEx;

    switch (code) {
        case 1:
            // letters
            regEx = /(?=.*[a-zA-Z])/;
            return matchWithRegEx(regEx, field, 'Must contain at least one letter');

        case 2:
            // letter and numbers
            regEx = /(?=.*\d)(?=.*[a-zA-Z])/;
            return matchWithRegEx(
                regEx,
                field,
                'Must contain at least one letter and one number'
            );

        case 3:
            // uppercase, lowercase and number
            regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
            return matchWithRegEx(
                regEx,
                field,
                'Must contain at least one uppercase, one lowercase letter and one number'
            );

        case 4:
            // uppercase, lowercase, number and special char
            regEx = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/;
            return matchWithRegEx(
                regEx,
                field,
                'Must contain at least one uppercase, one lowercase letter, one number and one special character'
            );

        case 5:

            // Email pattern
            regEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return matchWithRegEx(regEx, field, 'Must be a valid email address');

        case 6:
            //Numbers only
            regEx = /^[0-9]+$/;
            return matchWithRegEx(regEx, field, `${field.getAttribute("placeholder")} must contain only numbers`);

        case 7:
            //Letters only
            regEx = /^[A-Za-z]+$/;
            return matchWithRegEx(regEx, field, `${field.getAttribute("placeholder")} must contain only letters`);

        case 8:
            regEx = /^\S+$/;
            return matchWithRegEx(regEx, field, `${field.getAttribute("placeholder")} must not contain white spaces`);

        default:
            return false;
    }
}


function validateAll() {
    validateEmail();
    validateFname();
    validateLname();
    validateType();
    validatePassword();
    validateConfPassword();
}

function validateEmail(){
    if(checkEmpty(email)){
        return false;
    }

    if(!containsCharacters(email,5)){
        return false;
    }

    return true;
}

function validateFname(){
    if(checkEmpty(fname)){
        return false;
    }

    if(!containsCharacters(fname,8)){
        return false;
    }

    if(!containsCharacters(fname,7)){
        return false;
    }

    if(!meetLength(fname,3,50)){
        return false;
    }

    return true;
}

function validateLname(){
    if(checkEmpty(lname)){
        return false;
    }

    if(!containsCharacters(lname,8)){
        return false;
    }

    if(!containsCharacters(lname,7)){
        return false;
    }

    if(!meetLength(lname,3,50)){
        return false;
    }

    return true;
}

function validateType(){
    if(typeEmpty(type)){
        return false;
    }

    return true;
}

function validatePassword() {
    if (checkEmpty(password)) {
        return false;
    }

    if (!meetLength(password, 4, 100)) {
        return false;
    }

    if (!containsCharacters(password, 4)) {
        return false;
    }

    // if (password.value.trim() != "") {
    //     validatePassword2();
    // }

    return true;
}

function validateConfPassword() {
    if (checkEmpty(confpassword)) {
        return false;
    }

    if (password.value.trim() != confpassword.value.trim()) {
        setInvalid(confpassword, "Password Mismatched")
        return false;
    }

    return true;
}


