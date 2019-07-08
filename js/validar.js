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

function redondear(numero, digitos){
    let base = Math.pow(10, digitos);
    let entero = Math.round(numero * base);
    return entero / base;
}



function listarPropBien(p){
listProp(p,'no','no');
paginar('no','no');
}

function listProp(p,nombreCat,nombreProp){
  urlList = '/phpLuna/propuesta/listProps/';
  if(nombreCat == 'no'){
  $.ajax({
    url: urlList,
    data: 'p='+p,
    type: 'post',
    dataType: 'json', 
    success:function(res){
      var html='';
      for(var i=0; i<res.length; i++){
        let por = (res[i]['MontoActual'] * 100)/res[i]['Monto'];
        let porc = redondear(por, 3);
        let id = traeLog()+res[i]['Nombre'];
        let otroid = id.replace(/^\s+|\s+$/gm,'');
        html += '<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12" data-animate-effect="fadeIn">';
        html += '<div class="probootstrap-image-text-block probootstrap-cause">';
        html += '<figure class="imk"  width="360" height="200">';
        html += '<img src="./'+res[i]['Imagen']+'" alt="'+res[i]['Nombre']+'" class="img2">';
        html += '</figure>';
        html += '<div class="probootstrap-cause-inner">';
        html += '<div class="progress">';
        html += '<div class="progress-bar progress-bar-s2" data-percent="'+porc+'" style="width:'+porc+'%;"><span>'+porc+'%</span></div>';
        html += '</div>';
        html += '<div class="row mb30">';
        html += '<div class="col-md-6 col-sm-6 col-xs-6 probootstrap-raised">Monto actual: <span class="money">'+res[i]['MontoActual']+'</span></div>';
        html += '<div class="col-md-6 col-sm-6 col-xs-6 probootstrap-goal">Objetivo: <span class="money"> '+res[i]['Monto']+'</span></div>';
        html += '</div>';
        html += '<h2><a href="/phpLuna/propuesta/detalleProp/'+res[i]['Nombre']+'/">'+res[i]['Nombre']+'</a>';
       
        html += '</h2>';
        if(res[i]['Tiemrest'] > 1){ 
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>Quedan '+res[i]['Tiemrest']+' dias restantes</div>';
        html += '<p><a href="/phpLuna/propuesta/nuevaColaboracion/'+res[i]['Nombre']+'" class="btn btn-primary btn-black">Colaborar!</a>'
      }
      if(res[i]['Tiemrest'] == 1){
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>Queda '+res[i]['Tiemrest']+' dia restante</div>';
        html += '<p><a href="/phpLuna/propuesta/nuevaColaboracion/'+res[i]['Nombre']+'" class="btn btn-primary btn-black">Colaborar!</a>'
      }
      if(res[i]['Tiemrest'] == 0){
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>La propuesta finalizara hoy</div>';
        html += '<p><a href="/phpLuna/propuesta/nuevaColaboracion/'+res[i]['Nombre']+'" class="btn btn-primary btn-black">Colaborar!</a>'
      }
      if(res[i]['Tiemrest'] < 0){
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>La propuesta esta finalizada</div>';
      }
         if(res[i]['UsuFav'] !== null){
          html += '<a class="btn estrella" onclick="favoritear(\''+res[i]['Nombre']+'\', /phpLuna/ ,\''+traeLog().replace(/^\s+|\s+$/gm,'')+'\');">';
          html += '<i class="fa fa-star" id="'+otroid+'"></i></a>';
        } 
        else{
          html += '<a class="btn estrella" onclick="favoritear(\''+res[i]['Nombre']+'\', /phpLuna/ ,\''+traeLog().replace(/^\s+|\s+$/gm,'')+'\');">';
          html += '<i class="fa fa-star-o" id="'+otroid+'"></i></a>';
        }       
        html += '</p>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        
      } 
      $('#propuestitas').html(html);
    }
  })

  }else{
$.ajax({
 
    url: urlList,
    data: 'p='+p+'&nombreCat='+nombreCat+'&nombreProp='+nombreProp,
    type: 'post',
    dataType: 'json', 
    success:function(res){
      var html='';
      for(var i=0; i<res.length; i++){
        let por = (res[i]['MontoActual'] * 100)/res[i]['Monto'];
        let porc = redondear(por, 3);
        let id = traeLog()+res[i]['Nombre'];
        let otroid = id.replace(/^\s+|\s+$/gm,'');
        html += '<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12" data-animate-effect="fadeIn">';
        html += '<div class="probootstrap-image-text-block probootstrap-cause">';
        html += '<figure class="imk"  width="360" height="200">';
        html += '<img src="./'+res[i]['Imagen']+'" alt="'+res[i]['Nombre']+'" class="img2">';
        html += '</figure>';
        html += '<div class="probootstrap-cause-inner">';
        html += '<div class="progress">';
        html += '<div class="progress-bar progress-bar-s2" data-percent="'+porc+'" style="width:'+porc+'%;"><span>'+porc+'%</span></div>';
        html += '</div>';
        html += '<div class="row mb30">';
        html += '<div class="col-md-6 col-sm-6 col-xs-6 probootstrap-raised">Monto actual: <span class="money">'+res[i]['MontoActual']+'</span></div>';
        html += '<div class="col-md-6 col-sm-6 col-xs-6 probootstrap-goal">Objetivo: <span class="money"> '+res[i]['Monto']+'</span></div>';
        html += '</div>';
        html += '<h2><a href="/phpLuna/propuesta/detalleProp/'+res[i]['Nombre']+'/">'+res[i]['Nombre']+'</a>';
       
        html += '</h2>';
        if(res[i]['Tiemrest'] > 1){ 
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>Quedan '+res[i]['Tiemrest']+' dias restantes</div>';
        html += '<p><a href="/phpLuna/propuesta/nuevaColaboracion/'+res[i]['Nombre']+'" class="btn btn-primary btn-black">Colaborar!</a>'
      }
      if(res[i]['Tiemrest'] == 1){
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>Queda '+res[i]['Tiemrest']+' dia restante</div>';
        html += '<p><a href="/phpLuna/propuesta/nuevaColaboracion/'+res[i]['Nombre']+'" class="btn btn-primary btn-black">Colaborar!</a>'
      }
      if(res[i]['Tiemrest'] == 0){
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>La propuesta finalizara hoy</div>';
        html += '<p><a href="/phpLuna/propuesta/nuevaColaboracion/'+res[i]['Nombre']+'" class="btn btn-primary btn-black">Colaborar!</a>'
      }
      if(res[i]['Tiemrest'] < 0){
        html += '<div class="probootstrap-date"><i class="fa fa-history"></i>La propuesta esta finalizada</div>';
      }
           if(res[i]['UsuFav'] !== null){
          html += '<a class="btn estrella" onclick="favoritear(\''+res[i]['Nombre']+'\', /phpLuna/ ,\''+traeLog().replace(/^\s+|\s+$/gm,'')+'\');">';
          html += '<i class="fa fa-star" id="'+otroid+'"></i></a>';
        } 
        else{
          html += '<a class="btn estrella" onclick="favoritear(\''+res[i]['Nombre']+'\', /phpLuna/ ,\''+traeLog().replace(/^\s+|\s+$/gm,'')+'\');">';
          html += '<i class="fa fa-star-o" id="'+otroid+'"></i></a>';
        }
        html += '</p>';        
        html += '</div>';
        html += '</div>';
        html += '</div>';
        
      }
      $('#propuestitas').html(html);
    }
  })

}
} 

