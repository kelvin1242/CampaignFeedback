<?php

$conn = mysqli_connect("localhost", "root", "", "campaign_feedback");


if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}


$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {

  echo "<table border='1'>";
  echo "<tr><th>Name</th><th>Email</th><th>Feedback</th><th>Rating</th><th>Submission Date</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["feedback"] . "</td>";
    echo "<td>" . $row["rating"] . "</td>";
    echo "<td>" . $row["submission_date"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No feedback records found.";
}

mysqli_close($conn);
?>