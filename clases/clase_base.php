<?php
class ClaseBase{
	private $tabla;
    private $db;
    private $conectar;
    private $modelo;
    
    public function __autoload($class) {
	    print "autoloading $class\n";
	    require_once($class . '.php');
	}
    public function __construct($tabla) {
        $this->tabla=(string) $tabla;
        $this->db=DB::conexion();
        $this->modelo=get_class($this);
    }
    public function getDB(){
        return $this->db;
    }
    //Funciones comunes a todas las clases
    public function getListado(){
    	$sql="select * from $this->tabla ";
    	$resultados=array();

        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta");

        while ( $fila = $resultado->fetch_object() )
        {
            
            $objeto= new $this->modelo($fila);
            $resultados[]=$objeto;
        } 
     return $resultados;   
    }

    public function getListadoProp()
    {
        $sql="select * from $this->tabla where NickUsuario NOT IN (SELECT NickUsuario from usuario where activo = 0)  ";
        $resultados=array();

        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta");

        while ( $fila = $resultado->fetch_object() )
        {
            
            $objeto= new $this->modelo($fila);
            $resultados[]=$objeto;
        } 
     return $resultados;   
    }

    public function obtenerPorId($id){
        $sql="select * from $this->tabla where id=$id ";
        $res=NULL;
        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta");
         if($fila = $resultado->fetch_object()) {
           $res= new $this->modelo($fila);
        }
        return $res;
    }


    public function obtenerPorMail($mail)
    {
        $sql="select * from $this->tabla where Correo='$mail' ";
        $res=NULL;
        $resultado =$this->db->query($sql)
        or die ("Fallo en la consulta usuario");
        if($fila = $resultado->fetch_object()) {
           $res= new $this->modelo($fila);
            }
        return $res;
    }

    public function obtenerPorNick($nick){
        $sql="select * from $this->tabla where Nick='$nick' ";
        $res=NULL;
        $resultado =$this->db->query($sql)
        or die ("Fallo en la consulta usuario");
         if($fila = $resultado->fetch_object()) {
           $res= new $this->modelo($fila);
            }
        return $res;
    }

    public function obtenerPorNombreCat($nombre){
        $sql="select * from categoria where NombreH='$nombre' ";
        $res=NULL;
        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta categoria");
         if($fila = $resultado->fetch_object()) {
           $res= new $this->modelo($fila);
        }
        return $res;
    }

    public function com($prop){
        $sql="select * from $this->tabla where TituloPropuesta = '$prop'";
        $resultados=array();
        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta");
        while ( $fila = $resultado->fetch_object() )
        {   
            $objeto= new $this->modelo($fila);
            $resultados[]=$objeto;
        } 
     return $resultados; 
    }

    public function obtenerPorNombreProp($nombre){
        $sql="select * from $this->tabla where Nombre='$nombre' AND NickUsuario NOT IN (SELECT NickUsuario from usuario where activo = 0) ";
        $res=NULL;
        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta propuesta");
         if($fila = $resultado->fetch_object()) {
           $res= new $this->modelo($fila);
        }
        return $res;
    }

    public function getListadoCat($texto)
    {
        $sql="select * from $this->tabla where Categoria like '%$texto%' AND NickUsuario NOT IN (SELECT NickUsuario from usuario where activo = 0)";
        $res=array();
        $resultado=$this->db->query($sql)
            or die("Fallo en la consulta propuesta cat");
        while($fila = $resultado->fetch_object())
        {
            $objeto = new $this->modelo($fila);
            $res[]=$objeto;
        }
        return $res;
    }

    public function getListadoDesc($texto)
    {
        $sql="select * from $this->tabla where Descripcion like '%$texto%' AND NickUsuario NOT IN (SELECT NickUsuario from usuario where activo = 0)";
        $res=array();
        $resultado=$this->db->query($sql)
            or die("Fallo en la consulta propuesta desc");
        while($fila = $resultado->fetch_object())
        {
            $objeto = new $this->modelo($fila);
            $res[]=$objeto;
        }
        return $res;
    }

    public function getListadoTit($texto)
    {
        $sql="select * from $this->tabla where Nombre like '%$texto%' AND NickUsuario NOT IN (SELECT NickUsuario from usuario where activo = 0)";
        $res=array();
        $resultado=$this->db->query($sql)
            or die("Fallo en la consulta propuesta tit");
        while($fila = $resultado->fetch_object())
        {
            $objeto = new $this->modelo($fila);
            $res[]=$objeto;
        }
        return $res;
    }

    public function borrar($id){
    	$sql="DELETE FROM $this->tabla WHERE id=$id ";
    	$resultado =$this->db->query($sql);
        $res=false;
        if($this->db->affected_rows>0){
            $res=true;
        }
        return $res;
    }
    public function borrarC($id){
        $sql="DELETE FROM $this->tabla WHERE NombreP=$id ";
        $resultado =$this->db->query($sql);
        $res=false;
        if($this->db->affected_rows>0){
            $res=true;
        }
        return $res;
    }

    public function traerRecompensas($propuesta){
        $sql="SELECT * FROM recompensa WHERE TituloPropuesta='$propuesta' ORDER BY MontoaSuperar ASC"; 
        $resultados=array();

        $resultado =$this->db->query($sql)   
            or die ("Fallo en la consulta recompensas");

        while ( $fila = $resultado->fetch_object() )
        {
            
            $objeto= new $this->modelo($fila);
            $resultados[]=$objeto;
        } 
     return $resultados;  
    }

    //Borrar por ID, etc
}
?>