function paginar(nombreCat,nombreProp){
  console.log(nombreCat + nombreProp);
  if(nombreCat == 'no'){
  $.ajax({
    url: '/phpLuna/propuesta/cantPag/',
    type: 'post',
    dataType: 'json',
    success:function(res){
      if(res == 1){
        $('#pagination').html("");
      }
      if(res > 1){
      let html = '';
      let no = 'no';
      html += '<ul class="pagination justify-content-center" style="margin:20px 0">';
      html += '<li class="page-item" id="ant"><a id="anta" class="page-link" onclick="anterior();">Anterior</a></li>';
      for(let i=1; i<=res; i++){
        html += '<li class="page-item" id="'+i+'"><a class="page-link" onclick="listarPropBien('+i+'); vuelve(); tomaval('+i+')">'+i+'</a></li>';
      }
      html += '<li class="page-item" id="sig"><a class="page-link" id="sigui" onclick="sig();">Siguiente</a></li>';
      html += '</ul>';
      $('#pagination').html(html);
    }
    if(res == 0){
      let html = '';
      html += '<div class="col-md-12 text-center">';
      html += '<h2 class="caca">Aún no hay propuestas </h2>'; 
      html += '</div>';
      $('#propuestitas').html(html);
    }
  }
  })
} else {
  $.ajax({
    url: '/phpLuna/propuesta/cantPag/',
    data: 'nombreCat='+nombreCat+'&nombreProp='+nombreProp,
    type: 'post',
    dataType: 'json',
    success:function(res){
      if(res == 1){
        $('#pagination').html("");
      }
      if(res > 1){
      let html = '';
      let no = 'no';
      html += '<ul class="pagination justify-content-center" style="margin:20px 0">';
      html += '<li class="page-item" id="antF"><a id="antaF" class="page-link" onclick="anteriorFilt(\''+nombreCat+'\',\''+nombreProp+'\');">Anterior</a></li>';
      for(let i=1; i<=res; i++){
        html += '<li class="page-item" id="'+i+'"><a class="page-link" onclick="listProp('+i+',\''+nombreCat+'\',\''+nombreProp+'\'); vuelve(); tomaval('+i+')">'+i+'</a></li>';
      }
      html += '<li class="page-item" id="sigF"><a class="page-link" id="siguiF" onclick="sigF(\''+nombreCat+'\',\''+nombreProp+'\');">Siguiente</a></li>';
      html += '</ul>';
      $('#pagination').html(html);
    }
    if(res == 0){
      let html = '';
      html += '<div class="col-md-12 text-center">';
      html += '<h2 class="caca">Aún no hay propuestas </h2>'; 
      html += '</div>';
      $('#propuestitas').html(html);
    }
  }
  })
}
}

