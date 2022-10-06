<?php 

// IZQ | DATOS | DER 

class nodoArbol{

	private $izq;
	private $datos;
	private $der;


	public function __construct($izq,$datos,$der){
		
		$this->datos = $datos;
		$this->izq = $izq;
		$this->der = $der;

	}

	public function setDatos($datos){
		$this->datos = $datos;
	}

	public function getDatos(){
		return $this->datos;
	}

	public function setIzq($izq){
		$this->izq = $izq;
	}

	public function getIzq(){
		return $this->izq;
	}
	public function setDer($der){
		$this->der = $der;
	}

	public function getDer(){
		return $this->der;
	}

}

class fnArbol{
	private $padre;

	public function __construct($padre = null){
		$this->padre = new nodoArbol($padre,"","");
	}

	public function getPadre(){
		return $this->padre;
	}

	public function insert($datos){

		$nodo = new nodoArbol($datos,"","");

		if($this->padre->getDatos() == null){
			$this->padre = $nodo;
		}else{
			$current = $this->padre;

			while(true){ //ciclo infinito de while, espera un break para finalizar
				$descendiente = $current;
				if($datos < $current->getDatos()){ //evaluando nodo derecho si hay datos
					$current -> getDer();

					if($current == null ){
						$descendiente->setDer($nodo);
						break;
					}

				}else{ //evaluando nodo izquierdo, si hay datos
					$current = $current->getIzq();

					if($current == null){
						$descendiente->setIzq($nodo);
						break;
					}

				}
			}

		}

	}

	public function inOrder($datos){
        if($datos != null){
            $this->inOrder($datos->getDer());
            echo $datos->getDatos();
            echo "<br/>";
            $this->inOrder($datos->getIzq());
        }
    }
 
    public function preOrder($datos)
    {
        if($datos != null){
 
            echo $datos->getDatos();
            echo "<br/>";
            $this->inOrder($datos->getDer());
            $this->inOrder($datos->getIzq());
 
        }
    }
 
    public function postOrder($datos)
    {
        if($datos != null){
 
            $this->postOrder($datos->getDer());
            $this->postOrder($datos->getIzq());
            echo $datos->getDatos();
            echo "<br/>";
 
        }
    }
 	
 	//Obtener un nodo
 	public function findNodo($nodo){

 		$current = $this->padre;

 		while($current != null){
 			if($current->getDatos() == $nodo){
 				return $current;
 			}elseif($nodo < $current->getDatos()) {
 				$current = $current->getDer();
 			}else{
 				$current = $current->getIzq();
 			}
 			return false;
 			}
 		}


 	}


}

 ?>