<?php 
	//multisort unidimensional
	echo "<center><h2>MULTISORT <hr> </h2></center> ";
	$edades = array(10, 23, "19", 30);
	$nombres = array("Juan", "Pedro","Luis","Marisa");
	echo "<h4>SIN ORDENAR <br><h4>";
	for($i=0;$i<4;$i++){
		//echo "Nombre: " . $nombres[$i] . "; Edad : " . $edades[$i] . "<br>";
	}
	

	array_multisort($edades, $nombres);
	echo "<h4>ORDENADO POR EDAD <br><h4>";

	for($i=0;$i<4;$i++){
		//echo "Nombre: " . $nombres[$i] . "; Edad : " . $edades[$i]. "<br>";
	}
	/*var_dump($edades);
	var_dump($nombres);*/

	//multisort array multidimensional 
	$names = array(
       array("Juan", "Pedro","Luis","Marisa"),
       array(10, "23", 19, 30)
      );
	echo "<h4>SIN ORDENAR <br><h4>";
	for($i=0;$i<4;$i++){
		//echo "Nombre: " . $names[0][$i] . "; Edad : " . $names[1][$i]. "<br>";
	}
	array_multisort($names[0],
                $names[1], SORT_NUMERIC, SORT_ASC);
	echo "<h4>ORDENADOS, col Nombres SORT_STRING, col edades SORT_NUMERIC <br><h4>";

	for($i=0;$i<4;$i++){
		//echo "Nombre: " . $names[0][$i] . "; Edad : " . $names[1][$i]. "<br>";
	}


	array_multisort($names[0], $names[1],SORT_STRING);
	echo "<h4>ORDENADOS, col Nombres SORT_DESC <br><h4>";

	for($i=0;$i<4;$i++){
		//echo "Nombre: " . $names[0][$i] . "; Edad : " . $names[1][$i]. "<br>";
	}
	var_dump($names);

	echo "<center><h2>SORT <hr> </h2></center> ";

	echo "<h4>SIN ORDENAR <br><h4>";

	$frutas = array("limón", "naranja", "banana", "albaricoque","mango", "pepino", "durazno", "zanahoria");

	foreach ($frutas as $clave => $valor) {
    	//echo "frutas[" . $clave . "] = " . $valor . "\n";
	}

	sort($frutas);
	echo "<h4>ORDENADO ASC <br><h4>";

	foreach ($frutas as $clave => $valor) {
    	//echo "frutas[" . $clave . "] = " . $valor . "\n";
	}


	echo "<center><h2>EJEMPLO FUNCION SORT <hr> </h2></center> ";

	function array_sort($array, $on, $order=SORT_ASC)
	{
	    $new_array = array();
	    $sortable_array = array();

	    if (count($array) > 0) {
	        foreach ($array as $k => $v) {
	            if (is_array($v)) {
	                foreach ($v as $k2 => $v2) {
	                    if ($k2 == $on) {
	                        $sortable_array[$k] = $v2;
	                    }
	                }
	            } else {
	                $sortable_array[$k] = $v;
	            }
	        }

	        switch ($order) {
	            case SORT_ASC:
	                asort($sortable_array);
	            break;
	            case SORT_DESC:
	                arsort($sortable_array);
	            break;
	        }

	        foreach ($sortable_array as $k => $v) {
	            $new_array[$k] = $array[$k];
	        }
	    }

	    return $new_array;
	}

	$people = array(
	    12345 => array(
	        'id' => 12345,
	        'first_name' => 'Joe',
	        'surname' => 'Bloggs',
	        'age' => 23,
	        'sex' => 'm'
	    ),
	    12346 => array(
	        'id' => 12346,
	        'first_name' => 'Adam',
	        'surname' => 'Smith',
	        'age' => 18,
	        'sex' => 'm'
	    ),
	    12347 => array(
	        'id' => 12347,
	        'first_name' => 'Amy',
	        'surname' => 'Jones',
	        'age' => 21,
	        'sex' => 'f'
	    )
	);

	print_r(array_sort($people, 'age', SORT_DESC)); // Sort by oldest first
	echo "<br> <hr>";
	print_r(array_sort($people, 'surname', SORT_ASC)); // Sort by surname

	echo "<center><h2>EJEMPLO FUNCION BUSCAR DATO multidimensional <hr> </h2></center> ";

	function getData($arr,$val,$on){
		$encontrado = -1;
		$i=0;
		foreach ($arr as $k => $v) {
            if (is_array($v)) {
            	foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        if($v[$on] == $val)
                        	$encontrado =$i; 
                        else                                              		
                        	$i++;
                    }                       	
                }
            }
        }
        return $encontrado;
    }
	echo getData($people,19,'age'); 


	echo "<center><h2>EJEMPLO FUNCION BUSCAR DATO unidimensional <hr> </h2></center> ";

	$frutas = array("limón", "naranja", "banana", "albaricoque","mango", "pepino", "durazno", "zanahoria");

	$encontrado=-1;
	print_r($frutas);
	function getData2($arr,$elemento_buscado){

		for ($i=0;$i<sizeof($arr);$i++)
			if ( $arr[$i]== $elemento_buscado )
				$encontrado=$i;

		return "<br>La fruta $elemento_buscado se encuentra en la posición $encontrado";
	}


	echo getData2($frutas,"zanahoria");

	echo "<br><br><br><br><br><br><br><br><br><br>;"

?>