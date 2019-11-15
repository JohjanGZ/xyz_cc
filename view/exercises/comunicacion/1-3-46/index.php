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
                <img class="img-ejercicio" src="<?= $dir ?>/img/1.png" alt="">

                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">Ese</span>
                        <div class="palabra" alt="perro">

                        </div>
                        <span class="span-after">es rápido.</span>

                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">La</span>
                        <div class="palabra" alt="jarra">

                        </div>
                        <span class="span-after">tiene jugo.</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">Me gusta mi</span>
                        <div class="palabra" alt="carro">

                        </div>
                        <span class="span-after">nuevo.</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">Yo me pongo una</span>
                        <div class="palabra" alt="gorra">

                        </div>
                        <span class="span-after">verde.</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">El</span>
                        <div class="palabra" alt="zorro">

                        </div>
                        <span class="span-after">vive en el bosque.</span>
                    </div>
                </div>
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="perro">perro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="jarra">jarra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="carro">carro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gorra">gorra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="zorro">zorro</h4>
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
    function result_tipo_1_3_46() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
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