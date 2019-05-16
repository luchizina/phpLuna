<?php 
class Usuario extends ClaseBase {

	public $Nombre = '';
	public $Apellido = '';
	public $Nick = '';
	public $Password = '';
	public $Correo = '';
	public $Celular = '';
	public $Imagen;
    public $Archivo;
    public $tipo;
	public $Comentarios = array();
	public $PropuestasPropone = array();
	public $PropuestasColabora = array();
    private $Cedula = '';
    private $Activo = 0;
    private $favoritos = array();

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuario";
        parent::__construct($tabla);

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
        $this->Activo = $activito;
    }

    public function isActivo()
    {
        return $this->Activo;
    }

    public function setFavoritos($favoritos){
        $this->favoritos = $favoritos;
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
        $act = $this->isActivo();
        $img = $this->getImagen();
        $tip = $this->getTipo();
        $permitidos = array("image/jpg", "image/jpeg", "image/png");
        $target='';
        if(in_array($tip, $permitidos)){
            //$target = "imgUsus/".basename($img);
            $extension=end(explode(".", $img));
            //rename($target, $nick.".".$extension);
            $target = "imgUsus/".$nick.".".$extension;
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
            "INSERT INTO usuario (Nombre, Apellido,Nick, Correo, Password,Celular, Imagen, ci, activo)
           VALUES (?,?,?,?,?,?,?,?,?)" );
        //$null = NULL;
        $stmt->bind_param("ssssssssi", $nombre, $ape, $nick, $email, $password, $cel, $target, $ci, $act);
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
        $ci = $this->getCI();
        $act = $this->isActivo();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO usuario (Nombre, Apellido,Nick, Correo, Password,Celular, Imagen, ci, activo)
           VALUES (?,?,?,?,?,?,?,?,?)" );
        $null = "xD";
        $stmt->bind_param("ssssssssi", $nombre, $ape, $nick, $email, $password, $cel, $null, $ci, $act);
        return $stmt->execute();
            
            //echo json_encode(array("response"=>"success"));
           // $json['success'] = 1;
           // $json['message'] = "Usuario registrado";
            //echo json_encode(array("response"=>"failed"));
            
           // $json['success'] = 0;
           // $json['message'] = "Error al tratar de registrarse";
        
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

public function modificar()
   {
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $password = sha1($this->getPassword);
        $email=$this->getCorreo();
        $cel = $this->getCelular();
        $null = null;
        $stmt = $this->getDB()->prepare( 
            "UPDATE usuarios set
        nombre=?, apellido=?,Nick=?, Correo=?, Password=?,Celular=?, Imagen=?, ci=?, activo=? WHERE id=?"); 
           
        $stmt->bind_param("ssssssbsi",$nombre,
            $ape,$nick,$email,$password,$cel,$null,$ci,$activo);
        $stmt->send_long_data(7, $lol);
        return $stmt->execute();
   }


    public function login($email,$pass){
        $stmt = $this->getDB()->prepare( "SELECT * from  usuario WHERE Correo=? AND Password=?" );
        $stmt->bind_param("ss",$email,$pass);
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

         return true;

    }

    
   public function logout(){
        Session::init();
        Session::destroy();
   } 



}







 ?>