function obtUltP(){
  let msg='';
   $.ajax({
    url: '/phpLuna/propuesta/cantPag/',
    type: 'post',
    async: false,
    success:function(res){
      msg=res.replace(/^\s+|\s+$/gm,'');;
    }
})
   return msg;
}

function vuelve(){
  $('html, body').animate({scrollTop:0}, 'slow');
}

function tomaval(p){
  let ultv = obtUltP();
  $('#pAct').val(p);
  if(p > 1){
    $('#ant').removeClass("disabled");
    $("#anta").attr("onclick","anterior();");
  } 
  if(p < ultv){
    $('#sig').removeClass("disabled");
    $("#sigui").attr("onclick","sig();");
  }
}

function valAct(){
  let v = $('#pAct').val();
  return v;
}

function sig(){
  let ult = obtUltP();
  let p = valAct();
  console.log(ult);
  console.log(p);
  if(ult > p){
    $('#sig').removeClass("disabled");
    $("#sigui").attr("onclick","sig();");
    let v = parseInt(p)+1;
    console.log(v);
    tomaval(v);
    listarPropBien(v);
  } else {
    $('#sig').addClass("disabled");
    $("#sigui").attr("onclick","void(0);");
  }
}

function sigF(cat, prop){
  let ult = obtUltP();
  let p = valAct();
  if(ult > p){
    $('#sigF').removeClass("disabled");
    $("#siguiF").attr("onclick","sigF('"+cat+"','"+prop+"');");
    let v = parseInt(p)+1;
    tomaval(v);
    listProp(v, cat, prop);
  } else {
    $('#sigF').addClass("disabled");
    $("#siguiF").attr("onclick","void(0);");
  }
}

function anteriorFilt(cat, prop){
  let v = valAct();
  if(v > 1){
    $('#antF').removeClass("disabled");
    $("#antaF").attr("onclick","anteriorF('"+cat+"','"+prop+"');");
    let p = v-1;
    tomaval(p);
    listProp(p, cat, prop);
  } else {
    $('#antF').addClass("disabled");
    $("#antaF").attr("onclick","void(0);");
  }
}

function anterior(){
  let v = valAct();
  if(v > 1){
    $('#ant').removeClass("disabled");
    $("#anta").attr("onclick","anterior();");
    let p = v-1;
    tomaval(p);
    listarPropBien(p);
  } else {
    $('#ant').addClass("disabled");
    $("#anta").attr("onclick","void(0);");
  }
}

