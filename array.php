<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
	<style type="text/css">
	body{background-color: green;
		font-size:20px;
		background-image: url(mellania.jpg);}

		h1{
			font-family: ALGERIAN;
			color: orange;
		}
	</style>
</head>
<body>
	<?php 
		$class="<h1>MY CLASS HAS</h1>";
	$winner=array("Kelly","Raymond","Stella","Mutua","Abdalla","Riinya","Sospeter","Frank","Sam","Dennis","Santos");
	echo count($winner);
	echo "$class" . $winner[0];
	print "<br>";
	rsort($winner);
	$student=count($winner);
	for ($i=0; $i <$student; $i++)
	{#code...
		print "$winner[$i]";
		echo "<br>";}
	?>
	<br>
	<h1>Associative Arrays</h1>
	<?php 
		$erickmanu=array("erick"=>"20","manu" =>"16");
		print"My name is erick" . $erickmanu['erick'] ."and i sit next to capri who is" .$erickmanu['manu'];
		asort($erickmanu);
		print"<br>";
		foreach ($erickmanu as $key => $value)
		{ # code...
			print "erick" . $key. "I am ". $value;
			print "<br>";
		}
	 ?>
	<?php 
		$Ray=30;
		$kelly=18;
		if ($Ray>10 xor $kelly>100 ){
			# code...
			print "Liar Oliar";
		} else {# code...
			print "True";}
	 ?>
</body>
</body>
</html>