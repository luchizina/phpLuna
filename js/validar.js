//var x = document.getElementById("registr");
//x.addEventListener("blur", validarcorreo);
//x.addEventListener("blur", validarci);

function validarci(){
	var ced = $("#ci").val();
	$.ajax({
		url:"/phpLuna/usuario/existeCi",
		data: 'ci='+ced,
        type: 'post',
		//dataType:"text",
		success:function(html){
			$("#avisaCe").html(html);
			Chequear();
		},
		error:function(){
			$("#message1").style.display = "block";
		}
	});
}

function listCom(nombre, url){
          $.ajax({
            url: url+'propuesta/listComs/',
            data: 'prop='+nombre,
            type: 'post',
            success:function(res){
             var cont = res.split("-");
              var id = cont[0];
              var texto = cont[1];
              var usu = cont[2];
              var img = cont[3];
              var likes = cont[4];
              var logue = cont[5];
              var html = '';
              var idLike = logue+id;
              var idL = idLike.replace(/^\s+|\s+$/gm,'');
              var otroid = id.replace(/^\s+|\s+$/gm,'');
              html+='<img src="'+img+'">';
              html+='<div class="comment-content"><p class="author"><strong>'+usu+'</strong></p>';
              html+='<span>'+texto+'</span></div>';
              if(usu === logue){
                html+='<a id="'+id+'" class="btn" onclick="borrarComentNuevo('+id+',\''+nombre+'\');"><i class="icon-trash"></i></a>';
              }
              html+='<a class="btn" onclick="likeComentario(\''+logue+'\','+otroid+');">';
              html+='<i class="fa fa-thumbs-up"></i> <span id="'+idL+'">'+likes+'</span></a></div>';
              $('#nuevo').html(html);
              console.log(idL);
            }
          })
        }

        function Coment(url,nombre){
            var texto = $('#textoComentario').val();
            var nomPropCom = nombre;
            $.ajax({
              url: url+'propuesta/comentarEnPagina',
              data: 'textoComentario='+texto+'&nomPropCom='+nomPropCom,
              type: 'post',
              success:function(){
                document.getElementById("textoComentario").value = "";
                listCom(nombre, url);
              }
            })
          }


          function borrarComentNuevo(id, nombre){
          	 	var idCom = id;
       	var nomPropCom = nombre;
       	
       	var nuevo = document.getElementById("nuevo");
       	$.ajax({
              url: '/phpLuna/propuesta/borrarComEnPagina',
              data: 'idCom='+idCom+'&nomPropCom='+nomPropCom,
              type: 'post',
              success:function(){
                alert('Comentario eliminado');
             
                while (nuevo.firstChild) {
   				 nuevo.removeChild(nuevo.firstChild);
					}
              }
            })

          }


       function borrarComent(id, nombre){
       	var idCom = id;
       	var nomPropCom = nombre;
       	var element = document.getElementById(id);
       //	var nuevo = document.getElementById("nuevo");
       	$.ajax({
              url: '/phpLuna/propuesta/borrarComEnPagina',
              data: 'idCom='+idCom+'&nomPropCom='+nomPropCom,
              type: 'post',
              success:function(){
                alert('Comentario eliminado');
                
                element.parentNode.parentNode.removeChild(element.parentNode);
                //nuevo.parentNode.removeChild(nuevo);
              }
            })
       }


function likeComentario(usuario, idComent){

$.ajax({
		url:"/phpLuna/propuesta/likeComentPagina",
		method: "POST",
		data:{nickUsu:usuario,
				idCom:idComent},
		//dataType:"text",
		success:function(valor){
			$("#"+usuario+idComent).html(valor);
			console.log("#"+usuario+idComent);
			console.log(valor);
			
		},
		error:function(){
			//document.getElementById("message1").style.display = "block";
		}
	});
}


function favoritear(nomProp,url, usuario){
$.ajax({
		url: url+"propuesta/favoritear",
		method: "POST",
		data:{nombreProp:nomProp},
		//dataType:"text",
		success:function(valor){
		
			 var element = document.getElementById(usuario+nomProp);
			 
			if(valor == 1){
			 	
  				element.classList.remove("fa-star-o");
  				element.classList.add("fa-star");
			}else{
				element.classList.remove("fa-star");
  				element.classList.add("fa-star-o");	
			}
			
			
				


				
			
			
		},
		error:function(valor){
		console.log(valor);
		}
	});

}

function validarnick(){
	var ced = $("#nick").val();
	$.ajax({
		url:"/phpLuna/usuario/existeNick",
		data: 'nick='+ced,
        type: 'post',
		//dataType:"text",
		success:function(html){
			$("#avisa").html(html);
		},
		error:function(){
			$("#message1").style.display = "block";
		}
	});
}

function validarcorreo(){
	var ced = $("#email").val();
	$.ajax({
		url:"/phpLuna/usuario/existeCorreo",
		data: 'correo='+ced,
        type: 'post',
		//dataType:"text",
		success:function(html){
			$("#avisaC").html(html);
			Chequear();
		},
		error:function(){
			$("#message1").style.display = "block";
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