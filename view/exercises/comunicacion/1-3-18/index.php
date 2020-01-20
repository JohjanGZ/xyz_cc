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
            <div id="contenedorPiezas">
                <ul id="listA">
                    <li><div class="box pieza" id="v1"><span>león</span></div></li>
                    <li><div class="box pieza" id="v2"><span>tigre</span></div></li>
                    <li><div class="box pieza" id="v3"><span>oso</span></div></li>
                    <li><div class="box pieza" id="v4"><span>canguro</span></div></li>
                    <li><div class="box pieza" id="v5"><span>lobo</span></div></li>
                    <li><div class="box pieza" id="v6"><span>elefante</span></div></li>
                    <li><div class="box pieza" id="v7"><span>pantera</span></div></li>
                    <li><div class="box pieza" id="v8"><span>hiena</span></div></li>
                    <li><div class="box pieza" id="v9"><span>jirafa</span></div></li>
                    <li><div class="box pieza" id="v10"><span>águila</span></div></li>
                    <li><div class="box pieza" id="v12"><span>iguana</span></div></li>
                    <li><div class="box pieza" id="v12"><span>cebra</span></div></li>
                </ul>
            </div>
            <div class="row recibidor" id="recibidor">
                <div class="caja-flex">
                    <div class="contenedorPieza" id="masculino">
                        <label class="title">Masculino</label>
                    </div>
                    <div class="contenedorPieza" id="femenino">
                        <label class="title">Femenino</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
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

    function result_tipo_1_3_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (nM == 6 && nF == 6) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
        console.log(nM);
        console.log(nF);
    } else {
        incorrecto();
        console.log(nM);
        console.log(nF);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}

</script>