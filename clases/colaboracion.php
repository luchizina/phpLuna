<?php 
class Colaboracion extends ClaseBase{

	public $id=0;
	public $Fecha=date("Y-m-d");
	public $Monto=0;
	public $Usuario=null; //Objeto
	public $Propuesta=null; //Objeto
	public $Recompensa=null; //Objeto
	
	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="colaboracion";
        parent::__construct($tabla);
    }

    public function getId(){
    	return $this->id;
    }

    public function getFecha(){
    	return $this->Fecha;
    }

    public function setFecha($Fecha){
    	$this->Fecha=$Fecha;
    }

    public function getMonto(){
    	return $this->Monto;
    }

    public function setMonto($Monto){
    	$this->Monto=$Monto;
    }

    public function getUsuario(){
    	return $this->Usuario;
    }

    public function setUsuario($Usuario){
    	$this->Usuario=$Usuario;
    }

    public function getPropuesta(){
    	return $this->Propuesta;
    }

    public function setTituloPropuesta($Propuesta){
    	$this->Propuesta=$Propuesta;
    }

    public function getRecompensa(){
    	return $this->Recompensa;
    }

    public function setRecompensa($Recompensa){
    	$this->Recompensa = $Recompensa;
    }

}
 ?>