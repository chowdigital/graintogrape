"use strict";

function validateForm() {
  // var x =  document.getElementById('name').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Name cannot be empty";
  //     return false;
  // }
  // x =  document.getElementById('email').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Email cannot be empty";
  //     return false;
  // } else {
  //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  //     if(!re.test(x)){
  //         document.getElementById('status').innerHTML = "Email format invalid";
  //         return false;
  //     }
  // }
  // x =  document.getElementById('subject').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Subject cannot be empty";
  //     return false;
  // }
  // x =  document.getElementById('message').value;
  // if (x == "") {
  //     document.getElementById('status').innerHTML = "Message cannot be empty";
  //     return false;
  // }
  document.getElementById('status').innerHTML = "Sending...";
  formData = {
    'name': $('input[name=name]').val(),
    'email': $('input[name=email]').val(),
    'subject': $('input[name=subject]').val(),
    'message': $('textarea[name=message]').val()
  };
  $.ajax({
    url: "http://localhost:8888/grainToGrape/wp-content/themes/graintogrape/mail.php",
    type: "POST",
    data: formData,
    success: function success(data, textStatus, jqXHR) {
      $('#status').text(data.message);
      if (data.code) //If mail was sent successfully, reset the form.
        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function error(jqXHR, textStatus, errorThrown) {
      $('#status').text(jqXHR);
    }
  });
}

document.getElementsByClassName('blocks-gallery-item');
element.classList.add('class-1');
"use strict";

/* global wp, jQuery */

/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
(function ($) {
  // Site title and description.
  wp.customize('blogname', function (value) {
    value.bind(function (to) {
      $('.site-title a').text(to);
    });
  });
  wp.customize('blogdescription', function (value) {
    value.bind(function (to) {
      $('.site-description').text(to);
    });
  }); // Header text color.

  wp.customize('header_textcolor', function (value) {
    value.bind(function (to) {
      if ('blank' === to) {
        $('.site-title, .site-description').css({
          clip: 'rect(1px, 1px, 1px, 1px)',
          position: 'absolute'
        });
      } else {
        $('.site-title, .site-description').css({
          clip: 'auto',
          position: 'relative'
        });
        $('.site-title a, .site-description').css({
          color: to
        });
      }
    });
  });
})(jQuery);