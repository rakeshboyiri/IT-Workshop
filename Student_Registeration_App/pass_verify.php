<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Result</title>

</head>
<style type="text/css">
	body{
		background-color: rgba(41, 81, 184, 0.498);

	}
		
	
	.hall{
		width:50%;
		height:350px;
		background-color: white;
		margin: 50px auto;
		text-align:center;
		padding-top:50px;
		
	}
	form input{
        width:40%;
        padding:7px;
        border:none;
        border:1px solid gray;
        border-radius:6px;
        outline:none;
        margin-top:200px;
	}
	
	input[type="submit"]{
        height:35px;
        margin:30px 0px 0px 0px;
        border:none;
        background-color:#ff7200;
        color:white;
        font-size:18px;
        cursor:pointer;
	}
	
	input[type="submit"]:hover{
        color:white;
        background:rgb(13,211,247);
	}
	.form2{
		margin-left:200px;
	}
	
</style>
<script>
const f1 = () =>{
	session_destroy():
}
</script>
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

  echo "<div class='hall'> ";
 	echo "<div class='output-container'>";
 	 echo '<p class="success-message">Valid credentials</p>';
 	 foreach ($result as $row){
 	  echo "<div class='user-details'>";
 	   echo "<p><strong>First Name:</strong> ".$row['fname']."</p>";
 	   echo "<p><strong>Last Name:</strong> ".$row['lname']."</p>";
 	   echo "<p><strong>Gender:</strong> ".$row['gender']."</p>";
 	   echo "<p><strong>Email:</strong> ".$row['email']."</p>";
 	   echo "</div>";
 	   $_SESSION['name'] = $row['fname'];
 	    $_SESSION['id'] = $row['id'];
 	 }
 	echo "</div>";
 	
  
   
  echo " <form action='preview.php' method='get'> ";
  echo " <input type='submit' name='preview' value='Download Hall-ticket' class='hallbutton'>
 
  	</form>
	</div>
	";
	
	echo '</div>';
	echo "<div style='width:60%;margin:0px 0px 0px 420px;'>";
	echo "<form action='login.php' style='form2'>";
	echo "<input type='submit' value='logout' style='background-color:red;' onClick='f1()';>";
	echo "</form>"; 
	echo "</div>";

  	
}else{
	echo "<p class='error-message'>Invalid email or password</p>";
	
    	$user = "invalid";
    	header("Location:login.php?user=".$user);
    	exit();
}
}

 else {
// Email and/or password don't match
}

?>
</div>
</body>
</html>
