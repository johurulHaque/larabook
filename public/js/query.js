$(document).ready(function() {
  // Initialize form validation on the registration form.
  // It has the id attribute "registration"
  $("#buyer_reg_form").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      buyer_name: "required",
     buyer_email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
    messages: {
      buyer_name: "Please enter your name",
     buyer_email: "Please enter a valid email address"


    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
//    submitHandler: function(form) {
//      form.submit();
//    }
  });
}) ;