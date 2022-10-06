<?php 

    echo "<br> <h3> Pilas <hr> </h3>";
    echo '<p><strong>Pilas(SplStack): </strong>Es una pila y como tal los elementos se añaden al final y se van "sacando" por el último.</p>';

 //Crea la pila
   $pila= new SplStack();
   //Añade elementos
   $pila->push('Uno');
   $pila->push('Dos');
   $pila->push('Tres');

   //Muestra el número de elementos de la pila (3)
   echo "<br><p>Número de elementos en la Pila: (" . $pila->count() . ")</p> <br>";

   //Situa el puntero al final de la pila
   $pila->rewind();

   //Muestra los elementos (3, 2, 1)
   while( $pila->valid() )
   {
     echo  "<p>Elemento de la Pila: (". $pila->current() . ")</p>", PHP_EOL;
     $pila->next();
   }

    //Saca de la pila el último elemento y lo muestra
    echo "<br><p>Último elemento de la Pila: (". $pila->pop(). ")</p>";

   //Situa el puntero al final de la pila 
   $pila->rewind();

    //Muestra el número de elementos de la pila (2)
     echo "<br><p>Número de elementos en la Pila: (". $pila->count(). ")</p><br>";

   //Muestra los elementos (2, 1)
    while( $pila->valid() )
    {
     echo  "<p>Elemento de la Pila: (". $pila->current() . ")</p>", PHP_EOL;
     //echo $pila->current(), PHP_EOL;
     $pila->next();
    }


    echo "<br> <h3> Colas <hr> </h3>";
// 
    echo '<p><strong>Colas(SplQueue ): </strong>Es una cola y como tal los elementos se añaden al final y se van "sacando" por el primero.</p>';

    //Crea la cola
      $cola = new SplQueue();

      //Añade elementos
      $cola ->enqueue('Rojo');
      $cola ->enqueue('Verde');
      $cola ->enqueue('Azul');

      //Muestra el número de elementos de la cola(3)
      echo "<p>Cantidad de Elementos de la Cola: (". $cola ->count().")<p>" ;

      //Situa el puntero al principio de la cola
      $cola ->rewind();

      //Muestra los elementos (1, 2, 3)
      while( $cola ->valid() )
      {
        echo "<p>Elemento de la Cola: (".$cola ->current() . ")<p>", PHP_EOL;
        $cola ->next();
      }

       //Saca de la cola el primer elemento y lo muestra
        echo "<p>Elemento extraído: (".$cola ->dequeue() . ")<p>";

      //Situa el puntero al principio de la cola
       $cola ->rewind();

       //Muestra el número de elementos de la cola(2)
        echo "<p>Cantidad de Elementos de la Cola: (". $cola ->count().")<p>" ;

      //Muestra los elementos (2, 3)
       while( $cola ->valid() )
       {
        echo "<p>Elemento de la Cola: (".$cola ->current() . ")<p>", PHP_EOL;
        $cola ->next();
       }
?>