// Wait for the page to load before running the script
window.onload = function() {
  // Find the images on the page
  var images = document.getElementsByTagName("img");

  // Add a click event listener to each image
  for (var i = 0; i < images.length; i++) {
    images[i].addEventListener("click", function() {
      // Display the image in a new window when clicked
      window.open(this.src);
    });
  }
};