<?php 
class Listaestados extends ClaseBase {

	public $id=0;
	public $Estado = null; //objeto estado
	public $Propuesta = null; //objeto propuesta
	public $Fecha = date("Y-m-d");
	public $Hora = date("H:i:s");

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="listaestados";
        parent::__construct($tabla);
    }

    public function getId(){
    	return $this->id;
    }

    public function getEstado(){
    	return $this->Estado;
    }

    public function setEstado($Estado){
    	$this->Estado=$Estado;
    }

    public function getPropuesta(){
    	return $this->Propuesta;
    }

    public function setPropuesta($Propuesta){
    	$this->Propuesta=$Propuesta;
    }

    public function getFecha(){
    	return $this->Fecha;
    }

    public function setFecha($Fecha){
    	$this->Fecha=$Fecha;
    }

    public function getHora(){
    	return $this->Hora;
    }

    public function setHora($Hora){
    	$this->Hora=$Hora;
    }

}
?>