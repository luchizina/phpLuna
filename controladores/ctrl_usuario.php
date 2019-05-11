<?php  
require "clases/clase_base.php";
require "clases/usuario.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');


class ControladorUsuario extends ControladorIndex {

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
       

       $arreglo=["status"=>"ok","message"=>$usuarios];


       $listaUsers= json_encode($arreglo);
       //var_dump($listaUsers);

       echo  $listaUsers;


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
    $usr->setArchivo($_FILES["archivo"]["tmp_name"]);
    $usr->setTam($_FILES["archivo"]["size"]);
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



}
?>