'use strict';

var language_translate_message_btn = document.getElementById('message_box_btn');
var language_translate_popup_box = document.querySelector('.language-translate-popup');

function close_language_translate_message_box(){
    language_translate_popup_box.style.display='none';
}

language_translate_message_btn.addEventListener('click', () => {
    close_language_translate_message_box();
});