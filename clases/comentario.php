<?php 
class Comentario extends ClaseBase {
	public $id = 0;
	public $Texto = '';
	public $Usuario = null; //objeto Usuario
	public $Propuesta = null; //objeto Propuesta

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="comentario";
        parent::__construct($tabla); 
    }

    public function getId(){
    	return $this->id;
    }

    public function getTexto(){
    	return $this->Texto;
    }

    public function setTexto($Texto){
    	$this->Texto=$Texto;
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

    public function setPropuesta(){
    	$this->Propuesta=$Propuesta;
    }

    public function comentar(){
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO comentario 
        (Texto, NickUsuario, TituloPropuesta) 
           VALUES (?,?,?)" );
        $stmt->bind_param("sss",$this->getTexto(),$this->getPropuesta()->getNombre(),
            $this->getUsuario()->getNick());
        return $stmt->execute();
    }
}
?>