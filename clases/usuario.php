<?php 
class Usuario extends ClaseBase {

	public $Nombre = '';
	public $Apellido = '';
	public $Nick = '';
	public $Password = '';
	public $Correo = '';
	public $Celular = '';
	public $Imagen = null;
    public $Archivo;
    public $Tam;
	public $Comentarios = array();
	public $PropuestasPropone = array();
	public $PropuestasColabora = array();
    private $Cedula = '';
    private $Activo = 0;

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

    public function setArchivo($Archivo){
        $this->Archivo=$Archivo;
    }

    public function getTam(){
        return $this->Tam;
    }

    public function setTam($Tam){
        $this->Tam=$Tam;
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
        $tama = $this->getTam();
        $ci = $this->getCI();
        $act = $this->isActivo();
        if($arch != ""){
            $this->setImagen(addslashes(file_get_contents($arch)));
            $lol = $this->getImagen();
        } else {
            $lol = null;
        }
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO usuario (Nombre, Apellido,Nick, Correo, Password,Celular, Imagen, ci, activo)
           VALUES (?,?,?,?,?,?,?,?,?)" );
        $null = NULL;
        $stmt->bind_param("ssssssbsi", $nombre, $ape, $nick, $email, $password, $cel, $null, $ci, $act);
        $stmt->send_long_data(6, $lol);
        return $stmt->execute();
    }

    public function agregarCel(){ 
        $nombre=$this->getNombre();
        $ape=$this->getApellido();
        $cel=$this->getCelular();
        $nick=$this->getNick();
        $password = sha1($this->getPassword());
        $email=$this->getCorreo();
        $arch = $this->getArchivo();
        $tama = $this->getTam();
        $ci = $this->getCI();
        $act = $this->isActivo();
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO usuario (Nombre, Apellido,Nick, Correo, Password,Celular, Imagen, ci, activo)
           VALUES (?,?,?,?,?,?,?,?,?)" );
        $null = NULL;
        $stmt->bind_param("ssssssbsi", $nombre, $ape, $nick, $email, $password, $cel, $null, $ci, $act);
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
            WHERE ci =" );
        $stmt->bind_param("s",$ci);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        //$resultado = $stmt->get_result();
        $row_cnt = $stmt->num_rows();
        if($row_cnt > 0) {
            return true;
        }
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
        $nick=$this->getNick();
        $ci=$this->getCI();
        $password = sha1($this->getPassword);
        $email=$this->getCorreo();
        $cel = $this->getCelular();
        $arch = $this->getArchivo();
        $tama = $this->getTam();
        $this->setImagen(addslashes(file_get_contents($arch)));
        $lol = $this->getImagen();
        $stmt = $this->getDB()->prepare( 
            "UPDATE usuarios set
        nombre=?, apellido=?,Nick=?, Correo=?, Password=?,Celular=?, Imagen=? WHERE id=?"); 
           
        $stmt->bind_param("ssisssi",$nombre,
            $ape,$edad,$ci,$email,$password,$id);
        return $stmt->execute();
   }

   




    public function login($email,$pass){
        $stmt = $this->getDB()->prepare( "SELECT * from  usuario WHERE Nick=? AND Password=?" );
        $stmt->bind_param("ss",$email,$pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if($resultado->num_rows<1){
            return false;
        }    
        $res=$resultado->fetch_object();
        Session::init();
        Session::set('usuario_logueado', true);
        Session::set('usuario_id', $res->id);
        Session::set('usuario_nombre', $res->nombre);
        Session::set('usuario_email', $res->email);
        return true;
    }
    
   public function logout(){
        Session::init();
        Session::destroy();
   } 




}







 ?>