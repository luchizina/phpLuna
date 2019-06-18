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


public sendNoti($tokens, $message)
{
 $resultado=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT token FROM propuesta 
            WHERE EstadoActual = ? " );
     
        $stmt->bind_param( "i",$id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $prop= new Propuesta($fila);
                $propuestas[]=$prop;
        }
        return $propuestas;

}


?>