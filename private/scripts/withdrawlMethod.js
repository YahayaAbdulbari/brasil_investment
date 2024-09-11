'use strict';

let withdrawal_method_btn = document.querySelectorAll('.withdrawal-method-btn');
let withdrawal_notification_box = document.querySelector('.withdrawal-notification-popup');

withdrawal_method_btn.forEach(btn => {
    btn.addEventListener('click', () => {
        withdrawal_notification_box.style.display='block';
        btn.style.color='gold';
        btn.style.textShadow='2px 2px 2px black';
    });
});