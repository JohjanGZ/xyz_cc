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
                <div class="contenedor-img">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="M">
                            
                        </div>
                        <span>añana en la </span>
                        <div class="palabra" alt="t">
                            
                        </div>
                        <span>arde iremos al parque con mis </span>
                        <div class="palabra" alt="a">
                            
                        </div>
                        <span>migos</span>
                        <div class="palabra" alt="x">
                            
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="D">
                            
                        </div>
                        <span>espués, iremos a cenar</span>
                        <div class="palabra" alt="x">
                            
                        </div>
                       
                        
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="E">
                            
                        </div>
                        <span>stoy seguro que nos divertiremos</span>
                        <div class="palabra" alt="m">
                            
                        </div>
                        <span>ucho todos juntos.</span>
                    </div>
                </div>
                
                
           </div>

           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="M">M</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="t">t</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="a">a</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="D">D</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="E">E</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="m">m</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">.</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">.</h4>
                </li>
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
    function result_tipo_2_0_6() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 8) {
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