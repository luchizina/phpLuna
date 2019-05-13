<?php  
require "clases/clase_base.php";
require "clases/propuesta.php";
//require "clases/estados.php";
//require "clases/list_estado.php";
require "clases/recompensa.php";
require "clases/usuario.php";
require "clases/colaboracion.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');
ini_set('display_errors', 'On');
error_reporting(E_ALL);
class ControladorPropuesta extends ControladorIndex {

 function listado($params=array()){

       $buscar="";
       $titulo="Listado";
       $mensaje="";
       if(!empty($params)){
           if($params[0]=="borrar"){
               $propuesta=new Propuesta();
               $idABorrar=$params[1];
                if($propuesta->borrar($idABorrar)){
                    //Redirigir al listado
                    //header('Location: index.php');exit;
                    $this->redirect("propuesta","listado");
                }else{
                    //Mostrar error
                    $usr=$propuesta->obtenerPorId($idABorrar);
                    //$mensaje="Error!! No se pudo borrar el usuario  <b>".$usr->getNombre()." ".$usr->getApellido()."</b>";
                    $mensaje="ERROR. No existe la propuesta";
                    $propuestas=$propuesta->getListado();	
                }
                if($params[0]=="colaborar"){
                  $this->nuevaColaboracion($params=array());
                }
           }else{
                $propuesta=new Propuesta();
               $propuestas=$propuesta->getListado();	
            }
       }else{
            $propuesta=new Propuesta();
               $propuestas=$propuesta->getListado();
        }
       
       //Llamar a la vista
        $tpl = Template::getInstance();
        $datos = array(
       'propuestas' => $propuestas,
       'buscar' => $buscar,
       'titulo' => $titulo,
       'mensaje' => $mensaje,
       );
    /*    for( $i=0; $i < count($propuestas); $i++){
           $this->consolita($propuestas[$i]->getNombre());
        }
       */
      
   
       $tpl->asignar('registrar_propuesta',$this->getUrl("propuesta","nuevo"));
       $tpl->asignar('propuesta_modificada',$this->getUrl("propuesta","modificar"));
       $tpl->asignar('nueva_colaboracion',$this->getUrl("propuesta","nuevaColaboracion"));
     //  $tpl->asignar('propuestas',$propuestas);
       $tpl->mostrar('propuestas_listado',$datos);
   
   }


function consolita( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}


   function nuevo(){
	$mensaje="";
	if(isset($_POST["nombre"])){
		$prop= new Propuesta();
		$prop->setNombre($_POST["nombre"]);
		$prop->setDescripcion($_POST["desc"]);
    $fecha =  date("Y-m-d H:i:s");
		$prop->setFechaPublicada('12/12/2019');
		$prop->setMonto($_POST["monto"]);
		$prop->setMontoActual(0);

		if($prop->agregar()){
			$this->redirect("propuesta","listado");
			exit;
		}else{
			$mensaje="Error! No se pudo agregar el usuario";
		}

		
	}
	$tpl = Template::getInstance();
	$tpl->asignar('titulo',"Nueva propuesta");
	$tpl->asignar('buscar',"");
	$tpl->asignar('mensaje',$mensaje);
	$tpl->mostrar('registrar_propuesta',array());

}


public function modificar($params = array())
   {
    $mensaje = "";
     $propuesta  = new Propuesta();
     $p = $propuesta->obtenerPorId($params[0]);
     if(isset($_POST["nombre"]))
  { 
    $p->setNombre($_POST["nombre"]);
    $p->setDescripcion($_POST["descripcion"]);
    $p->setMonto($_POST["monto"]);
    $p->setFechaPublicada($_POST["fechaPub"]);
    $usr->setTam($_FILES["archivo"]["size"]);
    if($p->modificar())
    {
      $this->redirect("propuesta","listado");
      exit;
    }else{
      $mensaje="Error! No se pudo modificar la propuesta";
    }

  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Modificar Propuesta");
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->asignar('propuesta', $u);
  $tpl->mostrar('modificar_propuesta',$p);
   }

public function recompensas($params=array()){
  if(empty($params)){
    $rec = new Recompensa();
    $recs = $rec->getListado();
  }
  $tpl = Template::getInstance();
        $datos = array(
       'recompensas' => $recs,
       );
   
       $tpl->mostrar('nueva_colaboracion',$datos);
}



public function borrar($params = array()){
$propuesta = new Propuesta();
  $this->consolita($params[0]);
  
if($propuesta->borrarProp($params[0])){
  $this->consolita($params[0]);
   $this->consolita("hola");
  $this->redirect("propuesta","listado");
}

}

function nuevaColaboracion($params=array()){
  $mensaje="";
  $col = new Colaboracion();
  $Usuario = new Usuario();
  $propuesta = new Propuesta();
  $Recompensa = new Recompensa();
  $recs = $Recompensa->getListado();
  $usu = $Usuario->obtenerPorNick("lu");
  $prop=$propuesta->obtenerPorNombreProp($params[0]);
  if(isset($_POST["monto"])){
    $rec = $Recompensa->obtenerPorId($_POST['rec']);
    $col->setMonto($_POST["monto"]);
    $col->setFecha(date("Y-m-d"));
    $col->setUsuario($usu);
    $col->setTituloPropuesta($prop);
    $col->setRecompensa($rec);
    if($usr->agregar()){
      array_push($usu->getPropuestasColabora(), $col);
      $prop->setMontoActual($prop->getMontoActual() + $_POST["monto"]);
      $this->redirect("propuesta","listado");
      exit;
    }else{
      $mensaje="Error! No se pudo agregar la colaboracion";
    } 
  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Nueva colaboracion");
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->asignar('propuesta',$prop);
  $tpl->asignar('usuario',$usu);
  $tpl->asignar('recompensa',$rec);
  $tpl->asignar('recompensas',$recs);
  $tpl->mostrar('nueva_colaboracion',array());
  //$_SESSION['usuario_id'];
}

function favoritear(){
}



}


?>