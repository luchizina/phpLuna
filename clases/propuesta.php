<?php 
date_default_timezone_set('UTC');
date_default_timezone_set("America/Montevideo");
class Propuesta extends ClaseBase {
//estos atributos tienen que tener el mismo nombre que en la bd
	public $Nombre = '';
	public $Descripcion = '';
	public $FechaAgregada = null;
	public $FechaPublicada = null;
	public $Monto = 0;
	public $MontoActual = 0;
	public $NickUsuario = null; //objeto usuario
	public $Categoria = null; //objeto categoria
	public $Recompensa = array(); //objetoRecompensa
	public $EstadoActual = null; //objetoEstado
	public $Comentarios = array();
	public $favoritos = array();
	public $Imagen;
    public $Archivo;
    public $tipo;

	public function __construct($obj=NULL) {
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="propuesta";
        parent::__construct($tabla);
    }




    public function getArchivo(){
        return $this->Archivo;
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


    public function getImagen(){
    	return $this->Imagen;
    }

    public function setImagen($Imagen){
    	$this->Imagen=$Imagen;
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
		return $this->NickUsuario;
	}

	public function setUsuario($Usuario){
		$this->NickUsuario=$Usuario;
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

	public function getFavoritos(){
		return $this->favoritos;
	}

	public function setFavoritos($favoritos){
		$this->favoritos = $favoritos;
	}

	public function isFavoriteada($nick){
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM favorito
            WHERE propuesta =? AND usuario =? " );
        $nombre = $this->getNombre();
        $stmt->bind_param("ss", $nombre, $nick);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        $resultadito = $stmt->num_rows;
        if($resultadito != 0)
		{
			return true;
        }
        else
        {
        	return false;
        }
	}
 public function agregarP(){
        $nombre=$this->getNombre();
        $Descripcion=$this->getDescripcion();
       	$FechaPublicada=$this->getFechaPublicada();
        $Monto = $this->getMonto();
        $MontoActual=0;
        $Usuario = $this->getUsuario()->getNick();
        $Categ = $this->getCategoria()->getNombreH();

        
        $stmt = $this->getDB()->prepare( 
            "INSERT INTO propuesta 
        (Nombre,Descripcion, FechaPublicada,Monto,MontoActual,NickUsuario,Categoria,EstadoActual) 
           VALUES (?,?,?,?,?,?,?,?)" );
        $stmt->bind_param("sssiissi",$nombre,
            $Descripcion,$FechaPublicada,$Monto,$MontoActual,$Usuario,$Categ,$EstadoActual);

        return $stmt->execute();
    }



public function traerImagen($nombre){
 $stmt = $this->getDB()->prepare("SELECT Imagen FROM imagen WHERE TituloPropuesta=?");
$stmt->bind_param("s",$nombre);
     $stmt->execute();
       $resultado = $stmt->get_result();
       $fila=$resultado->fetch_object();
        //header("Content-type: image/jpg");
       return ($fila->Imagen);
}


public function insertarImagen($nombre,$path){
 $stmt = $this->getDB()->prepare("INSERT INTO imagen (Imagen,TituloPropuesta) VALUES (?,?)" );
 echo $path;
 echo $nombre;
      $stmt->bind_param("ss",$path,$nombre);
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
        $stmt = $this->getDB()->prepare("UPDATE propuesta set Nombre=?, Descripcion=?, FechaPublicada=?, Monto=? WHERE Nombre=?"); 
           
        $stmt->bind_param("sssss",$nombre,$desc,$fechaPub,$monto,$nombre);
        return $stmt->execute();
   }

   public function actualizaMonto(){
   	$monto = $this->getMontoActual();
   	$stmt = $this->getDB()->prepare( 
            "UPDATE propuesta set MontoActual=? WHERE Nombre=?"); 
           
        $stmt->bind_param("is", $monto, $this->getNombre());
        return $stmt->execute();
   }

   public function favoritear($nombre, $nick)
   {
   		$stmt = $this->getDB()->prepare( 
            "INSERT INTO favorito 
        (propuesta, usuario) 
           VALUES (?,?)" );
        $stmt->bind_param("ss",$nombre,
            $nick);
        return $stmt->execute();
   }

   public function desfavoritear($nombre, $nick)
   {
   	$stmt = $this->getDB()->prepare( 
            "DELETE FROM favorito 
        WHERE propuesta=? AND usuario=?" );
        $stmt->bind_param("ss",$nombre,
            $nick);
        return $stmt->execute();
   }



}
 ?>