<?php 
class Usuario extends ClaseBase {

	public $Nombre = '';
	public $Apellido = '';
	public $Nick = '';
	public $Password = '';
	public $Correo = '';
	public $Celular = '';
	public $Imagen = null;
	public $Comentarios = array();
	public $PropuestasPropone = array();
	public $PropuestasColabora = array();

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="usuario";
        parent::__construct($tabla);

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
}
 ?>