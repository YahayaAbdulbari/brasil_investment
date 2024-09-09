'use strict';

var bar = document.querySelector('.fa-bars');
var xbar = document.querySelector('.fa-xmark');

var navbars = document.querySelector('.navbars');

xbar.style.display='none';

bar.addEventListener('click', function(){

    navbars.style.transition='1s';
    navbars.style.maxHeight='700px';
    xbar.style.display='block';
    bar.style.display='none';

})

xbar.addEventListener('click', function(){

    navbars.style.transition='0.5s';
    navbars.style.maxHeight='0';
    xbar.style.display='none';
    bar.style.display='block';

})