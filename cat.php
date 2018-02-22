<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap2/css/bootstrap.css">
		<script type="text/javascript" src="bootstrap2/js/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap2/js/bootstrap.min.js"></script>
		<style type="text/css">
			h3{text-decoration-color: #3339ff; font-size:  40px;}
		</style>
	<title>Login</title>
</head>
<body style="background-image: url(ravenwood-high-school-brentwood-tn.jpg); ">

	<div class="nav nav-header" style="text-align: center;">
		<img src="mamsnot.png " width="170px" height="150px">
		<h3>RAVENHOOD HIGH School</h3>
	</div>
<div class="container-fluid">
<div class ="loginBox">	
	<h4>Log in Here</h4>
<form method="Post" style="text-align: center; color:  #FF5733 ;" action="forms.php">
	First name:
	<input type="text" name="firstname" placeholder=" Enter firstname">
	<br>
	<br>
	Middle name:
	<input type="text" name="" placeholder="Middlename" required="">
	<br>
	<br>
	Last name:
	<input type="text" name="" placeholder="Lastname" required="">
	<br>
	<br>
	Gender:
	<input type="text" name="" placeholder="Gender" required="">
	
	<br>
	Date of birth:
						Date:
						<label for="date"></label>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							
						</select>
						Month:
						<label for="Month"></label>
						<select>

							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						</select>
						Year:
						<label for="year"></label>
						<select>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
						</select><br><br>
						Gender:
						<input type="radio" name="female">Female
						<input type="radio" name="male">Male
						<input type="radio" name="prefer not to say">Other
						<br><br>
	
	<br>
	<br>
<button href="#">Submit</button>
</form>
</div>
</div>
</body>
</html>