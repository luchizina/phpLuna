<?php 
class Propuesta extends ClaseBase {

	public $Nombre = '';
	public $Descripcion = '';
	public $FechaAgregada = date("Y-m-d");
	public $FechaPublicada = date("Y-m-d");
	public $Monto = 0;
	public $MontoActual = 0;
	public $Usuario = null; //objeto usuario
	public $Categoria = null; //objeto categoria
	public $Recompensa = array(); //objetoRecompensa
	public $EstadoActual = null; //objetoEstado
	public $Comentarios = array();

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="propuesta";
        parent::__construct($tabla);
    }

    public function getComentario(){
    	return $this->Comentarios;
    }

    public function setComentario($Comentarios){
    	$this->Comentarios=$Comentarios;
    }

	public function getNombre(){
		return $this->Nombre;
	}

	public function setNombre($Nombre){
		$this->Nombre=$Nombre;
	}

	public function getDescripcion(){
		return $this->Descripcion;
	}

	public function setDescripcion($Descripcion){
		$this->Descripcion=$Descripcion;
	}

	public function getFechaAgregada(){
		return $this->FechaAgregada;
	}

	public function setFechaAgregada($FechaAgregada){
		$this->FechaAgregada=$FechaAgregada;
	}

	public function getFechaPublicada(){
		return $this->FechaPublicada;
	}

	public function setFechaPublicada($FechaPublicada){
		$this->FechaPublicada=$FechaPublicada;
	}

	public function getMonto(){
		return $this->Monto;
	}

	public function setMonto($Monto){
		$this->Monto=$Monto;
	}

	public function getMontoActual(){
		return $this->MontoActual;
	}

	public function setMontoActual($MontoActual){
		$this->MontoActual=$MontoActual;
	}

	public function getUsuario(){
		return $this->Usuario;
	}

	public function setUsuario($Usuario){
		$this->Usuario=$Usuario;
	}

	public function getCategoria(){
		return $this->Categoria;
	}

	public function setCategoria($Categoria){
		$this->Categoria=$Categoria;
	}

	public function getRecompensa(){
		return $this->Recompensa;
	}

	public function setRecompensa($Recompensa){
		$this->Recompensa=$Recompensa;
	}

	public function getEstadoActual(){
		return $this->EstadoActual;
	}

	public function setEstadoActual($EstadoActual){
		$this->EstadoActual=$EstadoActual;
	}
}
 ?>