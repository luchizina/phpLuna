<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <title>{$proyecto}</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/imagenes.css" rel="stylesheet"> {include file="cabezal.tpl"}
</head>

<body>
    <section class="probootstrap-hero bg" data-stellar-background-ratio="0.1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12  col-md-12  main">
                    <br>
                    <h2 class="sub-header" style="color: #fff ; text-align: center;">{$titulo}</h2> {if $mensaje!=""}
                    <div class="alert alert-danger" role="alert">{$mensaje}</div>
                    {/if}
                    <form class="form-horizontal" enctype="multipart/form-data" method="post">
                        <fieldset style="color: #fff;">
                            <!-- Text input-->
                            <br>
                           
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="archivo"></label>
                                <div class="col-md-4">
                                    <div class="imgUp" style=" margin-left:150px; text-align: center;">
                                        <div class="imagePreview" style="background-image: url(./img/nodisp.jpg);"></div>
                                        <label  class="btn btn-primary btn-lg">Elegir imagen
                                            <input type="file" name="archivo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required="" accept="image/jpeg" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label" for="nombre">Nombre:</label>
                                <div class="col-md-4">
                                    <input id="nombre" name="nombre" type="text" placeholder="La vela en Pdú" class="form-control input-md" required="">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="desc">Descripción:</label>
                                <div class="col-md-4">
                                    <textarea id="desc" name="desc" type="text" placeholder="Esto es una descripcion de mi tarea" class="form-control input-md" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="monto">Monto</label>
                                <div class="col-md-4">
                                    <input id="monto" name="monto" type="number" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="monto">Categoria</label>
                                <div class="col-md-4">
                                    <select name="catego" class="dis">
                                        {foreach from=$categorias item=persona}
                                        <option value="{$persona->getNombreH()}">{$persona->getNombreH()|upper}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="fec">Fecha realización</label>
                                <div class="col-md-4">
                                    <input id="fec" name="fec" type="date" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="guardar"></label>
                                <div class="col-md-4">
                                    <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
                                </div>
                            </div>
                </div>
            </div>

            </fieldset>
            </form>
        </div>
        </div>
    </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/subirImg.js" type="text/javascript"></script>
</body>

</html>