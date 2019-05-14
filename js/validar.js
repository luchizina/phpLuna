//var x = document.getElementById("registr");
//x.addEventListener("blur", validarcorreo);
//x.addEventListener("blur", validarci);

function validarci(){
	var ced = $("#ci").val();
	$.ajax({
		url:"/phpLuna/usuario/existeCi",
		method: "POST",
		data:{ci:ced},
		//dataType:"text",
		success:function(html){
			$("#avisaCe").html(html);
			Chequear();
		}
	});
}

function validarnick(){
	var ced = $("#nick").val();
	$.ajax({
		url:"/phpLuna/usuario/existeNick",
		method: "POST",
		data:{nick:ced},
		//dataType:"text",
		success:function(html){
			$("#avisa").html(html);
		}
	});
}

function validarcorreo(){
	var ced = $("#email").val();
	$.ajax({
		url:"/phpLuna/usuario/existeCorreo",
		method: "POST",
		data:{correo:ced},
		//dataType:"text",
		success:function(html){
			$("#avisaC").html(html);
			Chequear();
		}
	});
}

function validarCel(){
	var c = $("#cel").val();
	if(c.length !== 9 || c.substring(0,0) !== 0){
		$("#avisaCel").html("El formato es incorrecto");
	}
}

function validar(){
	if(avisa.innerHTML === "Nick en uso" || avisaC.innerHTML === "Correo en uso" || avisaCe.innerHTML === "Cedula en uso" || avisaFor==="Numero de cedula incorrecto"){
		var mensaje = confirm("Tiene datos incorrectos ¿Desea corregirlos?");
        if (mensaje) {
            return false;
        } else {
            //location.href = "";
            return false;
        }
	}
}

function Chequear(){
try
{
if(EsCorrecto(ci.value))
{
$("#avisaFor").html("");
}
else
{
$("#avisaFor").html("Numero de cedula incorrecto");
}
}
catch(ex)
{
alert(ex);
ci.focus();
}
}

function EsCorrecto(pNumero){
try
{
if(pNumero.length==8 || pNumero.length==7){
var _formula = [ 2, 9, 8, 7, 6, 3, 4];
var _suma = 0;
var _guion = 0;
var _aux = 0;
var _numero = [ 0, 0, 0, 0, 0, 0, 0, 0 ];

if(pNumero.length==8){
_numero[0] = pNumero[0];
_numero[1] = pNumero[1];
_numero[2] = pNumero[2];
_numero[3] = pNumero[3];
_numero[4] = pNumero[4];
_numero[5] = pNumero[5];
_numero[6] = pNumero[6];
_numero[7] = pNumero[7];
}
//Para cédulas menores a un millón.
if(pNumero.length==7){
_numero[0] = 0;
_numero[1] = pNumero[0];
_numero[2] = pNumero[1];
_numero[3] = pNumero[2];
_numero[4] = pNumero[3];
_numero[5] = pNumero[4];
_numero[6] = pNumero[5];
_numero[7] = pNumero[6];
}

_suma = (_numero[0] * _formula[0]) + (_numero[1] * _formula[1]) + (_numero[2] * _formula[2]) + (_numero[3] * _formula[3]) + (_numero[4] * _formula[4]) + (_numero[5] * _formula[5]) + (_numero[6] * _formula[6]);

for (i = 0; i < 10; i++){
_aux = _suma + i;
if (_aux % 10 == 0){
_guion = _aux - _suma;
i = 10;
}
}

if (_numero[7] == _guion){
return true;
}
else{
return false;
}
}

else{
$("#avisaFor").html("Cedula entre 7 y 8 caracteres");
}
}
catch(ex) {throw(ex)}
} 