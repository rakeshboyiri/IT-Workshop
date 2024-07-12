<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale">
<title>form Login and register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signup">
<h1>sign up</h1>
<h4>it's free and only taske a minute</h4>
<form action="verify.php" method="post">
<label>First Name</label>
<input type="text" name="fname" required>
<label>Last Name</label>
<input type="text" name="lname" required>
<label>Gender</label>
<input type="text" name="gender" required>
<label>Contact Adress</label>
<input type="text" name="number" required>
<label>Adress</label>
<input type="text" name="adress" required>
<label>Email</label>
<input type="email" name="email" required>
<label>Password</label>
<input type="password" name="pass" required>
<input type="submit" name="" value="submit">
</form>
<p>by clicking the sign up button,you agree to our<br>
<a href=""> Term and condition</a> and <a href="login.php">policy
privecy</a></p>
</div>
</body>
</html>