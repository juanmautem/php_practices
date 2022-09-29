<?php 
//Creacion de nodo / elemento de la lista
	Class Nodo{

		public $data;
		public $next;

		public function __construct($dat){
			$this->data = $dat;
			$this->next = NULL;
		}

	}
// Crear lista simplemente enlazada
	Class uniList{
		
		public $head;
		//php 5.1 < se aplica crear funcion para construir objetos
		/*public function nuevoNodo($data = null,$next = null){
			$this->list = new Nodo($data,$next);
		}*/

		//PHP 5.2 > se aplica crear un  constructor para objetos
		function __construct($data){
			$this->head = new Nodo($data);
		}

		//CREAR FUNCIONES PARA CONSULTAR,INSERTAR, MODIFICAR, EXTRAER, ELIMINAR NODOS

		//Consultar un elemento de la lista

		public function getData($element){
			$header = $this->head;
			while($header->data != $element){
				$header = $header->next;
			}
			//return $header->data; //retorna el dato encontrado
			return $header; //retorna el dato encontrado y si hay valor en next
		}

		//Insertar Nodo en cualquier posicion
		public function newNodo($element,$new){
			$newNodo = new Nodo($new);
			$current = $this->getData($element);
			$newNodo->next = $current->next;
			$current->next = $newNodo;
		}

			// Actualizar nodo
		    public function updNodo($old, $new) {
		        $current = $this->head;
		        if ($current->next == null) {
		            echo "¡La lista vinculada está vacía!";
		            return;
		        }
		        while ($current->next != null) {
		            if ($current->data == $old) {
		                break;
		            }
		            $current = $current->next;
		        }
		        return $current->data = $new;
		    }

		         // Encuentra el nodo anterior del nodo que se va a eliminar
		    public function findPrevious($element) {
		        $current = $this->head;
		        while ($current->next != null && $current->next->data != $element) {
		            $current = $current->next;
		        }
		        return $current;
		    }

		         // Eliminar un nodo de la lista vinculada
		    public function delete($element) {
		        $previous = $this->findPrevious($element);
		        if ($previous->next != null) {
		            $previous->next = $previous->next->next;
		        }
		    }

		         // Integración de findPrevious y delete
		    public function remove($element) {
		        $current = $this->head;
		        while ($current->next != null && $current->next->data != $element) {
		            $current = $current->next;
		        }
		        if ($current->next != null) {
		            $current->next = $current->next->next;
		        }
		    }

		         // Vaciar la lista vinculada
		    public function clear() {
		       $this->header = null;
		    }

		         // Mostrar los elementos en la lista vinculada
		    public function display() {
		        $current = $this->head;
		        if ($current->next == null) {
		                         echo "¡La lista vinculada está vacía!";
		            return;
		        }
		        while ($current->next != null) {
		            echo $current->next->data . "<br>";
		            $current = $current->next;
		        }
		    }
	}




	

	


?>