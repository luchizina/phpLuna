 <?php  
require_once "clases/clase_base.php";
require_once "clases/propuesta.php";
//require "clases/estados.php";
//require "clases/list_estado.php";
require_once "clases/listaestados.php";
require_once "clases/recompensa.php";
require_once "clases/usuario.php";
require_once "clases/categoria.php";
require_once "clases/comentario.php";
require_once "clases/colaboracion.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');
require_once('clases/token_usu.php');
ini_set('display_errors', 'On');
date_default_timezone_set('UTC');
date_default_timezone_set("America/Montevideo");
error_reporting(E_ALL);
class ControladorPropuesta extends ControladorIndex {
 function listado($params=array()){
       $buscar="";
       $titulo="Listado";
       $mensaje="";
       $estAnt = "";
       $estSig = "";
       if(!empty($params)){
        if($params[0] == ""){
          $propuesta=new Propuesta();
          $propuestas=$propuesta->getListadoProp(1);
          $cant = $propuesta->cantPagProp();
          $estAnt = "javascript:void(0);";
          $estSig = "propuesta/pagina/2/";
        }
        else {
          $pagina = $params[0];
          if($pagina == 1){
            $estAnt = "javascript:void(0);";
          } else {
            $p = $pagina - 1;
            $estAnt = "propuesta/pagina/$p/";
          }
          $propuesta=new Propuesta();
          $cant = $propuesta->cantPagProp();
          if($pagina == $cant){
            $estSig = "javascript:void(0);";
          } else {
            $p = $pagina + 1;
            $estSig = "propuesta/pagina/$p/";
          }
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
                    $propuestas=$propuesta->getListadoProp($pagina);  
                    $cant = $propuesta->cantPagProp();
                }
                if($params[0]=="colaborar"){
                  $this->nuevaColaboracion($params=array());
                }
           }else if ($params[0]=="filtrar"){
               $propuestas=$params[1];  
            }
            else{
              $propuesta=new Propuesta();
               $propuestas=$propuesta->getListadoProp($pagina);
               $cant = $propuesta->cantPagProp();
            }
        }
       }else{
            $propuesta=new Propuesta();
               $propuestas=$propuesta->getListadoProp(1);
               $cant = $propuesta->cantPagProp();
               $estSig = "propuesta/pagina/2/";
        }
       
       //Llamar a la vista
        foreach ($propuestas as $p) {
          $img = $p->traerImagen($p->getNombre());
          $p->setImagen($img);
          # code...
        }

        $log = Session::get('usuario_nick');
        $tpl = Template::getInstance();
        $datos = array(
       'propuestas' => $propuestas,
       'buscar' => $buscar,
       'titulo' => $titulo,
       'mensaje' => $mensaje,
       'paginas' => $cant,
       'est' => $estAnt,
       'sig' => $estSig,
       'NickLog' => $log,
       );
      
   
       $tpl->asignar('registrar_propuesta',$this->getUrl("propuesta","nuevo"));
       $tpl->asignar('propuesta_modificada',$this->getUrl("propuesta","modificar"));
       $tpl->asignar('nueva_colaboracion',$this->getUrl("propuesta","nuevaColaboracion"));
     //  $tpl->asignar('propuestas',$propuestas);
       $tpl->mostrar('propuestas_listado',$datos);
   
   }
   function listadoBusqueda($params = array()){
 $textoBuscado = $params[0];
$nombreCat = $params[1];
$log = Session::get('usuario_nick');
     $datos = array(
       'textoBuscado' => $textoBuscado,
       'nombreCat' => $nombreCat,
       'NickLog' => $log,
       );
    $tpl = Template::getInstance();
    $tpl->asignar('textoBuscado',$textoBuscado);
     $tpl->asignar('nombreCat',$nombreCat );
    $tpl->mostrar('propuestas_listadoBusqueda',$datos);
   } 
   
