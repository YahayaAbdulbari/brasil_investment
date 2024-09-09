 'use strict';


       var phone_time = document.getElementById('time');

      var date = new Date();
      var year = date.getFullYear();
      var month = date.getMonth();
      var day = date.getDate();
      var today = date.getDay();
      var hour = date.getHours();
      var min = date.getMinutes();
      var sec = date.getSeconds();

      let myMonth = ['Jan', 'Feb', 'Mach', 'April', 'May', 'June', 
                  'July', 'Augt', 'Sept', 'Oct', 'Nov', 'Dec'];

      let days_of_the_week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'];

        phone_time.textContent=` ${days_of_the_week[today]} : ${myMonth[month]} - ${day} - ${year} `;