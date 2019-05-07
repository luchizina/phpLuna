<?php 
class Categoria extends ClaseBase {
	public $NombreH = null; //objeto categoria
	public $NombreP = '';
	public $Profundidad = 0;

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="categoria";
        parent::__construct($tabla);
    }

    public function getNombreH(){
    	return $this->NombreH;
    }

    public function setNombreH($NombreH){
    	$this->NombreH=$NombreH;
    }

    public function getNombreP(){
    	return $this->NombreP;
    }

    public function setNombreP($NombreP){
    	$this->NombreP=$NombreP;
    }

    public function getProfundidad(){
    	return $this->Profundidad;
    }

    public function setProfundidad($Profundidad){
    	$this->Profundidad=$Profundidad;
    }
}
?>