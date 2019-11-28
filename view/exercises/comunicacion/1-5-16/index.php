<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
  <div class="container">
        <div class="row">
           <div class="contenedor-ejercicios">

                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">Celia va a cenar</span>
                        <div class="palabra">
                            <span>ceras</span>
                        </div>
                        <div class="palabra" alt="n">
                            <span>cerezas</span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">La farmacia tiene</span>
                        <div class="palabra" alt="n">
                            <span>medicinas</span>
                        </div>
                        <div class="palabra">
                            <span>médicas</span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">Ponte el cinturón en la</span>
                        <div class="palabra">
                            <span>cabeza</span>
                        </div>
                        <div class="palabra" alt="n">
                            <span>cintura</span>
                        </div>
                    </div>
                </div>
                
                
           </div>
        </div>
    </div>


    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.jpg">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_5_16() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 3) {
            localStorage.setItem("Nota<?=$cod?>", nota);
            localStorage.setItem("Time<?=$cod?>", tiempo);
            correcto();
        } else {
            incorrecto();
            localStorage.setItem("Nota<?=$cod?>", "0");
            localStorage.setItem("Time<?=$cod?>", tiempo);
        }

    }
</script>