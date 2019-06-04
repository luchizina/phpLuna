document.getElementById("from1").onsubmit = function (e) {
  e.preventDefault();
  Swal.fire({
    title: 'Sus datos seran modificados',
    text: "Aceptar para continuar",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar'
  }).then((result) => {
      if (result.value) {
        return true;
      } else {
        return false;
      }
    })
  }