function listadoPropsAgregadas($params=array()){
  $prop = new Propuesta();
  $propsAgre = $prop->getListadoAgregadas($params[0]);
  #$propsNue = $prop->getListado();
   $tpl = Template::getInstance();
        $datos = array(
       'propsAgre' => $propsAgre
       );
   $tpl->mostrar('propuestas_listAgregadas',$datos);
}
function publicarPropuesta($params=array()){
$prop = new Propuesta();
$propuesta = $prop->obtenerPorNombreProp($params[0]);
$propuesta->setEstadoActual(3);
$fecha =  date("Y-m-d");
$propuesta->setFechaPublicada($fecha);
$propuesta->actualizarEstadoProp();
$propuesta->actualizarFechaPublicada();
$this->redirect("propuesta","listado");
}
function cancelarPropuesta($params=array()){
$prop = new Propuesta();
$propuesta = $prop->obtenerPorNombreProp($params[0]);
$propuesta->setEstadoActual(2);
$propuesta->actualizarEstadoProp();
$this->redirect("propuesta","listado");
}
function listadoCel(){
  $prop = new Propuesta();
  $propuestas=$prop->getListadoProp(1);
   $arreglo=["status"=>"ok","message"=>$propuestas];
       $listaProps = json_encode($arreglo);
       echo $listaProps;
}
function listComent($a = array()){
  //$prop = $_GET['prop'];
  $prop = $a[0];
  $com = new Comentario();
  $coms=$com->com($prop);
  $arreglo=["status"=>"ok","message"=>$coms];
  $listComs = json_encode($arreglo);
  echo $listComs;
}
function borrComent($a = array()){
  $com = new Comentario();
  $num = (int)$a[0];
  if($com->borrar($num)){
    $msg = "Comentario borrado";
    $array = ["mensajito"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  } else {
    $msg = "No se ha podido borrar el comentario";
    $array = ["mensajito"=>$msg];
    $arreglo=["status"=>"error","message"=>[$array]];
    echo json_encode($arreglo);
  }
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
  $prop->setFechaAgregada($fecha);
  $prop->setMonto($_POST["monto"]);
  $date = date("Y-m-d", strtotime($_POST["fec"]));
  $prop->setFechaFinalizacion($date);
    $prop->setCategoria($categ->obtenerPorNombreCat($_POST["catego"]));
    $prop->setUsuario($usr->obtenerPorNick(Session::get('usuario_nick')));
  $prop->setMontoActual(0);
    $prop->setEstadoActual(1);
    $arch =($_FILES['archivo']['tmp_name']);
    $img =($_FILES['archivo']['name']);
    $tipo = ($_FILES['archivo']['type']);
    $permitidos = array("image/jpg", "image/jpeg");
        $target='';
        if(in_array($tipo, $permitidos)){
            //$target = "imgUsus/".basename($img)
          $hola = explode(".", $img);
            $extension=end($hola);
            //rename($target, $nick.".".$extension);
            $target = "imgProps/".$prop->getNombre().".".$extension;
        } else {
            echo "El tipo de imagen es incorrecto";
        }
            if($target != ''){
            move_uploaded_file($arch, $target);
        }
    $prop->setImagen($target);
    $EstadoActual = 1;
    if($prop->agregarP()){
        $prop->insertarImagen($prop->getNombre(),$target);
        $listEstado = new listaestados();
        $listEstado->setEstado(1);
        $listEstado->setPropuesta($prop->getNombre());
        $listEstado->setFecha($fecha);
        $hora = date('H:i:s');
        $listEstado->setHora($hora);
        $listEstado->agregarE(); 
        $rec = new recompensa();
        $reco = $rec->getListadoR($prop->getNombre());
        $dato =$prop->getNombre();  
        $this->redirect("propuesta","registrarRecom/$dato");
    }else{
      $mensaje="Error! No se pudo agregar la propuesta ";
    }
    
  }else{
  $categ = new categoria();
  $categorias = $categ->getListado();
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Nueva propuesta");
  $tpl->asignar('buscar',"");
    $tpl->asignar('categorias',$categorias);
  $tpl->asignar('mensaje',$mensaje);
  $tpl->mostrar('registrar_propuesta',array());
    }
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
$prop = $propuesta->obtenerPorNombreProp($params[0]);
$prop->setEstadoActual(2);
$prop->actualizarEstadoProp();
$this->redirect("propuesta","listado");
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
  if($usu == '' || $usu == null){
    $mensaje="No puedes colaborar a una propuesta sin estar logueado";
  }else {
  if($prop == null){
    $mensaje="La propuesta no existe en el sistema";
  } else {
  if($prop->getEstadoActual() == 1 || $prop->getEstadoActual() == 2 || $prop->getEstadoActual() == 5){
    $mensaje="No puede colaborar con esta propuesta";
  } else {
  if($col->existeCol($params[0], Session::get('usuario_nick'))){
    $mensaje="Usted ya ha colaborado con esta propuesta";
  } else {
  //$rec = $Recompensa->obtenerPorId($_POST['rec']);
  if(isset($_POST["monto"])){
    $col->setMonto($_POST["monto"]);
    $col->setFecha(date("Y-m-d"));
    $col->setUsuario($usu);
    $col->setTituloPropuesta($prop);
    //$col->setRecompensa($Recompensa->obtenerPorId($_POST['rec']))
    foreach ($recs as $clave=>$r) {
      if($col->getMonto() >= $r->getMontoaSuperar()){
        $pos = $clave;
      }
    }
    $this->recursiva($recs, $col, $pos, $prop);
    if($col->agregar()){
     
      $usuProp = $Usuario->obtenerPorNick($prop->getUsuario());
      if($usuProp->getNotificacion() == 0){
      $this->enviarMailColaboracion($prop,$col);
  }
      $propsCol = $usu->getPropuestasColabora();
      array_push($propsCol, $prop);
      $prop->setMontoActual($prop->getMontoActual() + $_POST["monto"]);
      $prop->actualizaMonto();
       if($prop->getMontoActual()>=$prop->getMonto()){
        $colaboradores = $usu->traerColaboradores($prop->getNombre());
        $this->enviarMailColaboradores($colaboradores);
        $prop->setEstadoActual(4);
        $prop->actualizarEstadoProp();
      }
      $this->redirect("propuesta","listado");
      exit;
    }else $mensaje="Error! No se pudo agregar la colaboracion";
  
  }
}
}
}
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
public function enviarMailColaboradores($colabs){
foreach ($colabs as $usuC) {
$correo = $usuC->getCorreo();
$nombre = $usuC->getNombre();
$bodyHtml = "Hola $nombre, te avisamos que una de las propuestas en las que colaboraste ha cambiado de estado";
$body = "";
Utils::enviarEmail($correo,"Nahuel Ambroa", $body, $bodyHtml, "Mando correo");
}
}
public function enviarMailColaboracion($prop,$col){
  $Usuario = new Usuario();
  $usuProp = $Usuario->obtenerPorNick($prop->getUsuario());
  $correo = $usuProp->getCorreo();
  $nombre = $usuProp->getNombre();
  $apellido = $usuProp->getApellido();
  $propNomb = $prop->getNombre();
  $monto = $col->getMonto();
  
    $body = "";
    $nombreC = $nombre." ".$apellido;
      $bodyhtml = "Hola $nombre!, Te han colaborado en $propNomb con $monto pesos, Felicitaciones!";
      Utils::enviarEmail($correo,$nombreC, $body, $bodyhtml, "Aviso de colaboracion");
}
public function recursiva($recs, $col, $pos, $prop){
  $r = $recs[$pos];
  $r->setTituloPropuesta($prop);
  if($r->getLimiteUsuarios() == 0){
    $r->setCantActual($r->getCantActual() + 1);
        $col->setRecompensa($r);
        $r->actualizaCant();
      } else{
      if($r->getLimiteUsuarios() > $r->getCantActual()){
        $r->setCantActual($r->getCantActual() + 1);
        $col->setRecompensa($r);
        $r->actualizaCant();
        } else {
          if($pos != 0){ 
          $pos--;
          $this->recursiva($recs, $col, $pos, $prop);
        }
      }
    }
  }
function nuevaColaboracionCel(){
  $col = new Colaboracion();
  $Usuario = new Usuario();
  $propuesta = new Propuesta();
  $Recompensa = new Recompensa();
  $recs = $Recompensa->traerRecompensas($_POST["nombre"]);
  $usu = $Usuario->obtenerPorMail($_POST['mail']);
  $prop=$propuesta->obtenerPorNombreProp($_POST["nombre"]);
  $col->setMonto($_POST["monto"]);
    $col->setFecha(date("Y-m-d"));
    $col->setUsuario($usu);
    $col->setTituloPropuesta($prop);
        foreach ($recs as $clave=>$r) {
      if($col->getMonto() >= $r->getMontoaSuperar()){
        $pos = $clave;
      }
    }
    $this->recursiva($recs, $col, $pos, $prop);
    if($col->agregar()){
    $prop->setMontoActual($prop->getMontoActual() + $_POST["monto"]);
      $prop->actualizaMonto();
      $msg = "que rica compa te la jugaste";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"ok","message"=>[$array]];
            echo json_encode($arreglo);
    }else 
    {
      $msg = "mal ahi compa";
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
function favoritear(){
    $nomProp = $_POST['nombreProp'];
$valor = 0;
  $propuesta = new Propuesta();
  $prop = $propuesta->obtenerPorNombreProp($nomProp);
  $usuario = new Usuario();
  $u = $usuario->obtenerPorNick(Session::get('usuario_nick'));
  if($prop->isFavoriteada($u->getNick())){
    $propus = array();
    $propus[] = $nomProp;
    $this->desfavoritear($propus);
    
  }else{
  if($prop->favoritear($nomProp,Session::get('usuario_nick')))
  {
    $array = $u->getFavoritos();
    $array2 = $prop->getFavoritos();
    array_push($array, $prop);
    array_push($array2, $u);
    $u->setFavoritos($array);
    $prop->setFavoritos($array2);
    $valor = 1;
  }
    }
 echo $valor; 
} 
/*
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
*/
function detalleProp($params=array()){
$propuesta = new Propuesta();
$com = new Comentario();
$coms = $com->com($params[0]);
$recom = new recompensa();
$u = new Usuario();
foreach ($coms as $c) {
  $usu = $u->obtenerPorNick($c->NickUsuario);
  $c->setUsuario($usu);
  $valor = $c->traerLikesComentario($c->getId());  
  $c->setLike($valor["cant"]);
}
$prop = $propuesta->obtenerPorNombreProp($params[0]);
$recompensas = $recom->listarRecompensasPagina($params[0]);
$imagen = $propuesta->traerImagen($prop->getNombre());
$propsCat = $propuesta->propSugeridas($prop->getCategoria(), $prop->getNombre());
foreach ($propsCat as $clave => $p) {
    $img = $p->traerImagen($p->getNombre());
    $p->setImagen($img);
    } 
    $tpl = Template::getInstance();
    $prop->setImagen($imagen);
  $tpl->asignar('NickLog', SESSION::get('usuario_nick'));
  $tpl->asignar('recompensas', $recompensas);
  $tpl->asignar('propuesta', $prop);
  $tpl->asignar('propsCatego', $propsCat);
  $tpl->asignar('comentarios', $coms);
  $tpl->mostrar('propuestas_detalle',$prop);
}
function listComs(){
$propu = $_POST['prop'];
$com = new Comentario();
$coms = $com->com2($propu);
$u = new Usuario();
$log = Session::get('usuario_nick');
$c = $coms[0];
  $usu = $u->obtenerPorNick($c->NickUsuario);
  $c->setUsuario($usu);
  $valor = $c->traerLikesComentario($c->getId());  
  $c->setLike($valor["cant"]);
  $i ='';
  if($c->getUsuario()->getImagen() == ""){
    $i = "./imgUsus/pepito.png";
  } else {
    $i = "./".$c->getUsuario()->getImagen();
  }
echo $c->getId().'-'.$c->getTexto().'-'.$c->getUsuario()->getNick().'-'.$i.'-'.$c->getLikes()."-".$log;
}
function listProps(){
  $pag = $_POST['p'];
   $p = new Propuesta();
  if(isset($_POST['nombreCat'])){
    if($_POST['nombreCat'] == "todas"){
    $e = $p->getPropsFiltro($_POST['nombreProp'], $pag);
  }else{
    $e = $p->getPropsPorCategoria($_POST['nombreCat'], $_POST['nombreProp'], $pag);
  }
     // $propuestasPorCat = $prop->getPropsPorCategoria($params[0], $texto);
  foreach ($e as $clave => $p) {
    $img = $p->traerImagen($p->getNombre());
    $p->setImagen($img);
    $propu = $p->obtenerPorNombreProp($p->getNombre());
    $p->Tiemrest = $p->traerFechaRestante();
    if($propu->isFavoriteada(Session::get('usuario_nick'))){
      //$fav = $p->getNombre();
      $p->UsuFav = "si";
    } 
  }
  }else{
 
  $e = $p->getListadoProp($pag);
  foreach ($e as $clave => $p) {
    $img = $p->traerImagen($p->getNombre());
    $p->setImagen($img);
    $propu = $p->obtenerPorNombreProp($p->getNombre());
    if($propu->isFavoriteada(Session::get('usuario_nick'))){
      //$fav = $p->getNombre();
      $p->UsuFav = "si";
    }
    $p->Tiemrest = $p->traerFechaRestante();
 
  }
  
}
$json =  json_encode($e);
  echo $json;
 }

function cantPag(){
  $p = new Propuesta();
  $c = 0;
  if(isset($_POST['nombreCat'])){
      if($_POST['nombreCat'] == 'todas'){
      $c = $p->cantPagPropFiltro($_POST['nombreProp']);
    } else {
      $c = $p->cantPagPropC($_POST['nombreCat'], $_POST['nombreProp']);
    }
  } else {
    $c = $p->cantPagProp();
  }
  $pg = json_encode($c);
  echo $pg;
}

function e(){
  $tpl = Template::getInstance();
  $tpl->mostrar('e',array());
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
   
  }
 return true;
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
function registrarRecom($params = array())
{
 $mensaje="";
  $propuesta = new Propuesta();
  $prop=$propuesta->obtenerPorNombreProp($params[0]);
  if(isset($_POST["nombreR"])){
    $recom = new recompensa();
    $recom->setNombre($_POST["nombreR"]);
    $recom->setMontoaSuperar($_POST["monto"]);
    $recom->setLimiteUsuarios($_POST["limite"]);
    $recom->setDescripcion($_POST["desc"]);
    $recom->setTituloPropuesta($prop);
    if($recom->agregar()){
         $this->redirect("propuesta","registrarRecom/$params[0]");
         exit;
     
    }else $mensaje="Error! No se pudo agregar la colaboracion";
  }else{
    $rec = new recompensa();
    $reco = $rec->getListadoR($params[0]);
    $tpl = Template::getInstance();
    $tpl->asignar('reco', $reco);
    $tpl->asignar('mensaje', $mensaje);
    $tpl->asignar('tituloPropuesta', $params[0]);
    $tpl->mostrar('registrar_recomp',array());
  }
}

function menorRecompensa($a = array()){
  $propuesta = $a[0];
  $Recompensa = new Recompensa();
  $recs = $Recompensa->traerRecompensas($propuesta);
  $menorRec = $recs[0];
  $menorRec->setLimiteUsuarios(0);
  $menorRec->menorRec();
  $this->redirect("propuesta","listado");
}

function comentarEnPagina(){
  $propuesta = new Propuesta();
  if(isset($_POST["nomPropCom"])){
  $prop = $propuesta->obtenerPorNombreProp($_POST['nomPropCom']);
  $usuario = new Usuario();
    if (isset($_SESSION['usuario_nick'])) {
  $u = $usuario->obtenerPorNick(Session::get('usuario_nick'));
  $c = new Comentario();
  $c->setUsuario($u);
  $c->setPropuesta($prop);
  $c->setTexto($_POST['textoComentario']);
  $c->comentar();
     }else{
     echo '<script type="text/javascript">'; 
echo 'alert("Tenés que estar logueado para comentar");'; 
echo 'window.location.href = "http://localhost/phpLuna/usuario/login/";';
echo '</script>';
     }
}
}
function borrarComEnPagina(){
  $comentario = new Comentario();
   $num = (int)$_POST["idCom"];
   $algo = array();
  $algo[] =$_POST["nomPropCom"];
  if($comentario->borrar($num)){
    $comentario->borrarLikesCom($num);
     $this->redirect("propuesta","detalleProp",$algo);
  }
}
function likeComentPagina(){
  //var_dump($_POST);
  $num =(int)$_POST['idCom'];
  $usuario = $_POST['nickUsu'];
  if(empty($_POST['nickUsu'])){
     $coment = new Comentario();
 $valor = $coment->traerLikesComentario($num);
   
   echo $valor["cant"];  
  }else{
  $coment = new Comentario();
  $com = $coment->obtenerPorId($num);
  $res=$coment->likeCom($usuario, $num);
  if($res){
    $valor = $com->traerLikesComentario($num);
   
   echo $valor["cant"];  
  }else {
    $com->dislikeCom($usuario,$num);
    $valor = $com->traerLikesComentario($num);
    echo $valor["cant"];
  }
   }
}
function likeCometario(){
  $num =(int)$_POST['idCom'];
  $usuario = new Usuario();
  $u = $usuario->obtenerPorMail($_POST['mail']);
  $comentario = new Comentario();
  $c = $comentario->obtenerPorId($num);
  if($c->likeCom($u->getNick(), $c->getId($num))){
    //$array = $c->getLikes();
    //array_push($array, $u);
    //$c->setFavoritos($array);
    $msg = "Bien";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  } else {
    $msg = "Mal";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  }
}
function likePropuestaCel(){
 
  $usuario = new Usuario();
  $u = $usuario->obtenerPorMail($_POST['usuCorreo']);
  #$u = $usuario->obtenerPorMail($a[0]);
  $prop = new Propuesta();
  $propuesta = $prop->obtenerPorNombreProp($_POST['propNombre']);
 # $propuesta = $prop->obtenerPorNombreProp($a[1]);
  if($propuesta->likeProp($u->getCorreo(),$propuesta->getNombre())){
    $msg = "ingresar";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  } else {
    $propuesta->dislikeProp($u->getCorreo(),$propuesta->getNombre());
    $msg = "borrar";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  }
}
function chequearLikePropCel(){
 $prop = new Propuesta();
# $nomUsu = $a[0];
# $nomProp = $a[1];
 $valor = $prop->chequearLikeProp($_POST['usuCorreo'],$_POST['propNombre']);
#$valor = $prop->chequearLikeProp($nomUsu,$nomProp);
  if($valor['gusta']==0){
    $msg = "no tiene";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  } else {
    $msg = "tiene";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  }
}
function filtrar($params=array())
{
    $texto = $params[1];
    //$this->consolita2($params[0]);
    $listaFinal = array();
    $prop = new Propuesta();
    if($params[0] == "todas"){
    $propuestasCat = $prop->getListadoCat($texto);
    $propuestasDesc = $prop->getListadoDesc($texto);
    $propuestasTit = $prop->getListadoTit($texto);
    
    $listaFinal = array_unique((array_merge($propuestasCat, $propuestasDesc, $propuestasTit)));
    }else{
      $propuestasPorCat = $prop->getPropsPorCategoria($params[0], $texto);
     
      $listaFinal = array_unique((array_merge($propuestasPorCat)));
    }
    $array = array();
    $array[] = "filtrar";
    $array[] = $listaFinal;
    $this->listado($array);
}
function dislikeCometario(){
  $num =(int)$_POST['idCom'];
  $usuario = new Usuario();
  $u = $usuario->$obtenerPorMail($_POST['mail']);
  $comentario = new Comentario();
  $c = $comentario->obtenerPorId();
  if($c->dislikeCom($u->getNick(), $c->getId($num))){
    //$array = $c->getLikes();
    //array_push($array, $u);
    //$c->setFavoritos($array);
    $msg = "Bien";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  } else {
    $msg = "Mal";
    $array = ["mens"=>$msg];
    $arreglo=["status"=>"ok","message"=>[$array]];
    echo json_encode($arreglo);
  }
}
function verrecPrecio(){
    $r = new Recompensa();
    $recs = $r->traerRecompensasAjax($_POST["propuesta"], $_POST["monto"]);
    if($recs != null){
    echo "La recompensa para el monto ingresados es: ".$recs[0]->Nombre;
  } else {
    echo "No hay recompensa para ese monto";
  }
  }
  function dioFav(){
    $nom = $_POST['prop'];
    $p = new Propuesta();
    $propu = $p->obtenerPorNombreProp($nom);
    if($propu->isFavoriteada(Session::get('usuario_nick'))){
      echo "1";
    } else {
      echo "0";
    }
  }
  function traeLog(){
    echo Session::get('usuario_nick');
  }


function sendRegistrationToServer(){
$noti = new token_usu();

$token = $_POST['token'];
$nombre = $_POST['nombre'];
$noti->setToken($token);
$noti->setUsuario($nombre);
 if($noti->agregarToken()){
      $msg = "bien";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"ok","message"=>[$array]];
            echo json_encode($arreglo);
    }else{
      $msg = "mal";
          $array = ["mensajito"=>$msg];
          $arreglo=["status"=>"error","message"=>[$array]];
          echo json_encode($arreglo);
    }
}

function sendnotification($tokens = array(), $message, $titl,$mensaje)
    {
      $noti = new token_usu();
    $url = 'https://fcm.googleapis.com/fcm/send';
    
    $fields = array(
    'registration_ids' => $tokens,
    'data' => $message,
    'notification' => array(
            'title' => $titl,
            'body' => sprintf($mensaje.' %s.', date('H:i')),
            'icon' => '../img/moon.png',
            'click_action' => 'http://eralash.ru/'
        )
    );
    
    $headers = array(
    'Authorization:key=AAAAhFFpia8:APA91bFSiGHPTBSXvZmyR8ijvqy9OEQ9KZ7QIhH7c-kNJ3DNi2d_u1S29ucMAfGMPfn2JnnYiMmV49XGcvPOeqUTNJeeytaJhna8PagiEcuq0HhVPeWgH27Cip_bTbbkXg27uU9qj92o',
    'Content-Type: application/json'
    );
    
           $ch=curl_init();
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
           curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
           $result = curl_exec($ch);
           if ($result === FALSE) {
               die('Curl failed: ' . curl_error($ch));
           }
           curl_close($ch);
           return $result;
    }
    
    function propuestasNoti(){
     $propuestas = array();
     $propuesta = new propuesta();
     $propuestas = $propuesta->pFUNS();
    $tok = new token_usu();
    $tokens = $tok->getListado();
    $resultados = array();
       foreach ($tokens as $p) {
                $tok =  $p->getToken();
                $resultados[]=$tok;
            }
      
    $message = array("message" => "holi");
    $titl = "Hola!";
    $mensaje = "¿Ya has visto las últimas novedades de LUNA?";
    $message_status = $this->sendnotification($resultados, $message, $titl,$mensaje);
    echo $message_status;
    }
    
    function propuestasPorFinal(){
     $propuestas = array();
     $propuesta = new propuesta();
     $propuestas = $propuesta->pFUNS();
    $tok = new token_usu();
    $tokens = $tok->getListado();
    $resultados = array();
    $resultadosProp = array();
       foreach ($tokens as $p) {
                $tok =  $p->getToken();
                $resultados[]=$tok;
            }
    foreach ($propuestas as $p) {          
                $message_status = $this->propuestasFinalizar($p);
                           
     }
    
    echo $message_status;
    }


    function modificarRecompensa(){

      $nombreR = $_POST['nombreR'];
      $id = $_POST['id'];
      $desc = $_POST['descripcion'];
      $monto = $_POST['monto'];
      $limUsu = $_POST['limiteUsu'];
      
      $recom = new Recompensa();
      $recompensa = $recom->obtenerPorId($id);

      $recompensa->setDescripcion($desc);
      $recompensa->setMontoaSuperar($monto);
      $recompensa->setLimiteUsuarios($limUsu);
      $recompensa->setNombre($nombreR);
      $recompensa->modificarReco();

      $nuevoArray = array();
      array_push($nuevoArray, $nombreR, $desc,$monto,$limUsu);
      $json =  json_encode($nuevoArray);
      echo $json;


    }

    function borrarRecompensa(){
      $id = $_POST['id'];
      $reco = new Recompensa();
      $reco->borrar($id);

    }

    function modificarCategoria(){
      $nombreC = $_POST['nombreC'];
      $nombreViej = $_POST['nombreViejo'];
      $cat = new categoria();
  $cat->modificarCatego($nombreC, $nombreViej);

      $nuevoArray = array();
      array_push($nuevoArray, $nombreC);
       $json =  json_encode($nuevoArray);
      echo $json;
    }




    
    function propuestasFinalizar($prop){
      $pro = $prop->getNombre();
      $otra = "/topics/".$pro;
    $noti = new token_usu();
    $message=array("message" => "holi");
    $url = 'https://fcm.googleapis.com/fcm/send';
    $titl = "¡Upss! Esto es vergonzoso";
    $mensaje = "La propuesta ".$pro." está por terminar y aún no ha alcanzado su meta. ¿Por qué no lo ayudas?";
    $fields = array(
    'to'  => $otra,
    'data' => $message,
    'notification' => array(
            'title' => $titl,
            'body' => sprintf($mensaje.' %s.', date('H:i')),
           'icon' => '../img/moon.png',
            'click_action' => 'http://eralash.ru/'
        )
    );
    
    $headers = array(
    'Authorization:key=AAAAhFFpia8:APA91bFSiGHPTBSXvZmyR8ijvqy9OEQ9KZ7QIhH7c-kNJ3DNi2d_u1S29ucMAfGMPfn2JnnYiMmV49XGcvPOeqUTNJeeytaJhna8PagiEcuq0HhVPeWgH27Cip_bTbbkXg27uU9qj92o',
    'Content-Type: application/json'
    );
    
           $ch=curl_init();
           curl_setopt($ch, CURLOPT_URL, $url);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
           curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
           curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
           $result = curl_exec($ch);
           if ($result === FALSE) {
               die('Curl failed: ' . curl_error($ch));
           }
           curl_close($ch);
           return $result;
    }
}
?>



 