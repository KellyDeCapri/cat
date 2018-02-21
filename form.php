<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<style type="text/css">
	body
		{background-image: url(audi_r8.jpg);
			 text-align: center;
			 background-color: #454545;}
			 h1{text-align: center;
			 	color:#FFC300;}
			 	h2{color: #ffc300;}
	</style>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<form method="GET">
		<input type="password" name="password">
		<button>Submit</button>
<div class="jumbotron">
	<form action="form.php" method="POST">
		<fieldset>
		<h1>Mellaniah LTD Airlines</h1>
		<hr>
		First Name:
		<input type="text" name="First Name">
		<br>
		Last Name:
		<input type="text" name="Last Name">
		<br>
		D.O.B:
		Date:
		<label for="Date"></label>
		<select>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		</select>
		<br>
		Month:
		<label for="Month"></label>
		<select>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		</select>
		<br>
		Year:
		<label for="year"></label>
		<select>
		<option>2017</option>
		<option>2018</option>
		<option>2019</option>
		</select>
	
		<br>
		Phone Number:
		<label for="Phone Number"></label>
		<select>
		<option value="Audi">+254</option>
		<option value="Mercedez">+264</option>
		<option value="Buggati">+285</option>
		</select>
		<input type="text" name="Phone Number">

		<br>
		Gender:
		<br>
		<input type="radio" name="Gender" checked="Female">
		Female<br>
		<input type="radio" name="Gender" checked="Male">
		Male<br>
		<br>
		E-mail:
		<input type="text" name="E-mail">
		<br>
		Password:
		<input type="text" name="Confirm Password">
		<br>
		<button class="u btn-success" type="Reset">Reset</button>
		<button class="n btn-danger" type="Submit">Submit</button>
		
		</form>
	</div>
	<h2>Strings</h2>
		<?php  

 		$psd = $_GET['password'];
 		if (strlen($psd)<8) {
 			print "please Dont use at least 8 characters";
 		}
		?>
</body>
</html>
