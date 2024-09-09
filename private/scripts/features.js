'use strict';

var features_container = document.querySelector('.features');

var features = document.querySelectorAll('.feature');

var left = document.querySelector('.btn1');

var right = document.querySelector('.btn2');


var features_rotate_count = 20;

/* rotate the main container so that one feature will be align with the vertical diameter of the container,
   so that one feature will be displayed at a time */
features_container.style.transform = `translate(-50%,-50%) rotate(${features_rotate_count}deg)`;

// loop throught the aray and position all the features up-right
for( let i=0; i < features.length; i++ ){

   var feature = features[i];
   feature.style.transform = 'rotate(-20deg)';

}

left.addEventListener('click', () => {

    features_rotate_count += 45;

    features_container.style.transform = `translate(-50%,-50%) rotate(${features_rotate_count}deg)`;

    // arrangement base on their apearance on the browser
    // angle of rotation increases by 45 deg
    features[0].style.transform = 'rotate(-110deg)';
    features[1].style.transform = 'rotate(-65deg)';
    features[3].style.transform = 'rotate(-20deg)';
    features[5].style.transform = 'rotate(25deg)';
    features[7].style.transform = 'rotate(70deg)';
    features[6].style.transform = 'rotate(115deg)';
    features[4].style.transform = 'rotate(160deg)';
    features[2].style.transform = 'rotate(205deg)';

})

right.addEventListener('click', () => {

    features_rotate_count += -45;

    features_container.style.transform = `translate(-50%,-50%) rotate(${features_rotate_count}deg)`;

    // arrangement base on their apearance on the browser
    // angle of rotation increases by 45 deg
    features[0].style.transform = 'rotate(-108deg)';
    features[1].style.transform = 'rotate(-65deg)';
    features[3].style.transform = 'rotate(-20deg)';
    features[5].style.transform = 'rotate(25deg)';
    features[7].style.transform = 'rotate(70deg)';
    features[6].style.transform = 'rotate(115deg)';
    features[4].style.transform = 'rotate(160deg)';
    features[2].style.transform = 'rotate(205deg)';

})