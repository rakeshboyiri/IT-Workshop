<?php
session_start();
?>
<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale">
<title>form Login and register</title>
<style type="text/css">
	
	body{
		background-color: rgba(41, 81, 184, 0.498);
	}
	div{
		background-color:white;
		width:40%;
		min-height:400px;
		margin:auto;
		 border-radius:3px;
	}
	h1{
    		text-align:center;
   	}
   	h4{
        	text-align:center;
        	padding-top:15px;
        }
        form{
		width:300px;
		margin-left:80px;
		text-align:center;
        }
        form label{
		display:flex;
		margin-top:20px;
		font-size:18px;
        }
        form input{
        width:100%;
        padding:7px;
        border:none;
        border:1px solid gray;
        border-radius:6px;
        outline:none;
        }
	input[type="submit"]{
        width:100px;
        height:35px;
        margin-top:20px;
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
        p{
        
        text-align:center;
        padding-top:20px;
        font-size:15px;
        }
</style>
</head>
<body>
<div class="login">
<?php
    if($_GET['user']=="invalid"){
    echo "<p style='color:red;margin;0px'>";
        echo "Error";
        echo "</p>";
    }
?>
<h1 class="margin-top:0px";>Login</h1>
<form action="pass_verify.php" method="POST">
<h4>it's free and only a minute</h4>
<form>
<label>Email</label> 
<input type="email" name="mail" required> 
<label>Password</label> 
<input type="password" name="pass" required> <br/>
<input type="submit" name="submit" value="submit">
</form>
<p> Not have an account? <a href="signup.php">sign up
here</a></p>
</div>
</body>
</html>
