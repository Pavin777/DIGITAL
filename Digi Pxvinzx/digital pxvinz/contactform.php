<?php

// Create database connection
$conn = mysqli_connect("localhost", "root", "", "feedback");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Insert form data into database
$query = "INSERT INTO feedback (name, surname, email, subject, message) VALUES ('$name', '$surname', '$email', '$subject', '$message')";
$result = mysqli_query($conn, $query);

// Check if data was inserted successfully
if ($result) {
  echo "Thank you for your feedback.";
} else {
  echo "Something went wrong. Please try again.";
}

// Close database connection
mysqli_close($conn);

?>