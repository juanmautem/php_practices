<?php 

    echo "<br> <h3> Pilas <hr> </h3>";
    echo '<p><strong>Pilas(SplStack): </strong>Es una pila y como tal los elementos se añaden al final y se van "sacando" por el último.</p>';

    //CREAR OBJETO PILA
    $pila = new SplStack;

    /*
    insersión push();

    $pila[] = valor;

    extracción pop();

    recorrido (mostrar elementos)/current()-next()
    punteros inicio/fin de pila rewind()
    cantidad de elementos (pila vacia) count()
    elemento valido valid() 
    #AE0000 ¿?  ->p
    pila->#AE0021.[]->p
    */

    $pila->push('Verde');
    $pila->push('Amarillo'); 
    $pila->push('Rojo');

    echo "HOla"; 
/*
0.[]->p

0.['Verde']->p
1.['Amarillo']
2.['Rojo']
3.[]
*/
$pila->rewind();
//mostrar elementos de la pila
while($pila->valid()){
    echo "<p>Elemento de la Pila: (". $pila->current() . ")</p>", PHP_EOL;
    $pila->next();
}


//regresar puntero a valor anterior
    $pila->rewind();
/*
0.['Verde']
1.[]->p
*/

echo "<br>---Extraer y mostrar último elemento---<br>";
echo "<br><p>Último elemento de la Pila: (". $pila->pop(). ")</p>";
//regresar puntero a valor anterior
    $pila->rewind();

echo "<br><p>Número de elementos en la Pila: (". $pila->count(). ")</p><br>";  


$pila->push('Azul');

$pila->rewind();
//mostrar elementos de la pila
while($pila->valid()){
    echo "<p>Elemento de la Pila: (". $pila->current() . ")</p>", PHP_EOL;
    $pila->next();
}
?>