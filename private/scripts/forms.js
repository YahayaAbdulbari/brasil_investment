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
    })

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
