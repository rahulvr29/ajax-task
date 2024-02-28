$(document).ready(function() {
  // Login Form Submission
  $('#login-form').submit(function(e) {
      e.preventDefault();
      $.ajax({
          type: 'POST',
          url: 'login.php',
          data: $(this).serialize(),
          success: function(response) {
              $('#response').html(response);
          }
      });
  });

  // Registration Form Submission
  $('#register-form').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: 'adddeatils.php',
        data: $(this).serialize(),
        success: function(response) {
            $('#response').html(response);
            // Check if the response contains success message
            if(response.trim() === "User registered successfully!") {
                // Redirect to index.php after successful registration
                window.location = 'index.php';
            }
        }
    });
});

  // Logout
  $('#logout').click(function() {
      $.ajax({
          type: 'GET',
          url: 'logout.php',
          success: function() {
              window.location = 'index.php';
          }
      });
  });

  // Add User Button Click
  $('#add-user').click(function() {
      window.location = 'register.php';
  });
});
