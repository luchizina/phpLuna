<?php 
class Usuario extends ClaseBase {

	public $Nombre = '';
	public $Apellido = '';
	public $Nick = '';
	public $Password = '';
	public $Correo = '';
	public $Celular = '';
	public $Imagen;
    public $notificacion = 0;
        public $Archivo;
        public $tipo;
        public $tipoImg;
	public $Comentarios = array();
	public $PropuestasPropone = array();
	public $PropuestasColabora = array();
    private $Cedula = '';
    private $activo = 0;
    private $favoritos = array();
    private $token='';
    private $token_pass = '';
    private $solicito_pass = 0;

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuario";
        parent::__construct($tabla);

    }

    public function getSolicitoPass(){
        return $this->solicito_pass;
    }

    public function getTokenPass(){
        return $this->token_pass;
    }

    public function setTokenPass($tokenPass){
        $this->token_pass = $tokenPass;
    }

    public function setSolicitoPass($solPass){
        $this->solicito_pass = $solPass;
    }


    public function getNotificacion(){
        return $this->notificacion;
    }

    public function setNotificacion($notif){
        $this->notificacion=$notif;
    }

    public function getToken(){
        return $this->token;
    }

    public function setToken($token){
        $this->token=$token;
    }

    public function getArchivo(){
        return $this->Archivo;
    }

    public function getFavoritos(){
        return $this->favoritos;
    }

    public function setArchivo($Archivo){
        $this->Archivo=$Archivo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

    public function getTipoImg(){
        return $this->tipoImg;
    }

    public function setTipoImg($tipoImg){
        $this->tipoImg=$tipoImg;
    }

    public function getPropuestasColabora(){
        return $this->PropuestasColabora;
    }

    public function setPropuestasColabora($PropuestasColabora){
        $this->PropuestasColabora=$PropuestasColabora;
    }

    public function getPropuestasPropone(){
        return $this->PropuestasPropone;
    }

    public function setPropuestasPropone($PropuestasPropone){
        $this->PropuestasPropone=$PropuestasPropone;
    }

    public function getComentarios(){
        return $this->Comentarios;
    }

    public function setComentarios($Comentarios){
        $this->Comentarios=$Comentarios;
    }

    public function getNombre(){
    	return $this->Nombre;
    }

    public function setNombre($Nombre){
    	$this->Nombre=$Nombre;
    }

    public function getApellido(){
    	return $this->Apellido;
    }

    public function setApellido($Apellido){
    	$this->Apellido=$Apellido;
    }

    public function getNick(){
    	return $this->Nick;
    }

    public function setNick($Nick){
    	$this->Nick=$Nick;
    }

    public function getPassword(){
    	return $this->Password;
    }

    public function setPassword($Password){
    	$this->Password=$Password;
    }

    public function getCorreo(){
    	return $this->Correo;
    }

    public function setCorreo($Correo){
    	$this->Correo=$Correo;
    }

    public function getCelular(){
    	return $this->Celular;
    }

    public function setCelular($Celular){
    	$this->Celular=$Celular;
    }

    public function getImagen(){
    	return $this->Imagen;
    }

    public function setImagen($Imagen){
    	$this->Imagen=$Imagen;
    }

    public function setCI($Cedula)
    {
        $this->Cedula=$Cedula;
    }

    public function getCI()
    {
        return $this->Cedula;
    }

    public function setActivo($activito)
    {
        $this->activo = $activito;
    }

    public function isActivo()
    {
        return $this->activo;
    }

    public function setFavoritos($favoritos){
        $this->favoritos = $favoritos;
    }

    public function borrarUsu($nick)
    {
       $this->setActivo(0);
       $activo = $this->isActivo();
            $stmt = $this->getDB()->prepare("UPDATE usuario set activo=? WHERE Nick=?"); 
        $stmt->bind_param("is",$activo, $nick);
        return $stmt->execute();
    }

    public function getBusqueda($buscar){
        $usuarios=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM usuario 
            WHERE Nombre like ? " );
        // Le agrego % para busque los que empiezan con la letra o terminan
        $buscar= '%'.$buscar.'%';
        $stmt->bind_param( "s",$buscar);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $persona= new Usuario($fila);
                $usuarios[]=$persona;
        }
        return $usuarios;
    }




  



