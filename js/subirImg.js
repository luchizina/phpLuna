  $(function() {
      $(document).on("change",".uploadFile", function()
      {
              var uploadFile = $(this);
          var files = !!this.files ? this.files : [];
          if (!files.length || !window.FileReader) return; 
          console.log(files[0].type);
          if (/^image/.test( files[0].type)){ 
              var reader = new FileReader(); 
              reader.readAsDataURL(files[0]); 
   
              reader.onloadend = function(){ 
  uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
              }
          }
        
      });
  });