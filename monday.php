,<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	<title>Monday Form</title>
	<style type="text/css">
		body{text-align: center;
			color: #fff555;}
	</style>
	<body>
	<h1>Mellania Companies</h1>
	<form>
			E-mail:
						<span class="glyphicon glyphicon-envelope"></span>
						<input type="text" name="name" placeholder="E-mail" required="">
						<br>
			Password:
						password:
						<input type="password" name="psd" value="password" required=""><?php 
						$voke=$_GET["psd"];
						if (strlen($voke)<10) {
							print "Too short";}
							else
								{print "Strong";}
							print "<br>";
							?>
							<br>
						<br>
							confirm password:
							<input type="password" name="psd2" value="password" required=""><?php  
							$kelly=$_GET["psd2"];
							if ($voke===$kelly) {
								print "ok";}
								else
									{print "password mismatch";}
								?>
								<br>
							<br><br><br>
							<button class=" btn-success" type="reset">reset</button>
							<button class=" btn-danger" type="submit">submit</button>
			</form>
			<?php 
			define("winner", "My name Winner ");
			print winner;
			 ?>


</body>

</body>
</html>