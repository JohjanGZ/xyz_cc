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
                <div class="contenedor-oracion">
                    <span>des</span>
                    <div class="palabra" alt="plo">

                    </div>
                    <span>mar</span>                
                </div>
                <div class="contenedor-oracion">
                    <div class="palabra" alt="ple">

                    </div>
                    <span>gar</span>         
                </div>
                <div class="contenedor-oracion">
                    <span>ex</span>         
                    <div class="palabra" alt="plo">

                    </div>
                    <span>sivo</span>  
                </div>
                <div class="contenedor-oracion">
                    <span>pam</span>  
                    <div class="palabra" alt="pli">

                    </div>
                    <span>na</span>          
                </div>
                <div class="contenedor-oracion">
                    <div class="palabra" alt="pla">

                    </div>
                    <span>ta</span>         
                </div>
                
            </div>

            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="ple">ple</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="plo">plo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pli">pli</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pla">pla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="plo">plo</h4>
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
    function result_tipo_1_7_23() {
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