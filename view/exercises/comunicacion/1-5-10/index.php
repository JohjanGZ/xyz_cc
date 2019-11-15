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
                        <span class="span-before">El masajista da un</span>
                        <div class="palabra" alt="masaje">

                        </div>
                        <span class="span-after">.</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">Escoge un</span>
                        <div class="palabra" alt="juguete">

                        </div>
                        <span class="span-after">para jugar.</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">La hierba está en el</span>
                        <div class="palabra" alt="jardin">

                        </div>
                        <span class="span-after">.</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">El</span>
                        <div class="palabra" alt="joven">

                        </div>
                        <span class="span-after">estudia.</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">El</span>
                        <div class="palabra" alt="jarron">

                        </div>
                        <span class="span-after">se rompió.</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">El</span>
                        <div class="palabra" alt="pasajero">

                        </div>
                        <span class="span-after">subió al avión.</span>
                    </div>
                </div>
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="masaje">masaje</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="juguete">juguete</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="jardin">jardín</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="joven">joven</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="jarron">jarrón</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pasajero">pasajero</h4>
                </li>
            </ul>
           
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
    function result_tipo_1_5_10() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

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