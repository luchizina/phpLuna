<?php  
require "clases/clase_base.php";
require "clases/propuesta.php";
require "clases/estado.php";
//require "clases/list_estado.php";
require "clases/recompensa.php";
require_once('clases/template.php');
require_once('clases/Utils.php');
require_once('clases/session.php');
require_once('clases/auth.php');

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
   
       $tpl->asignar('propuesta_nueva',$this->getUrl("propuesta","nueva"));
       $tpl->asignar('propuesta_modificada',$this->getUrl("propuesta","modificar"));
       $tpl->mostrar('propuestas_listado',$datos);
   
   }

}


?>