public function agregar(){ 
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $cel=$this->getCelular();
        $nick=$this->getNick();
        $password = sha1($this->getPassword());
        $email=$this->getCorreo();
        $arch = $this->getArchivo();
        $ci = $this->getCI();
        $tokencito = $this->getToken();
        $act = $this->isActivo();
        $img = $this->getImagen();
        $tip = $this->getTipo();
        $tipoImg = $this->getTipoImg();
        $permitidos = array("image/jpg", "image/jpeg");
        $target='';
        if(in_array($tipoImg, $permitidos)){
            //$target = "imgUsus/".basename($img);
            if($tipoImg != ""){
                $extension=end(explode(".", $img));
            //rename($target, $nick.".".$extension);
                $target = "imgUsus/".$nick.".".$extension;
            } else {
                $target = "";
            }
        } else {
            echo "El tipo de imagen es incorrecto";
        }
        $this->setImagen($target);
        /*if($arch != ""){
            $this->setImagen($this->getDB()->real_escape_string((file_get_contents($arch))));
            $lol = ((file_get_contents($arch)));
        } else {
            $lol = null;
        }*/
        //var_dump($lol);exit;
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO usuario (Nombre, Apellido,Nick, Correo, Password,Celular, Imagen, ci, activo, tipo, token)
           VALUES (?,?,?,?,?,?,?,?,?,?,?)" );
        //$null = NULL;
        $stmt->bind_param("ssssssssiis", $nombre, $ape, $nick, $email, $password, $cel, $target, $ci, $act,$tip, $tokencito);
        if($target != ''){
        move_uploaded_file($arch, $target);
    }
        //$stmt->send_long_data(6, $lol);
        return $stmt->execute();
        //exit;
    }


    public function agregarCel(){ 
        
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $cel=$this->getCelular();
        $nick=$this->getNick();
        $password = sha1($this->getPassword());
        $email=$this->getCorreo();
        $arch = $this->getArchivo();
        $ci = $this->getCI();
        $tokencito = $this->getToken();
        $act = $this->isActivo();
        $img = $this->getImagen();
        $tip = $this->getTipo();
        $tipoImg = $this->getTipoImg();
        $tokenpass = '';
        $solicito = 0;
        $notificacion = 0;
        $permitidos = array("image/jpg", "image/jpeg");
        $target='';
        echo "<script>console.log( 'Debug Objects: " . $nombre . " " . $ape . " " . $nick . " " . $email . " " . $password . " " . $cel . " " . $target . " " . $ci . " " . $act . " " . $tip . " " . $tokencito . "' );</script>";
        if(in_array($tipoImg, $permitidos)){
            //$target = "imgUsus/".basename($img);
            if($tipoImg != ""){
                $extension=end(explode(".", $img));
            //rename($target, $nick.".".$extension);
                $target = "imgUsus/".$nick.".".$extension;
            } else {
                $target = "";
            }
        } else {
            echo "El tipo de imagen es incorrecto";
        }
        $this->setImagen($target);


        $stmt = $this->getDB()->prepare("INSERT INTO usuario (Nombre, Apellido, Nick, Correo, Password, Celular, Imagen, ci, activo, tipo, token, tokenpass, solicitoPass, notificacion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssiissii", $nombre, $ape, $nick, $email, $password, $cel, $target, $ci, $act,$tip, $tokencito, $tokenpass, $solicito, $notificacion);
        if($target != ''){
        file_put_contents($target, $arch);
    }
        return $stmt->execute();
    }

     public function getListadoUsus(){
        $sql="select * from usuario ";
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

    public function ci($ci){
        $stmt = $this->getDB()->prepare( 
            "SELECT ci FROM usuario 
            WHERE ci =?" );
        $stmt->bind_param("s",$ci);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        //$resultado = $stmt->get_result();
        $row_cnt = $stmt->num_rows;
        if($row_cnt > 0) {
            return true; 
        }
    }
    

    public function nick($nick){
        $stmt = $this->getDB()->prepare( 
            "SELECT Nick FROM usuario 
            WHERE Nick =?" );
        $stmt->bind_param("s",$nick);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        //$resultado = $stmt->get_result();
        $row_cnt = $stmt->num_rows;
        if($row_cnt > 0) {
            return true;
        }
    }

    public function correo($correo){
        $stmt = $this->getDB()->prepare( 
            "SELECT Correo FROM usuario 
            WHERE Correo =?" );
        $stmt->bind_param("s",$correo);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        //$resultado = $stmt->get_result();
        $row_cnt = $stmt->num_rows;
        if($row_cnt > 0) {
            return true;
        }
    }


public function traerImagen($nick){

     $stmt = $this->getDB()->prepare("SELECT Imagen FROM usuario  WHERE Nick = ?" );
        $stmt->bind_param("s",$nick);
        $stmt->execute();
       $resultado = $stmt->get_result();
       $fila=$resultado->fetch_object();
        //header("Content-type: image/jpg");
       return ($fila->Imagen);
        //exit;
       /*$linea = '<img src="data:image/jpeg;base64,'.base64_encode( $fila->Imagen ).'"/>';
      return $linea;*/
      }




   /* public function insertarFav($idLog,$idFav){

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO favoritos 
        (idLogueado,idFavorito) 
           VALUES (?,?)" );
        $stmt->bind_param("ii",$idLog,
            $idFav);
        return $stmt->execute();


    }*/

public function actualizarNotificacion($nueva){

    $nick = $this->getNick();
    $stmt = $this->getDB()->prepare( 
        "UPDATE usuario set notificacion=? WHERE Nick=?");     
        $stmt->bind_param("is", $nueva, $nick);
        return $stmt->execute();
}


public function modificar($tipo)
   {
        $nick = $this->getNick();
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $password = sha1($this->getPassword);
        $email=$this->getCorreo();
        $cel = $this->getCelular();
        $null = null;
        $arch = $this->getArchivo();
        $img = $this->getImagen();
        $tipoImg = $this->getTipoImg();
        $permitidos = array("image/jpg", "image/jpeg");
        $target='';
        if($arch == "NoModificar"){
            $target = $img;
        } else {
        if(in_array($tipoImg, $permitidos)){
            //$target = "imgUsus/".basename($img);
            if($tipoImg != ""){
                $extension=end(explode(".", $img));
            //rename($target, $nick.".".$extension);
                $target = "imgUsus/".$this->getNick().".".$extension;
            } else {
                $target = "";
            }
        } else {
            echo "El tipo de imagen es incorrecto";
        }
    }
        $this->setImagen($target);
        $stmt = $this->getDB()->prepare( 
            "UPDATE usuario set
        nombre=?, apellido=?, Correo=?, Password=?,Celular=?, Imagen=? WHERE Nick=?"); 
           
        $stmt->bind_param("sssssss",$nombre,
            $ape,$email,$password,$cel,$target,$nick);
        if($target != '' && $arch != "NoModificar"){
            if(file_exists('/phpLuna/imgUsus/'.$nick.$tipo))
            {
                chmod('/imgUsus/'.$nick.$tipo,7775);
                unlink('/imgUsus/'.$nick.$tipo);
            }
        move_uploaded_file($arch, $target);
    }
        return $stmt->execute();
   }


    public function login($email,$pass){
        $stmt = $this->getDB()->prepare( "SELECT * from  usuario WHERE Correo=? AND Password=? AND activo=?" );
        $activo = 1;
        $stmt->bind_param("ssi",$email,$pass,$activo);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($resultado->num_rows<1){
            return false;
        }    
        $res=$resultado->fetch_object();
        Session::init();
        Session::set('usuario_apellido',$res->Apellido);
        Session::set('usuario_nick', $res->Nick);
        Session::set('usuario_nombre', $res->Nombre);
        Session::set('usuario_email', $res->Correo);
        Session::set('usuario_tipo', $res->tipo);

         return true;

    }

    
   public function logout(){
        Session::init();
        Session::destroy();
   } 

   public function activarUsuario($token){
    $estado = 1;
    $stmt = $this->getDB()->prepare( 
        "UPDATE usuario set activo=? WHERE token=?");     
        $stmt->bind_param("is", $estado, $token);
        return $stmt->execute();
   }


   public function solicitoCambCont(){
    $solicito = $this->getSolicitoPass();
    $token = $this->getTokenPass();
    $nick = $this->getNick();
    $stmt = $this->getDB()->prepare(            
    "UPDATE usuario set tokenpass=?, solicitoPass=? WHERE Nick=?"); 
    $stmt->bind_param("sis", $token, $solicito, $nick);
    return $stmt->execute();
   }

   public function Solicito($token, $usuario){
    $solicito = 1;
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM usuario 
            WHERE Nick =? AND tokenpass = ? AND solicitoPass = ?");
        $stmt->bind_param("ssi",$usuario, $token, $solicito);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        //$resultado = $stmt->get_result();
        $row_cnt = $stmt->num_rows;
        if($row_cnt > 0) {
            return true; 
        }
    }

    public function CambiaPass($token, $usuario, $pass){
        $p = sha1($pass);
         $stmt = $this->getDB()->prepare( 
            "UPDATE usuario set Password=?, tokenpass='', solicitoPass=0 WHERE Nick=? AND tokenpass=?"); 
        $stmt->bind_param("sss",$p, $usuario, $token);
        $stmt->execute();
    }

    public function traerColaboradores($nombreProp){


      $sql="SELECT DISTINCT usuario.* FROM usuario, colaboracion where colaboracion.TituloPropuesta = '$nombreProp' and colaboracion.NickUsuario = usuario.Nick";
        $resultados=array();

        $resultado =$this->getDB()->query($sql)   
            or die ("Fallo en la consulta");

        while ( $fila = $resultado->fetch_object() )
        {
            
            $objeto= new Usuario($fila);
            $resultados[]=$objeto;
        } 
     return $resultados;  

    }




}







 ?>