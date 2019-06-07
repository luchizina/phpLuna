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
            "INSERT INTO likecomentario 
        (Usuario, Comentario) 
           VALUES (?,?)" );
        $stmt->bind_param("si",$nick,
            $idCom);
        $res=$stmt->execute();
        //if(!$res) echo $stmt->error;
        return $res;
    }


    public function dislikeCom($nick, $idCom){
        $stmt = $this->getDB()->prepare( 
            "DELETE FROM likecomentario 
        WHERE Usuario=? AND Comentario=?");
        $stmt->bind_param("si",$nick,
            $idCom);
        return $stmt->execute();
    }

    public function borrarLikesCom($idCom){
        $stmt = $this->getDB()->prepare( 
            "DELETE FROM likecomentario 
        WHERE Comentario=?");
        $stmt->bind_param("i",$idCom);
        return $stmt->execute();
    }



    public function traerLikesComentario($idCom){
        $sql="select count(*) as cant from likecomentario where Comentario ='$idCom'";
        $resultados=array();
        $resultado =$this->getDB()->query($sql)   
            or die ("Fallo en la consulta");
            $fila = $resultado->fetch_assoc();
            $this->setLike($fila["cant"]);
         return $fila; 

    }

    public function traeUsuarios($prop){
        $sql="select usuario.* from comentario, usuario where usuario.nick=comentario.NickUsuario and comentario.TituloPropuesta = '$prop'";
        $resultados=array();
        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta");
        while ( $fila = $resultado->fetch_assoc() )
        {   
            $objeto= new $this->modelo($fila);
            $resultados[]=$objeto;
        } 
     return $resultados; 
    }
}
?>