<?php  
require "clases/clase_base.php";
require "clases/usuario.php";
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
    function listado($params=array()){
       $buscar="";
       $titulo="Listado";
       $mensaje="";
       if(!empty($params)){
           if($params[0]=="borrar"){
               $usuario=new Usuario();
               $nickABorrar=$params[1];
                if($usuario->borrar($nickABorrar)){
                  $usuario->logout();
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
      Utils::enviarEmail($usr->getCorreo(),$nombreC, $body, $bodyhtml);
      $this->redirect("usuario","aviso");
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
     $u = new Usuario();
     $usuario = $u->obtenerPorNick(Session::get('usuario_nick'));
     if(isset($_POST["nombre"]))
  { 
    $u->setNombre($_POST["nombre"]);
    $u->setApellido($_POST["apellido"]);
    $u->setCelular($_POST["celular"]);
    $u->setCorreo($_POST["correo"]);
    $u->setPassword($_POST["password"]);
    if($u->modificar())
    {
      $this->redirect("usuario","redirigir");
      exit;
    }else{
      $mensaje="Error! No se pudo modificar el usuario";
    }
  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Modificar Usuario");
  $tpl->asignar('buscar',"");
  $tpl->asignar('usuario_log', $usuario);
  $tpl->mostrar('usuarios_modificar', $usuario);
   }
public function existeCi(){
  if(isset($_POST['ci'])){
  $usuario  = new Usuario();
  if($usuario->ci($_POST['ci'])){
    echo "Cedula en uso";  
    return true; 
  }
}
}
public function existeCorreo(){
  if(isset($_POST['correo'])){
  $usuario  = new Usuario();
  if($usuario->correo($_POST['correo'])){
    echo "Correo en uso";  
    return true; 
  }
}
}
public function existeNick(){
  if(isset($_POST['nick'])){
  $usuario  = new Usuario();
  if($usuario->nick($_POST['nick'])){
    echo "Nick en uso"; 
    return true;  
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
		    $msg = "logueado con éxito";
      $array = ["mens"=>$msg];
      $arreglo=["status"=>"ok","message"=>[$array]];
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
  $this->redirect("usuario","redirigir");
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
    $u->setNick($_POST['nick']);
    $u->setNombre($_POST['nombre']);
    $u->setApellido($_POST['ape']);
    $u->setCI($_POST['ci']);
    $u->setCelular($_POST['cel']);
    $u->setCorreo($_POST['correo']);
    $u->setPassword($_POST['cont']);
    $u->setActivo(1);
    if($u->agregarCel()){
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
$imagen = $usuario->traerImagen($usu->getNick());
    $tpl = Template::getInstance();
    $usu->setImagen($imagen);
   $tpl->asignar('usuario', $usu);
  $tpl->mostrar('usuario_perfil',$usu);

}






}
?>