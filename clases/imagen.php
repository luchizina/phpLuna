<?php 
class Imagen extends ClaseBase {
	public $id=0;
	public $Imagen=null;
	public $TituloPropuesta = null; //Objeto propuesta

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

    public function getTituloPropuesta(){
    	return $this->TituloPropuesta;
    }

    public function setTituloPropuesta($Propuesta){
    	$this->TituloPropuesta=$Propuesta;
    }
}
 ?>