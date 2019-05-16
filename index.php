
<?php
require "db/db.php";
require 'vendor/autoload.php';
require "controladores/ctrl_index.php";
require_once('clases/template.php');
require_once('clases/session.php');
$controlIndex=new ControladorIndex();

$tpl = Template::getInstance();
$tpl->asignar('url_base',"http://localhost/phpLuna/");
$tpl->asignar('url_logout',$controlIndex->getUrl("usuario","logout"));
$tpl->asignar('url_login',$controlIndex->getUrl("usuario","login"));

session_start();
$nombre = Session::get('usuario_nombre');
$nick = Session::get('usuario_nick');
//$ape = Session::get('usuario_apellido');
//$userLogueado ="¡Hola ".$nombre."!";
$tpl->asignar('usuLogueado',$nombre);
$tpl->asignar('usuLogNick',$nick);
$tpl->asignar('proyecto',"Hola");

//Cargamos controladores y acciones

if(isset($_GET['url'])){
	$query = $_GET['url'];
	$request = explode('/', $query);
	$controller = (!empty($request[0])) ? $request[0] : 'usuario';
	$action = (!empty($request[1])) ? $request[1] : 'redirigir';
	$params=array();
	for ($i=2; $i <count($request) ; $i++) { 
		$params[]=$request[$i];
	}
}else{
	$controller="usuario";
	$action="redirigir";
	$params=array();
}

$controllerObj=$controlIndex->cargarControlador($controller);
$controlIndex->ejecutarAccion($controllerObj,$action,$params);

?>