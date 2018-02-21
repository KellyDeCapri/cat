<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	<title>Test</title>
</head>
<body>
		<table align="center" cellpadding="3" cellspacing="0">
	<div class="container">
		<?php 
for ($i=1; $i <20; $i++) { 
	for ($b=1; $b <$i ; $b++) { 
		echo "*";
		if ($b<$i) {
		echo "";
		}
	}
	echo "<br/>";
}
	 ?>
<?php 
	echo "<table border=\"1\"style='border-collapse:collapse '>";
	for($r=1;$r<=10; $r++){
		echo"<tr>";
		for ($c=1; $c <=10 ; $c++) 
			echo "<td>$i*$c=" .$c*$r ."</td>";
		echo'</tr>';
			
			# code...
	}
	echo "</table>";
 ?>
 </table>
	</div>
</body>
</html>