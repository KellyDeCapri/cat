<!DOCTYPE html>
<html>
<head>
	<title>Php File</title>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron">
		<p>What is a file?</p>
		<q>A file refers to an object in a computer that is used to store information, settings or even commands.</q>
	</div>
	    <?php 
		$kelly=fopen("tos.text","w") or die("Unable to open file");

			$txt="I love class scala\n";
			fwrite($tos,$txt);
			$txt="Really\n";
			fwrite($tos,$txt);
			fclose($tos);
	     ?>
	     <?php 
	 		$tos=fopen("tos.txt","r") or die("Unable to open file");
	 		echo fread($tos,filesize("kelly.txt"));
	 		fclose($tos);
	     ?>
     </div>
</body>
</html>