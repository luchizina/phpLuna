<?php 
class Recompensa extends ClaseBase {

	public $id=0;
	public $Nombre ='';
	public $Descripcion ='';
	public $MontoaSuperar=0;
	public $limiteUsuarios=0;
    public $cantActual=0;
    public $TituloPropuesta= '';
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

    public function getCantActual(){
        return $this->cantActual;
    }

    public function setCantActual($cant){
        $this->cantActual=$cant;
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
      public function getTituloPropuesta(){
        return $this->TituloPropuesta->getNombre();
    }

     public function setTituloPropuesta($propuNueva){
       $this->TituloPropuesta = $propuNueva;
    }

    public function agregar(){
        $nombre=$this->getNombre();
        $Descripcion=$this->getDescripcion();
        $limiteUsu=$this->getLimiteUsuarios();
        $monto = $this->getMontoaSuperar();
        $titulo = $this->getTituloPropuesta();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO recompensa
        (Nombre,Descripcion, MontoaSuperar,limiteUsuarios,TituloPropuesta) 
           VALUES (?,?,?,?,?)" );
        $stmt->bind_param("ssiis",$nombre,$Descripcion,$limiteUsu,$monto,$titulo);
        return $stmt->execute();
    }


    public function getListadoR($no){
         $recompensas=array();
        $stmt = $this->getDB()->prepare( "SELECT * FROM recompensa WHERE TituloPropuesta =?" );
        $stmt->bind_param( "s",$no);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $recomp= new recompensa($fila);
                $recompensas[]=$recomp;
        }
        
        return $recompensas;
 } 

 public function traerRecompensasAjax($propuesta, $monto){
         $recompensas=array();
        $stmt = $this->getDB()->prepare("SELECT * FROM recompensa WHERE TituloPropuesta=? AND MontoaSuperar <= ? AND limiteUsuarios > cantActual ORDER BY MontoaSuperar DESC");
        $stmt->bind_param( "si",$propuesta, $monto);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $recomp= new recompensa($fila);
                $recompensas[]=$recomp;
        }
        
        return $recompensas;
 }



    public function listarRecompensasPagina($propuesta){

        $recompensas = array();
        $stmt = $this->getDB()->prepare("SELECT * FROM recompensa WHERE TituloPropuesta=? ORDER BY MontoaSuperar ASC");
        $stmt->bind_param("s", $propuesta);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila = $resultado->fetch_object()){
            $recomp = new recompensa($fila);
            $recompensas[]=$recomp;
        }
    return $recompensas;


 } 


 public function actualizaCant(){
    $id = $this->getId();
    $cant = $this->getCantActual();
    $stmt = $this->getDB()->prepare( 
    "UPDATE recompensa set cantActual=? WHERE id=?"); 
    $stmt->bind_param("ii", $cant, $id);
    return $stmt->execute();
   }

   public function menorRec(){
    $cant = 0;
    $id = $this->getId();
    $stmt = $this->getDB()->prepare( 
        "UPDATE recompensa set limiteUsuarios=? WHERE id=?"); 
        $stmt->bind_param("ii", $cant, $id);
        return $stmt->execute();
   }

}
?>
