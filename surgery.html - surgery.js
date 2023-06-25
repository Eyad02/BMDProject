function approveSurgery(id) {
  updateStatus(id, "Approved");
}

function pendSurgery(id) {
  updateStatus(id, "Pending");
}

function updateStatus(id, status){
  // Send an AJAX request to update the surgery request status
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Reload the page after the status has been updated
        location.reload();
      } else {
        console.log("Error: " + xhr.status);
      }
    }
  }
  xhr.open("POST", "update_status.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("id=" + id + "&status=" + status);
}