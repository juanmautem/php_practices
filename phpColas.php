<?php echo "<br> <h3> Colas <hr> </h3>";
// 
    echo '<p><strong>Colas(SplQueue ): </strong>Es una cola y como tal los elementos se añaden al final y se van "sacando" por el primero.</p>';

    //Crea la cola
      $cola = new SplQueue();

      //Añade elementos enqueque();
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
               /*
        		0.['Verde']
        		1.['Azul']
        		2.]->p

               */
      //Muestra los elementos (2, 3)
       while( $cola ->valid() )
       {
        echo "<p>Elemento de la Cola: (".$cola ->current() . ")<p>", PHP_EOL;
        $cola ->next();
       }



       
       $cola->enqueue('Amarillo');
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