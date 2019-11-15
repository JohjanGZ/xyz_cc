<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
    <div class="container-two">
        <div class="row">
            <div class="col l6">
                <ul class="contenedor-silabas">
                    <li class="silabas">
                        <h4 class="pieza" alt="kungfu">kung-fu</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="hace">hace</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="tambien">también</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="karateca">karateca</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="el">el</h4>
                    </li>
                </ul>
            </div>
            <div class="col l6">
                <div class="img-box">
                    <img src="<?= $dir ?>/img/1.png">
                </div>
            </div>
            
            <div class="col l12">
                <div class="contenedor-ejercicios">
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="el"></div>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="karateca"></div>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="tambien"></div>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="hace"></div>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="kungfu"></div>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_6_24() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
            localStorage.setItem("Nota<?=$cod?>", nota);
            localStorage.setItem("Time<?=$cod?>", tiempo);
            // console.log(r);
            correcto();
        } else {
            incorrecto();
            // console.log(r);
            localStorage.setItem("Nota<?=$cod?>", "0");
            localStorage.setItem("Time<?=$cod?>", tiempo);
        }

    }
</script>