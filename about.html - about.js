// Wait for the page to load before running the script
window.onload = function() {
  // Find the button element
  var button = document.getElementById("button");

  // Add a click event listener to the button
  button.addEventListener("click", function() {
    // Get the text from the input field
    var input = document.getElementById("input").value;

    // Display the text in a paragraph element
    var output = document.createElement("p");
    output.innerHTML = "You entered: " + input;
    document.body.appendChild(output);
  });
};