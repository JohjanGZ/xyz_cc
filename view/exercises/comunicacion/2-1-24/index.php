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
                        <p>
                        Alertada por los gritos, la gente del pueblo dejó todo lo que estaba haciendo en ese momento y corrió a
                        <span class="palabra" alt="ayudar">
                            x
                        </span>
                       al pobre pastorcito que pedía
                        <span class="palabra" alt="auxilio">
                           x 
                        </span>
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <p>
                        Fue así que Pedro,
                        <span class="palabra" alt="arrepentido">
                            x
                        </span>
                        en lo más profundo de su ser, aprendió la lección y nunca más volvió a
                        <span class="palabra" alt="burlarse">
                            x
                        </span>
                        ni a
                        <span class="palabra" alt="mentir">
                            x
                        </span>
                        </p>
                    </div>
                </div>
                
                
                
           </div>

           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="ayudar">ayudar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="auxilio">auxilio</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="arrepentido">arrepentido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="burlarse">burlarse</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="mentir">mentir</h4>
                </li>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_2_1_24() {
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