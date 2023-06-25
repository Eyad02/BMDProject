// Wait for the page to load before running the script
window.onload = function() {
  // Find the form element
  var form = document.getElementById("login-form");

  // Add a submit event listener to the form
  form.addEventListener("submit", function(event) {
    // Prevent the form from submitting
    event.preventDefault();

    // Get the values from the form fields
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Check if the username and password are correct
    if (username === "admin" && password === "password") {
      // Redirect to the dashboard page
      window.location.href = "dashboard.html";
    } else {
      // Display an error message
      var error = document.getElementById("error");
      error.innerHTML = "Incorrect username or password.";
    }
  });
};