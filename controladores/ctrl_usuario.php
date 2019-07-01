<?php  
require_once "clases/clase_base.php";
require_once "clases/usuario.php";
require_once "clases/propuesta.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');
class ControladorUsuario extends ControladorIndex { 
  function redirigir(){
     //Llamar a la vista
        $tpl = Template::getInstance();
        $mensaje = "hola";  
        $datos = array(
       'mensaje' => $mensaje
       );
          $tpl->mostrar('inicio',$datos);
}


function borrarUsuario(){

$usuario = new Usuario();

    $nick = $_POST['nick'];
    $usuario->borrarUsu($nick);
     $usuario->logout();

 return $this->getUrl("usuario","redirigir");
}


    function listado($params=array()){
       $buscar="";
       $titulo="Listado";
       $mensaje="";
       if(!empty($params)){
           if($params[0]=="borrar"){
               $usuario=new Usuario();
               $nickABorrar=$params[1];
                if($usuario->borrarUsu($nickABorrar)){
                  $usuario->logout();
                   return $this->getUrl("usuario","redirigir");
                    //Redirigir al listado
                    //header('Location: index.php');exit;
                    $this->redirect("usuario","listado");
                }else{
                    //Mostrar error
                    $usr=$usuario->obtenerPorNick($nickABorrar);
                    //$mensaje="Error!! No se pudo borrar el usuario  <b>".$usr->getNombre()." ".$usr->getApellido()."</b>";
                    $mensaje="ERROR. No existe el usuario";
                    $usuarios=$usuario->getListado();	
                }
           }else{
                $usuario=new Usuario();
               $usuarios=$usuario->getListado();	
            }
       }else{
            $usuario=new Usuario();
           $usuarios=$usuario->getListado();	
        }
       
       //Llamar a la vista
        $tpl = Template::getInstance();
        $datos = array(
       'usuarios' => $usuarios,
       'buscar' => $buscar,
       'titulo' => $titulo,
       'mensaje' => $mensaje,
       );
    
   
       $tpl->asignar('usuario_nuevo',$this->getUrl("usuario","nuevo"));
       $tpl->asignar('usuario_modificado',$this->getUrl("usuario","modificar"));
       $tpl->mostrar('usuarios_listado',$datos);
   
   }
function listadoMovil($params=array()){
   $buscar="";
       $titulo="Listado";
       $mensaje="";
       if(!empty($params)){
           if($params[0]=="borrar"){
               $usuario=new Usuario();
               $nickABorrar=$params[1];
                if($usuario->borrar($NickABorrar)){
                    //Redirigir al listado
                    //header('Location: index.php');exit;
                    $this->redirect("usuario","listado");
                }else{
                    //Mostrar error
                 //   $usr=$usuario->obtenerPorId($idABorrar);
                    //$mensaje="Error!! No se pudo borrar el usuario  <b>".$usr->getNombre()." ".$usr->getApellido()."</b>";
                    $mensaje="ERROR. No existe el usuario";
                    $usuarios=$usuario->getListado(); 
                }
           }else{
                $usuario=new Usuario();
               $usuarios=$usuario->getListado();  
            }
       }else{
            $usuario=new Usuario();
           $usuarios=$usuario->getListado();  
        }
       
       $arreglo=["status"=>"ok","message"=>$usuarios];
       //$this->consolita($usuarios[0]->getNombre());
       $listaUsers = json_encode($arreglo);
        echo json_last_error();
       echo $listaUsers;
       var_dump($arreglo);
}
function multiplicidad($a = array())
{
  $f = $a[0]*100;
  $c=["numerito"=>$f];
$b=["status"=>"ok","message"=>[$c]];
$hola= json_encode($b);
echo $hola;
}

function devuelveUsu($a = array()){
  $usu = new Usuario();
  $u = ["nick" => $usu->obtenerPorMail($a[0])->getNick()];
  $b=["status"=>"ok","message"=>[$u]];
  echo json_encode($b);
}

function nuevo(){
  $mensaje="";
  if(isset($_POST["nick"])){
    $usr= new Usuario();
    $usr->setNick($_POST["nick"]);
    $usr->setNombre($_POST["nombre"]);
    $usr->setApellido($_POST["apellido"]);
    $usr->setCelular($_POST["cel"]);
    $usr->setCorreo($_POST["email"]);
    $usr->setPassword($_POST["pass"]);
    //var_dump($_FILES);exit();
    $usr->setArchivo($_FILES['archivo']['tmp_name']);
    $usr->setImagen($_FILES['archivo']['name']);
    $usr->setTipoImg($_FILES['archivo']['type']);
    $usr->setTipo(1);
    $usr->setCI($_POST["ci"]);
    $usr->setActivo(0);
    $token = md5(uniqid(mt_rand(), false));
    $usr->setToken($token);
    if($usr->agregar()){
      $nombreC = $usr->getNombre()." ".$usr->getApellido();
      $url="http://localhost/phpLuna/usuario/activarU/".$token;
      $body = "Para activar su cuenta debe entrar al siguiente enlace: ".$url;
      $bodyhtml = "Para activar su cuenta haga click aqui <a href='$url'>Activar cuenta</a>";
      if(Utils::enviarEmail($usr->getCorreo(),$nombreC, $body, $bodyhtml, "Bienvenida a Luna-Activar cuenta")){
        $this->redirect("usuario","aviso");
      } else {
        $this->redirect("usuario","correoFalso");
      }
      exit;
    }else{
      $mensaje="Error! No se pudo agregar el usuario";
    }
    
  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Registrarse");
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->mostrar('usuarios_nuevo',array());
}

public function aviso(){
  $tpl = Template::getInstance();
  $tpl->mostrar('aviso', array());
}

public function correoFalso(){
  $tpl = Template::getInstance();
  $tpl->mostrar('correoFalso', array());
}

public function activarU($a = array()){
  $token = $a[0];
  $u = new Usuario();
  if($u->activarUsuario($token)){
    $this->redirect("usuario","login");
  } else {
    echo "Error en tratar de activar el usuario";
  }
}

public function modificar($params = array())
   {
     $mensaje = "";
     $usuario = new Usuario();

     $u = $usuario->obtenerPorNick(Session::get('usuario_nick'));
     if(isset($_POST["nombre"]))
  { 
    $var = $u->getTipoImg();
    $u->setNombre($_POST["nombre"]);
    $u->setApellido($_POST["apellido"]);
    $u->setCelular($_POST["celular"]);
    $u->setCorreo($_POST["correo"]);
    $u->setPassword($_POST["password"]);
    if($_FILES['archivo']['name'] != ""){
    $u->setArchivo($_FILES['archivo']['tmp_name']);
    $u->setImagen($_FILES['archivo']['name']);
    $u->setTipoImg($_FILES['archivo']['type']);
  } else {
    $u->setArchivo("NoModificar");
  }
    if($u->modificar($var))
    {
      $this->redirect("usuario","redirigir");
      exit;
    }else{
      echo "Error! No se pudo modificar el usuario";
    }
  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Modificar Usuario");
  $tpl->asignar('buscar',"");
  $tpl->asignar('usuario_log', $u);
  $tpl->mostrar('usuarios_modificar', $u);
   }
public function existeCi(){
  if(isset($_POST['ci'])){
  $usuario  = new Usuario();
  if($usuario->ci($_POST['ci'])){
    echo "Cedula en uso";  
  }
}
}
public function existeCorreo(){
  if(isset($_POST['correo'])){
  $usuario  = new Usuario();
  if($usuario->correo($_POST['correo'])){
    echo "Correo en uso";  
  }
}
}
public function existeNick(){
  if(isset($_POST['nick'])){
  $usuario  = new Usuario();
  if($usuario->nick($_POST['nick'])){
    echo "Nick en uso"; 
  }
}
}
function consolita( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);
    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
function loginCel(){
$usr = new Usuario();
$email = $_POST['email'];
$pass = sha1($_POST['pass']);
	if($usr->login($email,$pass)){
    $userit = $usr->obtenerPorMail($email);
    $arreglo=["status"=>"ok","message"=>[$userit]];
            echo json_encode($arreglo);
	}else{
		 $msg = "no existe usuario";
      $array = ["mens"=>$msg];
      $arreglo=["status"=>"error","message"=>[$array]];
            echo json_encode($arreglo);
	}
 
}


function login(){
  $mensaje="";
  
  if(isset($_POST["email"])){
    $usr= new Usuario();
    
    $email=$_POST["email"];
    $pass=sha1($_POST["password"]);
    if($usr->login($email,$pass)){
      $this->redirect("usuario","redirigir");
      exit;
    }else{
      $mensaje="Error! Este usuario no está registrado en el sistema o su cuenta aun no esta activa";
    }
    
  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Nuevo Usuario");
  $tpl->asignar('loginUrl',"");
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->mostrar('usuarios_login',array());
}


function logout(){
  $usr= new Usuario();
  $usr->logout();
  return $this->getUrl("usuario","redirigir");
}



public function traerImagen($params = array()){
$usr = new Usuario();
$img=$usr->traerImagen($params[0]);
//ob_start();
header("Content-type: jpg");
print base64_decode($img);
//ob_clean();
}
public function nuevoUsuCel(){ 
    $u  = new Usuario();
    if($this->existeCi($_POST['ci'])){
      $msg = "La cedula se encuentra en uso";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"error","message"=>[$array]];
            echo json_encode($arreglo);
    } else {
      if($this->existeNick($_POST['nick'])){
        $msg = "El nick se encuentra en uso";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"error","message"=>[$array]];
            echo json_encode($arreglo);
      } else {
        if($this->existeCorreo($_POST['correo'])){
          $msg = "El correo se encuentra en uso";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"error","message"=>[$array]];
            echo json_encode($arreglo);
        } else {
    
    $u->setImagen($_POST['nombreImg']);
    $u->setTipoImg($_POST['tipoImg']);  
    $u->setArchivo(base64_decode($_POST['archivo']));
    $u->setNick($_POST['nick']);
    $u->setNombre($_POST['nombre']);
    $u->setApellido($_POST['ape']);
    $u->setCI($_POST['ci']);
    $u->setCelular($_POST['cel']);
    $u->setCorreo($_POST['correo']);
    $u->setPassword($_POST['cont']); 
    $u->setTipo(1);
    $u->setActivo(0);
    $token = md5(uniqid(mt_rand(), false));
    $u->setToken($token);
    if($u->agregarCel()){
      $nombreC = $u->getNombre()." ".$u->getApellido();
      $url="http://localhost/phpLuna/usuario/activarU/".$token;
      $body = "Para activar su cuenta debe entrar al siguiente enlace: ".$url;
      $bodyhtml = "Para activar su cuenta haga click aqui <a href='$url'>Activar cuenta</a>";
      Utils::enviarEmail($u->getCorreo(),$nombreC, $body, $bodyhtml, "Bienvenida a Luna-Activar cuenta");
      $msg = "Usuario registrado";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"ok","message"=>[$array]];
            echo json_encode($arreglo);
    } else {
      $msg = "Error al tratar de registrarse";
      $array = ["mensajito"=>$msg];
      $arreglo=["status"=>"error","message"=>[$array]];
            echo json_encode($arreglo);
    }
    } 
    }
    }
   // echo json_encode($json_registration);
}


