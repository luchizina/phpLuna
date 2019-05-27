<?php 
class Comentario extends ClaseBase {
	public $id = 0;
	public $Texto = '';
	public $Usuario = null; //objeto Usuario
	public $Propuesta = null; //objeto Propuesta
    public $likes = null; //array de likes

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="comentario";
        parent::__construct($tabla); 
    }

    public function getLikes(){
        return $this->likes;
    }

    public function setLike($like){
        $this->likes = $like;
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

    public function setPropuesta($Propuesta){
    	$this->Propuesta=$Propuesta;
    }

    public function comentar(){
        $texto = $this->getTexto();
        $nomProp = $this->getPropuesta()->getNombre();
        $nick = $this->getUsuario()->getNick();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO comentario 
        (Texto, NickUsuario, TituloPropuesta) 
           VALUES (?,?,?)" );
        $stmt->bind_param("sss",$texto,$nick,$nomProp);
        return $stmt->execute();
    }

    public function likeCom($nick, $idCom){
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO likeComentario 
        (Usuario, Comentario) 
           VALUES (?,?)" );
        $stmt->bind_param("si",$nick,
            $idCom);
        return $stmt->execute();
    }

    public function dislikeCom($nick, $idCom){
        $stmt = $this->getDB()->prepare( 
            "DELETE FROM likeComentario 
        WHERE Usuario=? AND Comentario=?");
        $stmt->bind_param("si",$nick,
            $idCom);
        return $stmt->execute();
    }
}
?>