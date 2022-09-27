<?php 
	$i = 10;
	$cadena = "Anita lava la tina";
	$fl = 12.45;
	$vector = [0,2,4];
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prácticas PHP</title>
</head>
<body>
	<center><h1>Prácticas PHP <hr></h1></center>
	<?php 
		echo "<button>El valor de I = " . $i . ";</button>";
		echo "<p>El valor de cadena = " . $cadena . ";</p>";
		echo "<p>El valor de fl = " . $fl . ";</p>";
		echo "<p>El valor de vector = "; 
		print_r($vector);
		echo ";</p>";

	?>
	<hr>
	<?php require_once "arrays.php" ?>
</body>

</html>