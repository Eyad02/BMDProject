<?php
// Connect to the database
$host = "localhost:3307";
$user = "root";
$password = "";
$database = "project";
$conn = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the ID and status from the AJAX request
$id = $_POST["id"];
$status = $_POST["status"];

// Update the status in the database
$sql = "UPDATE surgery_requests SET status='$status' WHERE id=$id";
mysqli_query($conn, $sql);

// Close the database connection
mysqli_close($conn);