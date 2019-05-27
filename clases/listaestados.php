<?php 
class Listaestados extends ClaseBase {

	public $id=0;
	public $IDEstado = null; //objeto estado
	public $TituloPropuesta = null; //objeto propuesta
	public $Fecha;
	public $Hora;

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
    	return $this->IDEstado;
    }

    public function setEstado($Estado){
    	$this->IDEstado=$Estado;
    }

    public function getPropuesta(){
    	return $this->TituloPropuesta;
    }

    public function setPropuesta($Propuesta){
    	$this->TituloPropuesta=$Propuesta;
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

 public function agregarE(){
        $IDEstado = $this->getEstado();
        $Propuesta = $this->getPropuesta();
        $fecha = $this->getFecha();
        $hora = $this->getHora();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO listaestados 
        (IDEstado,TituloPropuesta,Fecha,Hora) 
           VALUES (?,?,?,?)" );
        $stmt->bind_param("isss",$IDEstado,$Propuesta,$fecha,$hora);
        return $stmt->execute();
    }
}
?>