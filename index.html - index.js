// Wait for the page to load before running the script
window.onload = function() {
  // Find the button element
  var button = document.getElementById("button");

  // Add a click event listener to the button
  button.addEventListener("click", function() {
    // Display an alert when the button is clicked
    alert("Thank you for your interest in Orthopedic Surgery Hospital!");
  });
};