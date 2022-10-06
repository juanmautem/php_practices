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
	<div style="display :none"> 
	<?php 
		echo "<button>El valor de I = " . $i . ";</button>";
		echo "<p>El valor de cadena = " . $cadena . ";</p>";
		echo "<p>El valor de fl = " . $fl . ";</p>";
		echo "<p>El valor de vector = "; 
		print_r($vector);
		echo ";</p>";
	?>
	</div>
	
	<div style="display :none">
	<?php require_once "arrays.php"; ?>
		
	</div>
	<div style="display : none; ">
	<?php require_once "arrayFunctions.php"; ?>
		
	</div>

	<div style ="display:none; ">
		<center><h2>Listas PHP <hr></h2></center>
		<p>
			Al igual que <strong>array()</strong>, no es realmente una función, es un constructor del lenguaje.<strong> list()</strong> se utiliza para asignar una lista de variables en una sola operación.
		</p>
		<?php require_once "arrayList.php"; ?>

	</div>

	<div style ="display:none; border: 2px inset darkred; ">
		<center><h2>Listas Enlazadas PHP  <hr></h2></center>
		
		<?php require_once "phpList.php"; 

			$lista = new uniList('Padre');
			echo "<br> Lista con display():";
			$lista->display();
			echo "<br> Lista con print_r:";
			print_r($lista);

			$lista->newNodo('Padre','Hijo 1');
			$lista->newNodo('Hijo 1','Hijo 2');
			$lista->newNodo('Hijo 2','Hijo 4');
			$lista->newNodo('Hijo 4','Hijo 3');
			$lista->newNodo('Hijo 3','Hijo 5');


			echo "<br> Lista con display():";
			$lista->display();

			echo "<br> Eliminar nodo('Hijo 4'):";
			$lista->delete('Hijo 4');
			$lista->display();


		?>

	</div>

	<div style ="display:block; border: 2px inset darkred; ">
		<?php require_once "phpPilas.php"; ?>
	</div>

	<div style ="display:block; border: 2px inset darkred; ">
		<?php require_once "phpColas.php"; ?>
	</div>

</body>

</html>