$(document).ready(function () {

  // Login Form Submission
  $("#login-form").submit(function (e) {
    e.preventDefault();
    
    var formData = {
        username: $("#username").val(),
        password: $("#password").val()
    };
    $.ajax({
        type: "POST",
        url: "login.php",
        data: formData,
        dataType: "html",
        success: function (response) {
            $("#response").html(response);
            // Redirect to dashboard.php after successful login
            if (response.trim() === "Login successful!") {
                window.location.href = "dashboard.php";
            }
        },
        error: function () {
            $("#response").addClass("error").html("An error occurred.");
        }
    });
  });

  // Registration Form Submission
  $("#register-form").submit(function (e) {
    e.preventDefault();
    var formData = {
      'new-username': $("#new-username").val(),
      'new-password': $("#new-password").val()
    };
    $.ajax({
      type: "POST",
      url: "adddeatils.php",
      data: formData,
      success: function (response) {
        $("#response").html(response);
        // Redirect to index.php after successful registration
        if (response.trim() === "User registered successfully!") {
          window.location = "index.html";
        }
      }
    });
});

  // Logout
  $("#logout").click(function () {
    $.ajax({
      type: "POST",
      url: "logout.php",
      success: function () {
        // Redirect to index.php after successful logout
        window.location = "index.html";
      }
    });
  });

  // Add User Button Click
  $("#add-user").click(function () {
    // Redirect to register.php to add a new user
    window.location = "register.php";
  });
});
