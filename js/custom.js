(function ($) {
  $(document).ready(function () {

    // login form handle 
    $(".login-form").submit(function (event) {
      
      let email = $('input[name="login_email"]').val();
      let password = $('input[name="login_password"]').val();


      // giving login request to login.php
      $.ajax({
        url: "server/login.php",
        type: "POST",
        data: {
          login: "done",
          email: email,
          password: password,
        },
        // after success show alert notification and clear old values from form
        success: function (res) {
          alertify.set("notifier", "position", "top-right");
          alertify.success(res);

          if(res === 'login'){
            window.location.href = 'chat.php';
          }
          
        },
      });
      event.preventDefault();
    });




    // Sign up form handle
    $(".signup-form").submit(function (event) {
      let first_name = $('input[name="first_name"]').val();
      let last_name = $('input[name="last_name"]').val();
      let email = $('input[name="email"]').val();
      let password = $('input[name="password"]').val();


      // giving register request to register.php
      $.ajax({
        url: "server/register.php",
        type: "POST",
        data: {
          register: "done",
          first_name: first_name,
          last_name: last_name,
          email: email,
          password: password,
        },
        // after success show alert notification and clear old values from form
        success: function (res) {
          alertify.set("notifier", "position", "top-right");
          alertify.success(res);
          $('input[name="first_name"]').val("");
          $('input[name="last_name"]').val("");
          $('input[name="email"]').val("");
          $('input[name="password"]').val("");
        },
      });

      event.preventDefault();
    });
  });
})(jQuery);
