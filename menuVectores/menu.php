<?php 

/*
1. Definir tamaño de la matriz 
2. Rellenar matriz 
3. Buscar el la ubicación y el dato más cercano a un dato seleccionado por el usuario 
4. Generar matrices con números aleatorios (2) 
5. Suma de matrices (imprime el resultado) 
6. Resta de matrices  (imprime el resultado) 
7. Imprimir matrices 
8. Salir*/

echo "1. Definir tamaño de la matriz";
echo "2. Rellenar matriz";
echo "3. Buscar el la ubicación y el dato más cercano a un dato seleccionado por el usuario";
echo "4. Generar 2 matrices con números aleatorios";
echo "5. Suma de matrices (imprime el resultado)";
echo "6. Resta de matrices  (imprime el resultado)";
echo "7. Imprimir matrices";
echo "8. Salir";
echo "Elija opcion:";

$c = 0;
$r = 0;
$dato = 0;
$mat_2 = array();
$resSuma = array();
$resResta = array();
$matriz = array();


switch($opcion){
	case 1: 
		echo "Defina el tamaño de la matriz"; //crear matriz (c,r)
		break;
	case 2:
		//ciclo rellenar matriz
		rellenarMatriz($c,$r);	
		break;
	case 3: 
		$result = buscarDato($dato,$c,$r);
		break;

	case 4:
		generarMatrices($c,$r);
		break;
	case 5:
		$resSuma = sumarMatrices($mat_2);
		imprimeMatriz($resSuma);
		break;
	case 6:
		$resResta = restarMatrices($mat_2);
		imprimeMatriz($resResta);
		break;
	case 7:
		echo "Matriz generada por usuario:";
		imprimeMatriz($matriz);
		print();
		echo "Matrices generadas Aleatoriamente ";
		echo "<br>Matriz A  <br>";
		imprimeMatriz($mat_2[0]);
		print();
		echo "Matrices generadas Aleatoriamente ";
		echo "<br>Matriz B  <br>";
		imprimeMatriz($mat_2[1]);
		print();
		echo "<br>Resultado de Suma<br>";
		imprimeMatriz($resSuma);
		print();
		echo "<br>Resultado de Resta<br>";
		imprimeMatriz($resResta);
		print();
		break;
	default:
		echo "Gracias por su visita";
		break;
}

public function rellenarMatriz($c,$r){
	for($i=0 ; $i < ($c - 1) ; $i++){
		for($j=0 ; $j < ($r - 1) ; $j++){
			echo "matriz[$i , $j] =";
			$matriz[$i][$j]= "numero tecleado por usuario";
		}	
	}
}
public function buscarDato($dato,$c,$r){
	for($i=0 ; $i < ($c - 1) ; $i++){
		for($j=0 ; $j < ($r - 1) ; $j++){
			if($dato == $matriz[$i][$j]){   //        0 1 
				return $posicion = [$i,$j]; $posicion[1,4]
			}
		}	
	}
}

public function generarMatrices($c,$r){
	for($i=0 ; $i < ($c - 1) ; $i++){
		for($j=0 ; $j < ($r - 1) ; $j++){
			$mat_2[0][$i][$j] = rand(1,100); 
			$mat_2[1][$i][$j] = rand(1,100); 
		}	
	}
}

public function sumarMatrices($mat){
	for($i=0 ; $i < ($c - 1) ; $i++){
		for($j=0 ; $j < ($r - 1) ; $j++){
			$res[$i][$j] = $mat[0][$i][$j] +  $mat[1][$i][$j];
		}	
	}
	return $res;
}

public function restarMatrices($mat){
	for($i=0 ; $i < ($c - 1) ; $i++){
		for($j=0 ; $j < ($r - 1) ; $j++){
			$res[$i][$j] = $mat[0][$i][$j] -  $mat[1][$i][$j];
		}	
	}
	return $res;
}


public function imprimeMatriz($mat){
	for($i=0 ; $i < ($r - 1) ; $i++){
		for($j=0 ; $j < ($c - 1) ; $j++){
			echo "[$i,$j] =" . $matA[$i][$j] . ";";
		}	
		echo "<br>";
	}
}

?>