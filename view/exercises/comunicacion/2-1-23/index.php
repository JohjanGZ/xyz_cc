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
            <h4><span></span> </h4>

            <div class="row recibidor" id="recibidor">
                <div class="col s12 m6 l4 xl6">
                    <div class="contenedor-elemento f-right ce-uno">
                        <label class="title">1</label>
                        <div class="contenedorPieza" id="uA"></div>
                    </div>
                </div>
                <div class="col s12 m6 l4 xl6">
                    <div class="contenedor-elemento ce-dos">
                        <label class="title">2</label>
                        <div class="contenedorPieza" id="dE"></div>
                    </div>

                </div>
                <div class="col s12 m6 l4 xl6">
                    <div class="contenedor-elemento ce-tres">
                        <label class="title">3</label>
                        <div class="contenedorPieza" id="tI"></div>
                    </div>

                </div>
               
            </div>
            <div id="contenedorPiezas">
                <ul id="listA">
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img img-x" id="vE" src="<?= $dir ?>/img/2.png" alt="pieza2">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img img-x" id="vI" src="<?= $dir ?>/img/3.png" alt="pieza3">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img img-x" id="vA" src="<?= $dir ?>/img/1.png" alt="pieza1">
                        </div>
                    </li>
                </ul>
            </div>

            
        </div>
    </div>

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
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

// Validar

function result_tipo_2_1_23() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;


    if (nA == 1 && nE == 1 && nI == 1){
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

};
</script>