<?php 

	echo "<center><h4>Lista de arreglos <hr><br></h4></center>";
	$info = array(
				array('café', 'marrón', 'cafeína'),
				array('redbull', 'azul', 'taurina')
			);
	print_r($info);

	// Enumerar todas las variables
	list($bebida, $color, $energía) = $info[1];

	echo "<br>El $bebida es $color y la $energía lo hace especial.\n";


	$bebida=$info[0][0];
	$color=$info[0][1];
	$energía=$info[0][2];

	echo "<br>El $bebida es $color y la $energía lo hace especial.\n";




 ?>