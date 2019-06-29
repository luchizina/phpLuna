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
        window.location.replace(html);
     },
    error:function(){
    }
  });
  }
})   
    });
});