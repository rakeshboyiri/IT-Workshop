




<?php
	// Check if the form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$name = $_POST["username"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	
	
	echo "Name: $name <br>";
	echo "Email: $email <br>";
	echo "Message: $message <br>";
}
?>
