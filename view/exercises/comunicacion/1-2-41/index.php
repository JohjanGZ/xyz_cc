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
        <div class="contenedor-ejercicio"> 
            <div class="contenedor-ejercicios">
                <div class="ejercicio">
                    <div class="ejercicio-img">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </div>
                    <div class="ejercicio-palabras">
                        <div class="palabra" alt="f">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-img">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>
                    <div class="ejercicio-palabras">
                        <div class="palabra" alt="f" fila="dos">
                            
                        </div>
                        <div class="palabra" alt="m" fila="dos">
                            
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-img">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </div>
                    <div class="ejercicio-palabras">
                        <div class="palabra" alt="f" fila="tres">
                            
                        </div>
                        <div class="palabra" alt="m" fila="tres">
                            
                        </div>
                        <div class="palabra" alt="f" fila="tres">
                            
                        </div>
                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="f">Juana</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="f">Ana</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="f">María</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="f">Rosa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="m">Juan</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="">Niño</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="">Familia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="">Baile</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="m">Pepe</h4>
                </li>
            </ul>
        </div>
 
      </div>
</div>

    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_2_41() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;
        console.log(r);
        if (r == 6) {
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