<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class ="container-fluid">
<div class="jumbotron">
	<h1>User Defined</h1>
	<p>Meaning of function<q>Is a block os statements that can be used repeatetively in a program/code but will not be executed unless called.</q>
	</p>

	<?php 
	function kelly(){
		print "My name is Kelly";
	}
	kelly();

	 ?>
	</div>
	<div class="well well-lg">
		<h2>Using arguments in user defined functions</h2>
	<p>Meaning of an argument<q>Are variables only that they are specified after a functiopn name and within a parenthesis</q></p>
		<?php 
			function frank($ray,$betty){
				print $ray*$betty;
			}
			frank(30,22);
		 ?>
	</div>
</div>
			<div class="jumbotron">
				<h3>Default arguments</h3>
				<?php 
				function Mellania($Vicktoria=36)
				{print "My mother's name is vicktoria and she is". $vicktoria;}
				Mellania();
				?>
				<h4>Test return</h4>
				<?php 
					function allela($kelly,$Dennis,$santos){
						$blue=$kelly/$Dennis*$santos;
						print $blue;
					}
					allela(13,3,24);
				?>
				<div class="well well-lg">
					<h1>The return</h1>
					<?php
					function Ebby($la,$lau,$sam)
					{$answer=$la-$lau+$sam;
					return $answer;}
				print Ebby(12,32,444);
					 ?>
				
				<div class="well well-lg">
					<h3>fill in the blank spaces</h3>
					<?php
					function Chris($Hilla,$Frank)
					{$josh=$Hilla/$frank;
					return $josh;}
				print $josh;
				Chris(50);
				?>
				</div>
			</div>
		</div>
</body>
</html>