(function($) {
  

  $(document).ready(function() {
    $(".login-form").submit( function(event){


      alert( "Handler for .submit() called." );
      event.preventDefault();
    });

    $(".signup-form").submit( function(event){


      alert( "Handler for .submit() called." );
      event.preventDefault();
    });
    
});

  


}) (jQuery);