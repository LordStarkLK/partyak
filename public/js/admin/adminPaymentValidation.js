// Color values
let validColor = '#38d39f';
let invalidColor = '#f44336';

let user_id = document.getElementById('user_id');
let amount = document.getElementById('amount');
let description = document.getElementById('description');
let date = document.getElementById('date');
let type = document.getElementById('type');

let payForm = document.getElementById('payForm');
payForm.removeAttribute('novalidate')

payForm.addEventListener('submit',function(event){
    event.preventDefault();

    if(validateInput()){
        payForm.submit();
    }
});

function validateInput(){
    if(user_id.value.trim() === '' || amount.value.trim() === '' || description.value.trim() === '' || date.value.trim() === '' || type.value.trim() === ''){
        return false;
    }else{
        return true;
    }
}