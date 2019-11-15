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
                        <div class="palabra" alt="pra">

                        </div>
                        <span class="span-after">dera</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">a</span>
                        <div class="palabra" alt="pre">

                        </div>
                        <span class="span-after">nder</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="pru">

                        </div>
                        <span class="span-after">dencia</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">de</span>
                        <div class="palabra" alt="pre">

                        </div>
                        <span class="span-after">dador</span>

                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">im</span>
                        <div class="palabra" alt="pri">

                        </div>
                        <span class="span-after">mir</span>

                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="pru">

                        </div>
                        <span class="span-after">eba</span>

                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="pro">

                        </div>
                        <span class="span-after">hibido</span>

                    </div>
                </div>
                <div class="ejercicio">
                   
                   <div class="contenedor-respuesta">
                       <span class="span-before">a</span>
                       <div class="palabra" alt="pru">

                       </div>
                       <span class="span-after">eba</span>

                   </div>
               </div>
               <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="pro">

                        </div>
                        <span class="span-after">bador</span>

                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="pre">

                        </div>
                        <span class="span-after">so</span>

                    </div>
                </div>
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="pra">pra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pre">pre</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pru">pru</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pre">pre</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pri">pri</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pru">pru</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pro">pro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pru">pru</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pro">pro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pre">pre</h4>
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
    function result_tipo_1_7_30() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 10) {
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