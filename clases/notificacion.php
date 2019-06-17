<?php 

class notificacion extends ClaseBase {
public token = null;
public usuario = '';

 public function getToken(){
    	return $this->token;
 }
public function setToken($Token){
    	$this->$Token=$Token;
    }

 public function getUsuario(){
    	return $this->usuario;
 }
public function setToken($usuario){
    	$this->$usuario=$usuario;
    }

public function agregarToken(){ 
        $token=$this->getToken();
        $usuario=$this->getUsuario();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO notificacion (token,usuario)
           VALUES (?,?)" );
        $null = NULL;
        $stmt->bind_param("ss", $token,$usuario);
        return $stmt->execute();
    }
}

?>