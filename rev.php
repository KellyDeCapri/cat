<!DOCTYPE html>
<html>
<head>
	<title>Class Scala Revision</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		body{ background-image: url(audi_r8.jpg);
			color:#FF5733 ;}
		h1,h2{text-align: center; 
			color: #ffc300 ;}
			p{text-align: center;color:  #FF5733;
    			}
	</style>
</head>
<body>
	<div class="container-fluid">
	<h1>CLASS SCALA REVISION</h1>	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	
	<div class="jumbotron">
		<?php
		$frank=19;
		$brian=18;
		$answer=$frank*$brian;
		print $answer;

		  ?>
		  <h2>Constant</h2>	
		  <?php 
		  	define("san","Bablass",true);
		  	print san;
		   ?>
		   <h3>Conditional Statements If</h3>
		   <?php 
		   $date=22;
		   if ($date!==30){
		   	print"Today is not 22";}
		   	else{
		   		# code...
		   		print "Today is 22";}
		   	
		    ?>
		    <form>
		    	NumOne:<br><input type="number" name="numone" required=""><br>
		    	<br>
		    	NumTwo:<br><input type="number" name="numtwo" required=""><br>
		    	<br><br>
		    	<?php 
		    	$ed=$_GET['numone'];
		    	$de=$_GET['numtwo'];
		    	$beast=$ed/$de;
		    		echo $beast;
		    	 ?>
		    	
		<button type="submit" class="btn btn-success">Submit<button>
		<button type="reset" class="btn btn-danger">Reset</button>
		    </form>
		    <h4>ElseIf Conditional Statement</h4>
		    <?php 
		    	$mellaniah=32;
		    	$Gayle=44;
		    	if ($Gayle>=50 && $mallaniah<=40){
		    		# code...
		    		print "Free";
		    	} 
		    	elseif ($Gayle>=50 || $mellania<=40) {
		    		# code...
		    		print "Marry but";
		    	}elseif ($Gayle>=50 xor $mellania<=40) {
		    		# code...
		    		print "Go on";
		    	} else{
		    		# code...
		    		"Not happening";}
		     ?>
		     <h3>Form Validation</h3>
						<br>
						<br>
						Last Name:
						<input type="text" name="name" placeholder="Last Name" required="">
						<br>
						<br>
						E-mail:
						<span class="glyphicon glyphicon-envelope"></span>
						<input type="text" name="name" placeholder="E-mail" required="">
						<br>
						<br>
						Phone #
						<input type="values" name="numbers" placeholder="Phone no" required="">
						<br>
						<br>
						Address
						<input type="text" name="" placeholder="Address" required="">
						<br>
						<br>
						City
						<input type="text" name="" placeholder="City" required="">
						<br>
						<br>
						State
						<input type="text" name="" placeholder="State" required="">
						<br>
						<br>
						Zip Code
						<input type="" name="" placeholder="Zip Code" required="">
						<br>
						<br>
						Date of birth:
						Date:
						<label for="date"></label>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
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
						year:
						<label for="year"></label>
						<select>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
						</select><br><br>
						Gender:
						<input type="radio" name="female">Female
						<input type="radio" name="male">male
						<input type="radio" name="prefer not to say">zote
						<br><br>
						Website or Domain name
						<input type="" name="" placeholder="Website name" required="">
						<br>
						<br>
						Project Description
						<input type="text" name="" placeholder="Project Description" required=""> 
						<br>
						<br>
						password:
						<input type="password" name="psd" value="password" required=""><?php 
						$voke=$_GET["psd"];
						if (strlen($voke)<10) {
							echo "Too short";}
							else
								{echo "Strong";}
							echo "<br>";
							?>
							<br>
						<br>
							confirm password:
							<input type="password" name="psd2" value="password" required=""><?php  
							$Ndegwiz=$_GET["psd2"];
							if ($voke===$Ndegwiz) {
								echo "ok";}
								else
									{echo "password mismatch";}
								?>
								<br>
							<br><br><br>
								<button class=" btn-success" type="reset">reset</button>
								<button class=" btn-danger" type="submit">submit</button>
							</form>
						</div>
					</div>
		      ?>
      </div>
	</div>
</body>
</html>