function verPerfil($params=array()){
$usuario = new Usuario();
$usu = $usuario->obtenerPorNick($params[0]);

$prop = new Propuesta();
$propsUsu = $prop->traerMisProps($usu->getNick());
$propsFavs = $prop->traerPropsFavoritas($usu->getNick());
$propsColab = $prop->traerPropsColaboradas($usu->getNick());
$imagen = $usuario->traerImagen($usu->getNick());

    $tpl = Template::getInstance();
    $usu->setImagen($imagen);
    $tpl->asignar('misProps', $propsUsu);
    $tpl->asignar('propsFavoritas',$propsFavs);
    $tpl->asignar('propsColaboradas',$propsColab);
   $tpl->asignar('usuario', $usu);
  $tpl->mostrar('usuario_perfil',$usu);

}


function traerPerfilM($params=array()){
  $usu= new Usuario();
  $usuario = $usu->obtenerPorNick($params[0]);
   $u=["usuario"=>$usuario];
    $arreglo=["status"=>"ok","message"=>[$usuario]];
      $nuevo = json_encode($arreglo);
      echo $nuevo;
}


public function notifUsuario(){
  $usuario = new Usuario();
  $valorCheck = $_POST['checkNotif'];
  $usu = $usuario->obtenerPorNick($_POST['nomUsu']);

  
  if($valorCheck=="on"){
    $usu->setNotificacion(0);
    $usu->actualizarNotificacion(0);
    
  }else{
    $usu->setNotificacion(1);
    $usu->actualizarNotificacion(1);
  }
  $algo = array();
  $algo[] =$usu->getNick();
  $this->redirect("usuario","verPerfil",$algo);
}


