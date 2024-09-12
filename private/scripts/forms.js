'use strict';

// get the form tittle and store in a variable.
var tittle = document.querySelector('.tittle');
// get all input fields for names and store in a variable.
var name_field = document.querySelectorAll('.name_field');
// get the login link and store in a variable.
var login_link = document.querySelector('.login_link');
// get the sign_up link and store in a variable.
var sign_up_link = document.querySelector('.sign_up_link');
// get all input fields and store in a variable.
var input_fields = document.querySelectorAll('.field');
// get the message in th login/sign-up link paragraph
var p = document.querySelector('p');

// get all error message box
var error_message_box = document.querySelectorAll('.error-box');

// loop throught the error box and remove them from the form
error_message_box.forEach(message_box => {
    message_box.style.display='none';
});

// get all messages-box for login, sign-up, and privacy-policy
var login_message = document.querySelector('.login_message');
var signup_message = document.querySelector('.signup_message');
var privacy_message = document.querySelector('.privacy_message');
// get the submit botton
var submit = document.getElementById('submit');

// add event listener to the login-link
login_link.addEventListener('click', () => {

    name_field.forEach(name => {
        name.style.maxHeight='0';
    });

    // loop throught the error box and remove all from the form
    error_message_box.forEach(message_box => {
        message_box.style.display='none';
    });

    // change the input border color to its normal color
    first_name.style.border='2px solid #d9e6f5';
    last_name.style.border='2px solid #d9e6f5';
    password.style.border='2px solid #d9e6f5';

    // change the text-content of the tittle and submit botton
    tittle.textContent='login';
    submit.value='login';

    // hiding and displaying all the necessay messages
    signup_message.style.display='block';
    signup_message.style.display='flex';
    login_message.style.display='none';
    privacy_message.style.display='none';

    // updating the submit botton name="----" for server side purpose;
    submit.name='login';

    // clear all user input if exist before changing form
    input_fields.forEach(field => {
        field.value='';
    });

});

// add event listener to the sign-up-link
sign_up_link.addEventListener('click', () => {

    name_field.forEach(name => {
        name.style.maxHeight='50px';
    });

    // loop throught the error box and remove them from the form
    error_message_box.forEach(message_box => {
        message_box.style.display='none';
    });

    // change the input border color to its normal color
    first_name.style.border='2px solid #d9e6f5';
    last_name.style.border='2px solid #d9e6f5';
    password.style.border='2px solid #d9e6f5';

    // change the text-content of the tittle and submit botton
    tittle.textContent='sign up';
    submit.value='sign up';

    // hiding and displaying all the necessay messages
    signup_message.style.display='none';
    login_message.style.display='block';
    login_message.style.display='flex';
    privacy_message.style.display='block';

    // updating the submit botton name="----" for server side purpose;
    submit.name='sign_up';

    // clear all user input if exist before changing form
    input_fields.forEach(field => {
        field.value='';
    });

});


/* **************************************************************************************************** */
                        /* FORM INPUT REAL-TIME VALIDATION */
/* **************************************************************************************************** */

// get all the input fields

var first_name = document.getElementById('fname');
var last_name = document.getElementById('lname');
var password = document.getElementById('password');

// var fname_value = first_name.value;

// validate the first name
first_name.addEventListener('input', () =>{
    var myName = 'first name';
    var myMessage = 'is too short';
    validate_name_field(first_name, myName, 0, 2, myMessage);
});

// validate the last name
last_name.addEventListener('input', () =>{
    var myName = 'last name';
    var myMessage = 'is too short';
    validate_name_field(last_name, myName, 1, 2, myMessage);
});

// validate the password
password.addEventListener('input', () =>{
    var myName = 'password';
    var myMessage = 'should be > 10 characters';
    validate_name_field(password, myName, 2, 10, myMessage);
});

// input field validation function
function validate_name_field(input, inputName, indexNumber, validLength, errorMessage){

    // get the error message
    var error_messages = document.querySelectorAll('.error-message');
    
    // get the current input value
    var currentValue = input.value;

    if(currentValue.length > 0){
        input.style.border='2px solid #fa1818';
        input.style.color='#fa1818';
        error_message_box[indexNumber].style.display='block';
        error_messages[indexNumber].textContent=`${inputName} ${errorMessage}`;
        // check if the first name > valid length;
        if(currentValue.length > validLength){
        input.style.border='2px solid #01da01';
        input.style.color='#01da01';
        input.style.textShadow='1px 1px 1px #032853';
        error_message_box[indexNumber].style.display='none';
        }
    }

}