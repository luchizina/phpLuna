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
        $usuarios = "hola";
        $buscar = "buscar";
        $mensaje = "mensaje";
        $datos = array('mensaje' => $mensaje);
          $tpl->mostrar('inicio',$datos);
}
    function listado($params=array()){

       $buscar="";
       $titulo="Listado";
       $mensaje="";
       if(!empty($params)){
           if($params[0]=="borrar"){
               $usuario=new Usuario();
               $idABorrar=$params[1];
                if($usuario->borrar($idABorrar)){
                    //Redirigir al listado
                    //header('Location: index.php');exit;
                    $this->redirect("usuario","listado");
                }else{
                    //Mostrar error
                    $usr=$usuario->obtenerPorId($idABorrar);
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
               $idABorrar=$params[1];
                if($usuario->borrar($idABorrar)){
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
    $usr->setArchivo($_FILES["archivo"]["tmp_name"]);
    $usr->setTam($_FILES["archivo"]["size"]);
    $usr->setCI($_POST["ci"]);
    $usr->setActivo(1);
    if($usr->agregar()){
      $this->redirect("usuario","listado");
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





public function modificar($params = array())
   {
    $mensaje = "";
     $usuario  = new Usuario();
     $u = $usuario->obtenerPorId($params[0]);
     if(isset($_POST["nombre"]))
  { 
    $u->setNombre($_POST["nombre"]);
    $u->setNick($_POST["nick"]);
    $u->setApellido($_POST["apellido"]);
    $u->setCI($_POST["ci"]);
    $u->setCelular($_POST["celular"]);
    $u->setCorreo($_POST["email"]);
    $u->setArchivo($_FILES["archivo"]["tmp_name"]);
    $u->setPassword($_POST["pass"]);
    $usr->setTam($_FILES["archivo"]["size"]);
    if($u->modificar())
    {
      $this->redirect("usuario","listado");
      exit;
    }else{
      $mensaje="Error! No se pudo modificar el usuario";
    }

  }
  $tpl = Template::getInstance();
  $tpl->asignar('titulo',"Modificar Usuario");
  $tpl->asignar('buscar',"");
  $tpl->asignar('mensaje',$mensaje);
  $tpl->asignar('usuario', $u);
  $tpl->mostrar('modificar_usuario',$u);
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
      $mensaje="Error! No se pudo agregar el usuario";
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
  if(isset($_POST['nick']) && isset($_POST['cont']) && isset($_POST['nombre']) && isset($_POST['ape']) && isset($_POST['correo']) && isset($_POST['cel']) && isset($_POST['ci'])){
    $u  = new Usuario();
    $u->setNick($_POST['nick']);
    $u->setNombre($_POST['nombre']);
    $u->setApellido($_POST['ape']);
    $u->setCI($_POST['ci']);
    $u->setCelular($_POST['cel']);
    $u->setCorreo($_POST['correo']);
    $u->setPassword($_POST['cont']);
    $u->setActivo(1);
    $u->agregarCel();
   // echo json_encode($json_registration);

}
}
?>