public function RecuperarCont(){
  
  $mensaje="";
  if(isset($_POST["email"])){
    $correo = $_POST['email'];
  $u = new Usuario();
  if($u->correo($correo)){
    $usr = $u->obtenerPorMail($correo);
    $nick = $usr->getNick();
    $token = md5(uniqid(mt_rand(), false));
    $usr->setTokenPass($token);
    $usr->setSolicitoPass(1);
    $usr->solicitoCambCont();
    $nombreC = $usr->getNombre()." ".$usr->getApellido();
    $url="http://localhost/phpLuna/usuario/cambiarCont/".$nick."/".$token;
    $body = "Para restaurar su contraseña debe entrar al siguiente enlace: ".$url;
    $bodyhtml = "Para restaurar su contraseña haga click aqui <a href='$url'>restaurar contraseña</a>";
    Utils::enviarEmail($correo,$nombreC, $body, $bodyhtml, "Restablecer contraseña");
    $this->redirect('usuario', 'aviso2');
  } else {
    $mensaje = "El correo no existe en el sistema";
  }
} 
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Recuperar contraseña");
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->mostrar('recuperar_cont',array());
}

public function aviso2(){
  $tpl = Template::getInstance();
  $tpl->mostrar('aviso2', array());
}


public function cambiarCont($a = array()){
  $nick = $a[0];
  $token = $a[1];
  $u = new Usuario();
  if($u->Solicito($token, $nick)){
    $e = ["nick" => $nick, "token" => $token];
    $this->redirect("usuario","cambiaPass", $e);
  } else {
    echo "Error, los datos no coinciden";
  }
}