function traeLog(){
   var msg = '';
  $.ajax({
    url:'/phpLuna/propuesta/traeLog/',
    async: false,
    type: 'post',
    success:function(res){
      msg = res;
    }
  })
  return msg;
}

function dioFav(prop){
  var msg = '';
  $.ajax({
    url:'/phpLuna/propuesta/dioFav/',
    data: 'prop='+prop,
    async: false,
    type: 'post',
    success:function(res){
      msg = res;
    }
  })
  return msg;
}

function listCom(nombre, url){
    console.log(nombre);
    console.log(url),
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
              html += '<div class="comment">';
              html+='<img src="'+img+'">';
              html+='<div class="comment-content"><p class="author"><strong>'+usu+'</strong></p>';
              html+='<span>'+texto+'</span></div>';
              if(usu === logue){
                html+='<a id="'+otroid+'" class="btn" onclick="borrarComentNuevo('+otroid+',\''+nombre+'\');"><i class="icon-trash"></i></a>';
              }
              html+='<a class="btn" onclick="likeComentario(\''+logue+'\','+otroid+');">';
              html+='<i class="fa fa-thumbs-up"></i> <span id="'+idL+'">'+likes+'</span></a></div>';
              html += '</div>';
              $('#coments').append(html);
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
       	console.log(idCom);
       	var nuevo = document.getElementById(idCom);
       	$.ajax({
              url: '/phpLuna/propuesta/borrarComEnPagina',
              data: 'idCom='+idCom+'&nomPropCom='+nomPropCom,
              type: 'post',
              success:function(){
                
                nuevo.parentNode.parentNode.removeChild(nuevo.parentNode);
              }
            })

          }


          function filtrarProp(url){
            var e = document.getElementById("elegirCate");
            var strUser = e.options[e.selectedIndex].value;
            textoBuscado = document.getElementById('xD').value;
           location.href=url+'propuesta/listadoBusqueda/'+textoBuscado+'/'+strUser+'/';
         // listProp(1,strUser,document.getElementById('xD').value)          
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
              
                
                element.parentNode.parentNode.removeChild(element.parentNode);
                //nuevo.parentNode.removeChild(nuevo);
              }
            })
       }


function likeComentario(usuario, idComent){
  if(usuario === null || usuario === ''){
    alert("No puedes dar like a un comentario sin estar logueado");
  }
  else {
$.ajax({
		url:"/phpLuna/propuesta/likeComentPagina",
		method: "POST",
		data:{nickUsu:usuario,
				idCom:idComent},
		//dataType:"text",
		success:function(valor){
			$("#"+usuario+idComent).html(valor);
			
		},
		error:function(){
			//document.getElementById("message1").style.display = "block";
		}
	});
}
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

$(document).ready(function(){
    $("#axD").on("click",function(e){
      e.preventDefault();
      Swal.fire({
  title: 'Cerrar Sesión',
  text: "Estás seguro?",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'¡Todavía no!',
  confirmButtonText: 'Estoy seguro'
}).then((result) => {
  if (result.value) {
    $.ajax({
    url:"/phpLuna/usuario/logout",
    type: 'post',
    success:function(html){
        window.location.replace(html);
     },
    error:function(){
    }
  });
  }
})   
    });
});

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

function validarLimite(){
  let limite = $('#limite').val();
  let monto = $('#monto').val();
  if(limite < 1){
    $('#limite').css("border", "3px solid red");
    $('#botoncito').hide();
    $('#limiteU').html("No puede ingresar numero menor o igual a 0 o dejar vacio el campo");
  } else {
    $('#limite').css("border", "3px solid green");
    $('#limiteU').html("");
  }
  if(monto > 0 && limite > 0){
    $('#botoncito').show();
  }
}

function validarMonto(){
  let monto = $('#monto').val();
  let limite = $('#limite').val();
  if(monto < 1){
    $('#monto').css("border", "3px solid red");
    $('#botoncito').hide();
    $('#montoS').html("No puede ingresar numero menor o igual a 0 o dejar vacio el campo");
  } else {
    $('#monto').css("border", "3px solid green");
    $('#montoS').html("");
  }
  if(monto > 0 && limite > 0){
    $('#botoncito').show();
  }
}
