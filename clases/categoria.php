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


    public function agregarCatego(){ 
        $nombre=$this->getNombreP();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO categoria (NombreP,NombreH)
           VALUES (?,?)" );
        $null = NULL;
        $stmt->bind_param("ss", $nombre,$nombre);
        return $stmt->execute();
    }

     public function borrar($nombre){
 $stmt = $this->getDB()->prepare("DELETE FROM categoria WHERE NombreH=?");
$stmt->bind_param("s",$nombre);
    return $stmt->execute();
    }


}
?>