<?php 
class Colaboracion extends ClaseBase{

	public $id=0;
	public $Fecha;
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

    public function agregar(){
        $monto = $this->getMonto();
        $Fecha=$this->getFecha();
        $usu=$this->getUsuario()->getNick();
        $prop=$this->getPropuesta()->getNombre();
        $rec=$this->getRecompensa()->getId();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO colaboracion 
        (Fecha, Monto,NickUsuario, TituloPropuesta, Recompensa) 
           VALUES (?,?,?,?,?)" );
        $stmt->bind_param("sissi", $Fecha,$monto,$usu,$prop,$rec);
        return $stmt->execute();
    
    }

    public function existeCol($propuesta, $usuario){
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM colaboracion 
            WHERE NickUsuario =? AND TituloPropuesta = ?");
        $stmt->bind_param("ss",$usuario, $propuesta);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        //$resultado = $stmt->get_result();
        $row_cnt = $stmt->num_rows;
        if($row_cnt > 0) {
            return true; 
        }
    }

/* public function totalMontoColaborado($nombreProp){
        $sql="SELECT SUM(colaboracion.monto) as totalColabs from colaboracion where colaboracion.TituloPropuesta='$nombreProp'";
        $resultados=array();
        $resultado =$this->getDB()->query($sql)   
            or die ("Fallo en la consulta");
            $fila = $resultado->fetch_assoc();
         return $fila["totalColabs"]; 

    }*/
     

}
 ?>