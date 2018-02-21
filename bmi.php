<!DOCTYPE html>
</html>
<head>
	<title>Assigno</title>
	<style type="text/css">
	body
		{background-image: url(mellania.jpg);
			}
			#kelly
			{text-align: center;
				color: orange;}
	</style> 
</head>
<body>
<div class="#kelly">
<form method="GET" action="assignment.php">
	<input type="number" name="Height" placeholder="height(m)">
	<br>
	<input type="number" name="Weight" placeholder="weight(kg)">
	<br>
	<button>submit</button>
	<br>
	<h1>Get Your BMI calculated</h1>
</form>
</div>
<form>
<?php 
	$height=$_GET['Height'];
	$weight=$_GET['Weight'];
	$H=$height *$height;


	
	$BMI=$weight /$H;
	if ($BMI<=15) {
		# code...
		echo "very severely underweight";
	} elseif ($BMI<=16) {
		# code...
		echo "severely underweight";
	} elseif ($BMI<=18.5) {
		# code...
		 echo "underweight";
	} elseif ($BMI<=25) {
		# code...
		echo "Normal";
	} elseif ($BMI<=30) {
		# code...
		echo "overweight";
	} elseif ($BMI<=35) {
		# code...
		echo "obesse class I";
	} elseif ($BMI<=40) {
		# code...
		echo "obesse class II";
	} elseif ($BMI>40) {
		# code...
		echo "obesse class III";
	} else  {
		echo "unknown";}	
?>
</form>
</body>
