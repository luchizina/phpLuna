$(document).ready(function(){
    $("#btnPropVencen").on("click",function(e){
      e.preventDefault();
      Swal.fire({
  title: '¡Mandar correo!',
  text: "¿Estás seguro?",
  type: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'Mejor no',
  confirmButtonText: 'Dale'
}).then((result) => {
  if (result.value) {
    $.ajax({
    url:"/phpLuna/usuario/mandarPropsQueVencen",
    type: 'get',
    success:function(html){
        Swal.fire(
  'Correo enviado!',
  '¡Genial! Ahora los usuarios sabrán las propuestas que vencen',
  'success'
)
     },
    error:function(){
    }
  });
  }
})   
    });

});


function borrarUsu(nick, url_base){

      Swal.fire({
  title: '¡Borrar usuario!',
  text: "¿Estás seguro?",
  type: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'Mejor no',
  confirmButtonText: 'Dale'
}).then((result) => {
  if (result.value) {
    $.ajax({
    url: url_base+"usuario/borrarUsuario",
    type: 'post',
    data: "nick="+nick,
    success:function(html){
        window.location.replace(html);
    
     },
    error:function(){
    }
  });
  }
})   
   
}


function agregarColaboracion(url_base){

  let inputMonto = document.getElementById("monto").value;
  console.log(inputMonto);
  var propuesta = window.location.pathname;
  var array = propuesta.split('/');
        var nombre = array[4];
    Swal.fire({
  title: '¡Agregar colaboración!',
  text: "¿Estás seguro?",
  type: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'Mejor no',
  confirmButtonText: 'Dale'
}).then((result) => {
  if (result.value) {
    $.ajax({
    url: url_base+"propuesta/nuevaColaboracion",
    type: 'post',
    data: "monto="+inputMonto,
    success:function(html){
        window.location.replace(html);
    
     },
    error:function(){
    }
  });
  }
})   
}



async function modificarRecompensa(url_base, nombreRec, id, desc, monto, limUsus, nombreProp){



  const {value: formValues} = await Swal.fire({
  title: 'Modificar recompensa',
  html:
    'Nombre' +
    '<input id="swal-input1" class="swal2-input" value="'+nombreRec+'">' +
    'Descripción' +
    '<input id="swal-input2" class="swal2-input" value="'+desc+'">' +
    'Monto a superar' +
    '<input id="swal-input3" class="swal2-input" value='+monto+'>' +
     'Límite de usuarios' +
    '<input id="swal-input4" class="swal2-input" value='+limUsus+'>',
  focusConfirm: false,
  preConfirm: () => {
    return [
      document.getElementById('swal-input1').value,
      document.getElementById('swal-input2').value,
      document.getElementById('swal-input3').value,
      document.getElementById('swal-input4').value
    ]
  }
})

if (formValues) {
// Swal.fire(JSON.stringify(formValues[0]))
 let nombreR = formValues[0];
 let descripcion = formValues[1];
 let montoSuperar = formValues[2];
 let limiteUsus = formValues[3];

 $.ajax({
    url: url_base+"propuesta/modificarRecompensa",
    type: 'post',
    data: 'id='+id+'&nombreR='+nombreR+'&descripcion='+descripcion+'&monto='+montoSuperar+'&limiteUsu='+limiteUsus,
    success:function(html){

      let nombreTr = document.getElementById("nombre"+nombreRec);
      nombreTr.innerHTML = nombreR;
      nombreTr.id = "nombre"+nombreR;

      let montoTr = document.getElementById("monto"+nombreRec);
      montoTr.innerHTML = montoSuperar;
      montoTr.id = "monto"+nombreR;

      let botonMod = document.getElementById(id+nombreProp);
      botonMod.setAttribute("onclick","modificarRecompensa('"+url_base+"','"+nombreR+"',"+id+",'"+descripcion+"',"+montoSuperar+","+limiteUsus+",'"+nombreProp+"')");
  
          Swal.fire(
  'Recompensa modificada!',
  'La recompensa se actualizó con éxito, querido',
  'success'
)
    
     },
    error:function(){
    }
  });


  
}
}




function borrarRecompensa(url_base, id, nombreRec){

let tabla = event.target.parentElement.parentElement.parentElement;
let tupla = event.target.parentElement.parentElement;
   Swal.fire({
  title: '¡Borrar recompensa!',
  text: "¿Estás seguro?",
  type: 'question',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'Mejor no',
  confirmButtonText: 'Dale'
}).then((result) => {
  if (result.value) {


    $.ajax({
    url:url_base+"propuesta/borrarRecompensa",
    type: 'post',
    data: 'id='+id+'&nombreR='+nombreRec,
    success:function(html){
   tabla.removeChild(tupla);
        Swal.fire(
  'Recompensa eliminada!',
  'Has eliminado la recompensa',
  'success'
)
     },
    error:function(){
    }
  });
  }
})  

}



async function modificarCategoria(url_base, nombreCat){

const {value: formValues} = await Swal.fire({
  title: 'Modificar categoría',
  html:
    'Nombre' +
    '<input id="swal-input1" class="swal2-input" value="'+nombreCat+'">',
  focusConfirm: false,
  preConfirm: () => {
    return [
      document.getElementById('swal-input1').value
  
    ]
  }
})

if (formValues) {
// Swal.fire(JSON.stringify(formValues[0]))
 let nombreC = formValues[0];
 
 $.ajax({
    url: url_base+"propuesta/modificarCategoria",
    type: 'post',
    data: 'nombreC='+nombreC+'&nombreViejo='+nombreCat,
    success:function(html){
      console.log(html);

      let tdCat = document.getElementById("nombre"+nombreCat);
          tdCat.innerHTML = nombreC;
      let nombreTr = document.getElementById(nombreCat);
    
      tdCat.id = "nombre"+nombreC;    
      nombreTr.id = nombreC;

      nombreTr.setAttribute("onclick","modificarCategoria('"+url_base+"','"+nombreC+"')");
  
          Swal.fire(
  'Categoría modificada!',
  'La categoría se actualizó con éxito, querido',
  'success'
)
    
     },
    error:function(){
    }
  });


  
}




}