public function cambiaPass($params=array()){
  $nick = $params[0];
  $token = $params[1];
  $mensaje="";
  if(isset($_POST['password']) && isset($_POST['password2'])){
    $usu = $_POST['nick'];
    $tok = $_POST['token'];
    if($_POST['password'] == $_POST['password2']){
      $u = new Usuario();
      $u->CambiaPass($tok, $usu, $_POST['password']);
      $this->redirect("usuario","login");
    } else {
      $mensaje="Las contraseñas no coinciden";
    }
  }
  $tpl = Template::getInstance();
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->asignar('nick',$nick);
  $tpl->asignar('token',$token);
  $tpl->mostrar('restablecer',array());
}





public function mandarPropsQueVencen(){
    $propsQueVencen = array();
    $propuesta = new Propuesta();
    $props = $propuesta->getListado();

    foreach($props as $p){
      if($p->traerFechaRestante() >= 7 && $p->traerFechaRestante() <= 14){
        array_push($propsQueVencen,$p->getNombre());
      }

    }  
    $arrlength = count($propsQueVencen);
     $bodyhtml = "Estas son las propuestas";
       $bodyhtml = "Hola querido cliente, a continuación, te mostraremos las propuestas que vencen la semana que viene <br>";
    $bodyhtml = $bodyhtml."<hr>";
    for($x = 0; $x < $arrlength; $x++) {
    

    $bodyhtml = $bodyhtml."<h3>".$propsQueVencen[$x]."</h3>";
    
}
  $usuario=new Usuario();
  $usuarios=$usuario->getListado();

foreach ($usuarios as $usu) {
$correo = $usu->getCorreo();

$nombreC = $usu->getNombre()." ".$usu->getApellido();
      $url="#";
      $body = "Esto es una prueba";
    
      Utils::enviarEmail($correo,$nombreC, $body, $bodyhtml, "Bienvenida a Luna");

}
 return $this->getUrl("usuario","redirigir");
  
}



}
?>