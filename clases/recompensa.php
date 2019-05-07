<?php 
class Recompensa extends ClaseBase {

	public $id=0;
	public $Nombre ='';
	public $Descripcion ='';
	public $MontoaSuperar=0;
	public $limiteUsuarios=0;

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="recompensa";
        parent::__construct($tabla);
    }

    public function getId(){
    	return $this->id;
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

    public function getMontoaSuperar(){
    	return $this->MontoaSuperar;
    }

     public function setMontoaSuperar($MontoaSuperar){
    	$this->MontoaSuperar=$MontoaSuperar;
    }

    public function getLimiteUsuarios(){
    	return $this->limiteUsuarios;
    }

     public function setLimiteUsuarios($limiteUsuarios){
    	$this->limiteUsuarios=$limiteUsuarios;
    }

}
?>