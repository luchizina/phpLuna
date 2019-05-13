<?php 
class Propuesta extends ClaseBase {

	public $Nombre = '';
	public $Descripcion = '';
	public $FechaAgregada = null;
	public $FechaPublicada = null;
	public $Monto = 0;
	public $MontoActual = 0;
	public $Usuario = null; //objeto usuario
	public $Categoria = null; //objeto categoria
	public $Recompensa = array(); //objetoRecompensa
	public $EstadoActual = null; //objetoEstado
	public $Comentarios = array();
	public $favoritos = array();

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="propuesta";
        parent::__construct($tabla);
    }

    public function getComentario(){
    	return $this->Comentarios;
    }

    public function setComentario($Comentarios){
    	$this->Comentarios=$Comentarios;
    }

	public function getNombre(){
		return $this->Nombre;
	}

	public function setNombre($Nombre){
		$this->Nombre=$Nombre;
	}

	public function getDescripcion(){
		return $this->Descripcion;
	}

	public function setDescripcion($Descripcion){
		$this->Descripcion=$Descripcion;
	}

	public function getFechaAgregada(){
		return $this->FechaAgregada;
	}

	public function setFechaAgregada($FechaAgregada){
		$this->FechaAgregada=$FechaAgregada;
	}

	public function getFechaPublicada(){
		return $this->FechaPublicada;
	}

	public function setFechaPublicada($FechaPublicada){
		$this->FechaPublicada=$FechaPublicada;
	}

	public function getMonto(){
		return $this->Monto;
	}

	public function setMonto($Monto){
		$this->Monto=$Monto;
	}

	public function getMontoActual(){
		return $this->MontoActual;
	}

	public function setMontoActual($MontoActual){
		$this->MontoActual=$MontoActual;
	}

	public function getUsuario(){
		return $this->Usuario;
	}

	public function setUsuario($Usuario){
		$this->Usuario=$Usuario;
	}

	public function getCategoria(){
		return $this->Categoria;
	}

	public function setCategoria($Categoria){
		$this->Categoria=$Categoria;
	}

	public function getRecompensa(){
		return $this->Recompensa;
	}

	public function setRecompensa($Recompensa){
		$this->Recompensa=$Recompensa;
	}

	public function getEstadoActual(){
		return $this->EstadoActual;
	}

	public function setEstadoActual($EstadoActual){
		$this->EstadoActual=$EstadoActual;
	}

 public function agregar(){
      
        $nombre=$this->getNombre();
        $Descripcion=$this->getDescripcion();
     //   $FechaAgregada=$this->getFechaAgregada();
        $FechaPublicada=$this->getFechaPublicada();
        $Monto = $this->getMonto();
        $MontoActual=0;
      /*  $Usuario = $this->getUsuario()->getNick();
        $Categoria = $this->getCategoria()->getNombreP();
        $EstadoActual = $this->getEstadoActual()->getNombre();*/
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO propuesta 
        (Nombre,Descripcion, FechaPublicada,Monto,MontoActual) 
           VALUES (?,?,?,?,?)" );
        $stmt->bind_param("sssii",$nombre,
            $Descripcion,$FechaPublicada,$Monto,$MontoActual);
        return $stmt->execute();
    
    }

 public function borrarProp($nombre){

 $stmt = $this->getDB()->prepare("DELETE FROM propuesta WHERE Nombre=?");
$stmt->bind_param("s",$nombre);
    return $stmt->execute();
    }




public function modificar()
   {
        $nombre=$this->getNombre();
        $desc=$this->getDescripcion();
        $monto=$this->getMonto();
        $fechaPub=$this->getFechaPublicada();
        $this->setImagen(addslashes(file_get_contents($arch)));
        $lol = $this->getImagen();
        $null = null;
        $stmt = $this->getDB()->prepare( 
            "UPDATE propuesta set
        Nombre=?, Descripcion=?, FechaPublicada=?, Monto=? WHERE id=?"); 
           
        $stmt->bind_param("sssi",$nombre,
            $desc,$fechaPub,$monto);
        return $stmt->execute();
   }







}
 ?>