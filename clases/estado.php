<?php 
class Estado extends ClaseBase {

	public $id=0;
	public $Nombre= null; //enum Estados 

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="estado";
        parent::__construct($tabla);
    }

    public function getId(){
    	return $this->id;
    }

    public function getNombre(){
    	return $this->Nombre;
    }

    public function setNombre($Nombre){
    	$this->Nombre = $Nombre;
    }
}
?>