<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap2/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap2/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap2/js/bootstrap.min.js"></script>
	<style type="text/css">
		h1{text-align: center;
			color: #ff5733;}
			body{background-image:url(schools.jpg);}
	</style>
	<title></title>
	<h1>RAVENHOOD HIGH School</h1>
</head>
<body>
	<form style="text-align: center; color: #b12d10; ">
	Maths
	<input type="number" name="Maths"  >
	<br>
	<br>
	English
	<input type="number" name="English" >
	<br>
	<br>
	Kiswahili
	<input type="number" name="Kiswahili" >
	<br>
	<br>
	Chemistry
	<input type="number" name="Chemistry" >
	<br>
	<br>
	Biology
	<input type="number" name="Biology"  >
	<br>
	<br>
	Geography
	<input type="number" name="Geography"  >
	<br>
	<br>
	Computer
	<input type="number" name="Computer"  >
	<br>
	<br>
	<button>Calculate</button>
	</form>
	<?php 

	$M=$_GET['Maths'];
	$N=$_GET['English'];
	$O=$_GET['Kiswahili'];
	$P=$_GET['Chemistry'];
	$Q=$_GET['Biology'];
	$R=$_GET['Geography'];
	$S=$_GET['Computer'];

	$total=$M+$N+$O+$P+$Q+$R+$S;
	$Average=$total/7;
	print "$Average";




	?>

</body>
</html>