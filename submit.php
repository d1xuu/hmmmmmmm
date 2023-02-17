<?php
include "config.php";

// Get values from form
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
