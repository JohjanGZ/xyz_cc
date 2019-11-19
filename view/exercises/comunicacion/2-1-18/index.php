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

           <div class="contenedor-lectura">
                
               <div class="parrafo">
                   <p>
                   A un hombre muy rico se le enfermó su esposa. 
                    <div>
                        Punto aparte
                    </div> 

                    Cuando ella sintió que su fin estaba próximo,
                    llamó a su única hija ante su lecho y le dijo:
                    —Querida hija, sé piadosa y buena, así Dios
                    siempre te ayudará, yo te observaré desde el
                    cielo y velaré por ti. 
                    Punto seguido

                    En seguida cerró los ojos y expiró. 
                   </p>
               </div>
               <div class="parrafo">
                    <p>
                   A un hombre muy rico se le enfermó su esposa. 
                    Punto aparte

                    Cuando ella sintió que su fin estaba próximo,
                    llamó a su única hija ante su lecho y le dijo:
                    —Querida hija, sé piadosa y buena, así Dios
                    siempre te ayudará, yo te observaré desde el
                    cielo y velaré por ti. 
                    Punto seguido

                    En seguida cerró los ojos y expiró. 
                   </p>
               </div>
               <div class="parrafo">
                    <p>
                   A un hombre muy rico se le enfermó su esposa. 
                    Punto aparte

                    Cuando ella sintió que su fin estaba próximo,
                    llamó a su única hija ante su lecho y le dijo:
                    —Querida hija, sé piadosa y buena, así Dios
                    siempre te ayudará, yo te observaré desde el
                    cielo y velaré por ti. 
                    Punto seguido

                    En seguida cerró los ojos y expiró. 
                   </p>
               </div>
                
           </div>

           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="final">Punto final</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="seguido">Punto seguido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aparte">Punto aparte</h4>
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
    function result_tipo_2_1_17() {
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