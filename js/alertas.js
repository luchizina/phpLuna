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