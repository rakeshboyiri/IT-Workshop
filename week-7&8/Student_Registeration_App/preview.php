<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style2.css">
<title>Login Result</title>
<style type="text/css">
body{
background-color:white;
}
</style>
</head>
<body>
<div class="container">
	
	<div class="hallborder">
		<div class="hallhead">
			<div class="logo"> 
				<img src="logo.png" class="halllogo">
			</div>
			<div class="halltitle"> 
				<h4 class="maintitle"> Rajiv Gandhi University of Knowledge Technologies :: Basar</h4>
				<h6 class="subtitle">AY 23-24_E2_S2_EST Regular Exams - Aug,2024 - Hall Ticket </h6>
			</div>
		</div>
		
		<div class="halldetails">
		<?php
		echo "<br/>";
		$name = $_SESSION['name'];
		$id = $_SESSION['id'];
		echo "Id : ".$id."<br/>";
		echo   "Student Name : ".$name."<br/>";
		echo "Year : E2"."<br/>";
		echo "Branch : CSE";
		?>
		</div>
		<table border=1 class="halltable" cellspacing=0>
			<tr>
				<th>SL.No. </th>
				<th>Date & Time </th>
				<th>Paper Code / Subject </th>
				<th> Mode of Exam </th>
			</tr>
			<tr>
				<td>1 </td>
				<td>01-08-2024(9:30 - 11:30) </td>
				<td>Sub1 </td>
				<td>Regular </td>
			</tr>
			<tr>
				<td>2 </td>
				<td>03-08-2024(9:30 - 11:30) </td>
				<td>Sub2 </td>
				<td>Regular </td>
			</tr>
			<tr>
				<td>3 </td>
				<td>05-08-2024(9:30 - 11:30) </td>
				<td>Sub3 </td>
				<td>Regular </td>
			</tr>
			<tr>
				<td>4 </td>
				<td>07-08-2024(9:30 - 11:30) </td>
				<td>Sub4 </td>
				<td>Regular </td>
			</tr>
		</table>
		<div class="hallfoot">
			<h5 style="float:left;margin-bottom:0px;">Signature of the student </h5>
			<h5 style="float:right;margin-bottom:0px;">Controller of Examinations </h5>
		</div>
	</div>
	<button onClick="window.print()" style="margin:10px 0px 0px 500px">Print this page</button>
	<?php
	echo "<div style='width:50%;margin:0px 0px 0px 200px;'>";
	echo "<form action='login.php' style='form2'>";
	echo "<input type='submit' value='logout' style='background-color:red;width:100px' ;>";
	echo "</form>"; 
	echo "</div>";
	?>

</div>
</body>
</html>
