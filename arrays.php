<?php

	$vector = [1,2,3];

	$array = array(
	    "foo" => "bar",
	    "bar" => "foo",
	);


	$array2 = [
	    "foo" => "bar",
	    "bar" => "foo",
	];

	echo "<h3>Arreglo PHP < 5.0 <hr> </h3>";
	print_r($array);
	echo "<h3>Arreglo PHP > 5.1 <hr> </h3>";
	print_r($array2);

	// rellenar una matriz 4x4 (aleatorio / manual); 
	

	// tipo de dato en array
	echo "<h3>Tipos de datos en arreglo PHP <hr> </h3>";

	$array3 = array(
	    "foo" => "bar",
	    "bar" => "foo",
	    100   => -100,
	    -100  => 100,
	);
	var_dump($array3);

	// crear array simple
	echo "<br><h3>Arreglo Simple PHP <hr> </h3>";

	$simple = array(0,2,4,8,16,32,64);

	print_r($simple);

	foreach ($simple as $i => $value) {
		echo "<p> Valor a extraer: " . $simple[$i] . " </p>";
    	unset($simple[$i]);
    	print_r($simple);
	}

		
	  
  	$simple = array(0,2,4,8,16,32,64);

	echo "<br><h3>Agregar valor a arreglo PHP <hr> </h3>";

	$simple[] = "128";
	print_r($simple);
	echo "<br>";

	$simple["a"] = array(256, "nombre" => "Juan" , "apeP" => "Gómez");
	print_r($simple);
	echo "<br>";


	$simple[] = 512;
	print_r($simple);
	echo "<br>";

	for($i = 0 ;$i<9; $i++) {
		echo "<p> Valor a extraer: " . $simple[$i] . " </p>";
    }

	echo "<p> Valor a extraer: " . $simple["a"][0] . " </p>";
	unset($simple["a"][0]);


    print_r($simple["a"]);




	echo "<br><br><br><br><br>";
?>