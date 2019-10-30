<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    <div class="caja-principal">
        <div class="center">
            <div class="row recibidor" id="recibidor">
                <div class="col s12 m6 l2 xl2">
                    <label class="title">A</label>
                    <div class="contenedorPieza" id="uA"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">E</label>
                    <div class="contenedorPieza" id="dE"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">I</label>
                    <div class="contenedorPieza" id="tI"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">O</label>
                    <div class="contenedorPieza" id="cO"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">U</label>
                    <div class="contenedorPieza" id="cU"></div>
                </div>
            </div>
            <div id="contenedorPiezas">
                <ul id="listA">
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vA" src="<?= $dir ?>/img/2.png" alt="pieza1">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vE" src="<?= $dir ?>/img/3.png" alt="pieza2">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vO" src="<?= $dir ?>/img/4.png" alt="pieza3">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vO" src="<?= $dir ?>/img/5.png" alt="pieza4">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vU" src="<?= $dir ?>/img/6.png" alt="pieza5">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vA" src="<?= $dir ?>/img/7.png" alt="pieza6">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vO" src="<?= $dir ?>/img/8.png" alt="pieza7">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vA" src="<?= $dir ?>/img/9.png" alt="pieza8">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="caballo pieza responsive-img" id="vE" src="<?= $dir ?>/img/10.png" alt="pieza9">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="caballo pieza responsive-img" id="vI" src="<?= $dir ?>/img/11.png" alt="pieza10">
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
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

    function result_tipo_1_0_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (nA == 3 && nE == 2 && nI == 1 && nO == 3 && nU == 1) {
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