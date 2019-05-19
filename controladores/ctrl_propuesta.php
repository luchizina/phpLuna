<?php  
require "clases/clase_base.php";
require "clases/propuesta.php";
//require "clases/estados.php";
//require "clases/list_estado.php";

require "clases/listaestados.php";
require "clases/recompensa.php";
require "clases/usuario.php";
require "clases/categoria.php";
require "clases/comentario.php";
require "clases/colaboracion.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');
ini_set('display_errors', 'On');
date_default_timezone_set('UTC');
date_default_timezone_set("America/Montevideo");
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



function listadoCel(){


  $prop = new Propuesta();
  $propuestas=$prop->getListado();
   $arreglo=["status"=>"ok","message"=>$propuestas];
       //$this->consolita($usuarios[0]->getNombre());
       $listaProps = json_encode($arreglo);
       echo $listaProps;
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
    $p = new Propuesta();
  //  if($p->obtenerPorNombreProp($_POST["nombre"])==null){
    $usr = new Usuario();
		$prop= new Propuesta();
    $categ = new categoria();
		$prop->setNombre($_POST["nombre"]);
		$prop->setDescripcion($_POST["desc"]);
    $fecha =  date("Y-m-d");
		$prop->setFechaPublicada($fecha);
		$prop->setMonto($_POST["monto"]);
    $prop->setCategoria($categ->obtenerPorNombreCat($_POST["catego"]));
    $prop->setUsuario($usr->obtenerPorNick(Session::get('usuario_nick')));
		$prop->setMontoActual(0);
    $prop->setEstadoActual(1);
    $EstadoActual = 1;
      
		if($prop->agregarP()){
        $listEstado = new listaestados();
        $listEstado->setEstado(1);
        $listEstado->setPropuesta($prop->getNombre());
        $listEstado->setFecha($fecha);
         $hora = date('H:i:s');
        $listEstado->setHora($hora);
        $listEstado->agregarE(); 
        $jaja = $listEstado->getEstado().$listEstado->getPropuesta().$listEstado->getFecha().$listEstado->getHora();
			$this->redirect("propuesta","listado");
			exit;
		}else{
			$mensaje="Error! No se pudo agregar la propuesta ".$jaja;
		}
 /* }
  else{
    $mensaje = "Ya existe propuesta con este nombre ¿Qué tal si pruebas con otro nombre? ".$jaja;
  }*/

		
	}
  $categ = new categoria();
  $categorias = $categ->getListado();
	$tpl = Template::getInstance();
	$tpl->asignar('titulo',"Nueva propuesta");
	$tpl->asignar('buscar',"");
  $tpl->asignar('categorias',$categorias);
	$tpl->asignar('mensaje',$mensaje);
	$tpl->mostrar('registrar_propuesta',array());

}


