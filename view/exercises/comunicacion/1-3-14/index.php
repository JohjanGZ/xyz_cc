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
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li id="obj1" >
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                            <div class="contenedor-personaje" alt="lula">
                            </div>
                        </div>
                    </li>
                    <li id="obj2" >
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                            <div class="contenedor-personaje" alt="seniora">
                            </div>
                        </div>
                    </li>
                    <li id="obj3" >
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                            <div class="contenedor-personaje" alt="ninio">
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="contenedor-silabas">
                    <li class="silabas">
                        <h4 class="pieza" alt="lula">Lula</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="seniora">Señora</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="ninio">Niño</h4>
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


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_3_14() {
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