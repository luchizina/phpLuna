<?php 

class token_usu extends ClaseBase {
public $token = null;
public $usuario = '';



public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="token_usu";
        parent::__construct($tabla);
    }
 public function getToken(){
    	return $this->token;
 }
public function setToken($Token){
    	$this->token=$Token;
    }

 public function getUsuario(){
    	return $this->usuario;
 }
public function setUsuario($usuario){
    	$this->usuario=$usuario;
    }

public function agregarToken(){ 
        $token=$this->getToken();
        $usuario=$this->getUsuario();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO token_usu (token,usuario)
           VALUES (?,?)" );
        $null = NULL;
        $stmt->bind_param("ss", $token,$usuario);
        return $stmt->execute();
    }

}

?>