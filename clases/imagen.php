<?php 
class Imagen extends ClaseBase {
	public $id=0;
	public $Imagen=null;
	public $Propuesta = null; //Objeto propuesta

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="imagen";
        parent::__construct($tabla);
    }

    public function getId(){
    	return $this->id;
    }

    public function getImagen(){
    	return $this->Imagen;
    }

    public function setImagen($Imagen){
    	$this->Imagen=$Imagen;
    }

    public function getPropuesta(){
    	return $this->Propuesta;
    }

    public function setPropuesta($Propuesta){
    	$this->Propuesta=$Propuesta;
    }
}
 ?>