<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Result</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<?php
session_start();
include("Db_connection.php"); // Assuming db.php contains your databaseconnection details
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$email = $_POST['mail'];
$password = $_POST['pass'];
// Query to check if the email and password match
$query = "SELECT * FROM users WHERE email = '$email' AND password =
'$password'"; // Directly comparing passwords
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) == 1) {
// Email and password match
    $_SESSION['email'] = $email; // Store email in session for future use
    echo '<div class="output-container">';
    echo '<p class="success-message">Valid email or password</p>';
    foreach ($result as $row){
    echo "<div class='user-details'>";
    echo "<p><strong>First Name:</strong> ".$row['fname']."</p>";
    echo "<p><strong>Last Name:</strong> ".$row['lname']."</p>";
    echo "<p><strong>Gender:</strong> ".$row['gender']."</p>";
    echo "<p><strong>Phone Number:</strong> ".$row['contact_address']."</p>";
    echo "<p><strong>Address:</strong> ".$row['address']."</p>";
    echo "<p><strong>Email:</strong> ".$row['email']."</p>";
    echo "<p><strong>Password:</strong> ".$row['password']."</p>";
    echo "</div>";
}
}
echo '</div>';
} else {
// Email and/or password don't match
echo "<p class='error-message'>Invalid email or password</p>";
}
?>
</div>
</body>
</html>