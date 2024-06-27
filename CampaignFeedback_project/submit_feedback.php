<?php

$conn = mysqli_connect("localhost", "root", "", "campaign_feedback");


if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}


$name = $_POST["name"];
$email = $_POST["email"];
$feedback = $_POST["feedback"];
$rating = $_POST["rating"];


$sql = "INSERT INTO feedback (name, email, feedback, rating) VALUES ('$name', '$email', '$feedback', '$rating')";
if (mysqli_query($conn, $sql)) {
  echo "Feedback submitted successfully!";
} else {
  echo "Error: ". mysqli_error($conn);
}


mysqli_close($conn);
?>

