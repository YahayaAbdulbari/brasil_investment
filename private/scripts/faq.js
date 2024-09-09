   'use strict';

    var questions = document.querySelectorAll('.question');
    var content_container = document.querySelectorAll('.content-container');

    for (let i = 0; i<questions.length; i++){

        questions[i].addEventListener('click', ()=> {

            content_container[i].classList.toggle('show');

        });

    };