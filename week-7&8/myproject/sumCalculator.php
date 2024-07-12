<!DOCTYPE html>
<html>
<head>
	<title>Sample Form</title>
	
	<style>
	
	body{
	background-color:black;
	
	
	
	}
	.container{
		width:60%;
		height:300px;
		background-color:gray;
		margin:auto;
		
	}
	h1{
		color:white;
		margin-top:150px;
		text-align:center;
	}
	p{
		padding-left:30%;
		font-size:18pt;
	
	}
	form>p:first-child{
		padding-top:10%;
		
	
	}
	#bt1{
		margin-left:25	%;
	}
	.ans{
		width:100%;
		height:50px;
		
		text-align:center;
		line-height:50px;
		font-size:16pt;
	}
	
	</style>
</head>


<body>
	<h1>*** > Sum Calculator < ***</h1>
	<div class="container"> 
		<form action="sumCalculator.php" method="POST">
			<p>
				<label for="num1">Enter Number 1</label>
				<input type="number" id="num1" name="num1"  value="">
			
			</p>
			
			<p>
				<label for="num2">Enter Number 2</label>
				<input type="number" id="num2" name="num2" value="">	
			</p>
			<p>
				<input type="submit" id="bt1" value="Calculate">	
			</p>
			
			
			
		</form>
		<div class="ans">
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {

				$num1 = $_POST["num1"];
				$num2 = $_POST["num2"];
				$val = $num1+$num2;
				echo "Sum of $num1 and $num2 = $val";
	
}
?>
		</div>
		
			
		
	</div>
			
</body>
</html>