public function modificar($params = array())
   {
    $mensaje = "";
     $propuesta  = new Propuesta();
     $u = new Usuario();
     $usuario = $u->obtenerPorNick(Session::get('usuario_nick'));

   
     $p = $propuesta->obtenerPorNombreProp($params[0]);

     if(isset($_POST["nombre"]))
  { 
    $p->setNombre($_POST["nombre"]);
    $p->setDescripcion($_POST["descripcion"]);
    $p->setMonto($_POST["monto"]);
    $p->setFechaPublicada($_POST["fechaPub"]);
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
  $tpl->asignar('propuesta', $p);
  $tpl->mostrar('propuestas_modificar',$p);
   }





public function borrar($params = array()){
$propuesta = new Propuesta();
if($propuesta->borrarProp($params[0])){
  $this->redirect("propuesta","listado");
}

}



function nuevaColaboracion($params=array()){
  $mensaje="";
  $col = new Colaboracion();
  $Usuario = new Usuario();
  $propuesta = new Propuesta();
  $Recompensa = new Recompensa();
  $recs = $Recompensa->traerRecompensas($params[0]);
  $usu = $Usuario->obtenerPorNick(Session::get('usuario_nick'));
  $prop=$propuesta->obtenerPorNombreProp($params[0]);
  //$rec = $Recompensa->obtenerPorId($_POST['rec']);
  if(isset($_POST["monto"])){
    $col->setMonto($_POST["monto"]);
    $col->setFecha(date("Y-m-d"));
    $col->setUsuario($usu);
    $col->setTituloPropuesta($prop);
    $col->setRecompensa($Recompensa->obtenerPorId($_POST['rec']));
    if($col->agregar()){
      array_push($usu->getPropuestasColabora(), $prop);
      $prop->setMontoActual($prop->getMontoActual() + $_POST["monto"]);
      $prop->actualizaMonto();
      $this->redirect("propuesta","listado");
      exit;
    }else $mensaje="Error! No se pudo agregar la colaboracion";
  
  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Nueva colaboracion");
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->asignar('propuesta',$prop);
  $tpl->asignar('usuario',$usu);
  $tpl->asignar('recompensas',$recs);
  $tpl->mostrar('nueva_colaboracion',array());
}

function nuevaColaboracionCel(){
  $col = new Colaboracion();
  $Usuario = new Usuario();
  $propuesta = new Propuesta();
  $Recompensa = new Recompensa();
  $usu = $Usuario->obtenerPorNick(Session::get('usuario_nick'));
  $prop=$propuesta->obtenerPorNombreProp($_POST["nombreP"]);
  $col->setMonto($_POST["monto"]);
  $col->setFecha(date("Y-m-d"));
  $col->setUsuario($usu);
  $col->setTituloPropuesta($prop);
    if($col->agregar()){
      array_push($usu->getPropuestasColabora(), $prop);
      $prop->setMontoActual($prop->getMontoActual() + $_POST["monto"]);
      $prop->actualizaMonto();
      $msg = "que rica ñery te la jugaste";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"ok","message"=>[$array]];
            echo json_encode($arreglo);
    }else 
    {
      $msg = "mal ahí ñery";
          $array = ["mensajito"=>$msg];
          $arreglo=["status"=>"error","message"=>[$array]];
          echo json_encode($arreglo);
    }
}

function borrarCa($params=array()){
               $categoria=new categoria();
               $stringABorrar=$params[0];
               echo $stringABorrar;
                if($categoria->borrar($stringABorrar)){
                    echo $stringABorrar;
                    $this->redirect("propuesta","listadoCat");
                    exit;
                }

}       

function traerPropuesta($params=array()){

  $prop = new Propuesta();
  $propuesta = $prop->obtenerPorNombreProp($params[0]);
   $p=["propuesta"=>$propuesta];
    $arreglo=["status"=>"ok","message"=>[$propuesta]];
      $nuevo = json_encode($arreglo);
      echo $nuevo;
}

  function listadoCat($params=array()){

     $buscar="";
     $titulo="Listado";
     $mensaje="";
     
    if(isset($_POST["nombreP"])){
        $categoria2= new categoria();
        $categoria2->setNombreP($_POST["nombreP"]);
        if($categoria2->agregarCatego()){
          $mensaje="Bein!";
        }else{
          $mensaje="Error! No se pudo agregar la categoria";
        }
    }
            $categoria=new categoria();
           $categorias=$categoria->getListado();         
       //Llamar a la vista
        $tpl = Template::getInstance();
        $datos = array(
       'categorias' => $categorias,
       'buscar' => $buscar,
       'titulo' => $titulo,
       'mensaje' => $mensaje,
       );

    $tpl->asignar('borrar_catego',$this->getUrl("propuesta","borrarCo"));
       $tpl->asignar('usuario_nuevo',$this->getUrl("usuario","nuevo"));
       $tpl->asignar('usuario_modificado',$this->getUrl("usuario","modificar"));
       $tpl->mostrar('registrar_categoria',$datos);
   
   }

function consolita2( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);
    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

function favoritear($params=array()){
  $propuesta = new Propuesta();
  $prop = $propuesta->obtenerPorNombreProp($params[0]);
  $usuario = new Usuario();
  $u = $usuario->obtenerPorNick(Session::get('usuario_nick'));
  if($prop->favoritear($params[0],Session::get('usuario_nick')))
  {
    $array = $u->getFavoritos();
    $array2 = $prop->getFavoritos();
    array_push($array, $prop);
    array_push($array2, $u);
    $u->setFavoritos($array);
    $prop->setFavoritos($array2);
  }
  $this->redirect("propuesta","listado");
} 

function desfavoritear($params=array()){
  $propuesta = new Propuesta();
  $prop = $propuesta->obtenerPorNombreProp($params[0]);
  $usuario = new Usuario();
  $u = $usuario->obtenerPorNick(Session::get('usuario_nick'));
  
  if($prop->desfavoritear($params[0],Session::get('usuario_nick')))
  {
    
    $key = array_search($u, $prop->getFavoritos());
    print($key);
    if($key !== false)
    {
      print($key);
       consolita2($key); 
      unset($prop->getFavoritos()[$key]);
    }
    $key2 = array_search($prop, $u->getFavoritos());
    if($key2 !== false)
    {
      print($key2);
      consolita2($key2); 
      unset($u->getFavoritos[$key2]);
    }
    print("xD");
  }
  $this->redirect("propuesta","listado");
}

function comentar(){
  $propuesta = new Propuesta();
  $prop = $propuesta->obtenerPorNombreProp($_POST['nombre']); 
  $usuario = new Usuario();
  $u = $usuario->obtenerPorMail($_POST['mail']);
  $c = new Comentario();
  $c->setUsuario($u);
  $c->setPropuesta($prop);
  $c->setTexto($_POST['texto']);
  if($c->comentar())
  {
      $msg = "Bien";
      $array = ["mens"=>$msg];
      $arreglo=["status"=>"ok","message"=>[$array]];
      echo json_encode($arreglo);
  }
  else
  {
    $msg = "mal";
      $array = ["mens"=>$msg];
      $arreglo=["status"=>"error","message"=>[$array]];
    echo json_encode($arreglo);
  }
}
}

?>