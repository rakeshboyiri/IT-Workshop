<!DOCTYPE html>
<html>
<head>
<title>Sample Form</title>
</head>
<body>
	<?php
		for ($x = 1; $x <= 6; $x++) {
			for ($y = 1; $y <= 10; $y++){
				$val = $x*$y;
				echo "$val &nbsp&nbsp";
			}
			echo "<br>";
			
		}
	
	?>
</body>
</html>
