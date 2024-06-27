<?php
// Establish a connection to the campaign_feedback database
$conn = mysqli_connect("localhost", "root", "", "campaign_feedback");

// Check connection
if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}

// Capture the form data using the $_POST array
$name = $_POST["name"];
$email = $_POST["email"];
$feedback = $_POST["feedback"];
$rating = $_POST["rating"];

// Insert the captured data into the feedback table
$sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";
if (mysqli_query($conn, $sql)) {
  echo "Feedback submitted successfully!";
} else {
  echo "Error: ". mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

