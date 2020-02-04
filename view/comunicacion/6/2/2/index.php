<?php require ('../../head.php');?>
<link rel="stylesheet" type="text/css" href="css/force-lastcape.css">
<div id="vertical"></div>
<div id="contenedor">
    <?php
 	  require ('../../../../tools/sidenav/sidenav.php');
   require ('../../../../tools/sound/sound.php');
   require ('../../../../tools/crono/crono.php');
    require ('../../../../tools/pantalla-inicio/2do.php');   
 ?>
    <div style="transform: translate(0vw, -13vh);
    color: white;" id="resolucion"></div>
    <img class="logoUnidad"><script>$('.logoUnidad').attr("src","../../../../../img/unidades/"+unidad+".png");</script>

    <body scroll=no class="fnd">
        <div style="transform: translate(0vw, -11vh);
    color: white;" id="resolucion"></div>
        <div id="correcto" class="modal">
            <div class="modal-content">
                <center>
                    <h4>Respuesta correcta <i class="material-icons">sentiment_very_satisfied</i></h4>
                </center>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-close waves-effect waves-green btn-flat">Listo!</a>
            </div>
        </div>
        <div id="incorrecto" class="modal">
            <div class="modal-content">
                <center>
                    <h4>Respuesta Incorrecta <i class="material-icons">sentiment_very_dissatisfied</i></h4>
                </center>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
            </div>
        </div>
        <input type="hidden" name="" id="nota" value="0">
        <script>

        </script>

        <div id="ventana"></div>
        <?php require ('pagination.php');?>
        <script src="../../../../../js/materialize.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {


            $('#resolucion').html(window.innerWidth + " x " + window.innerHeight);
        });

        function IniciarCronometro() {
            $("#portada").css("display", "none");
            Page_4();

        }
        </script>
    </body>
</div>