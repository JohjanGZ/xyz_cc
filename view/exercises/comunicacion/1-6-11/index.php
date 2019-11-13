<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    <div class="container-two">
        <div class="row">
            <div class="col l12">
                <div class="campo">
                    <div class="tren1"></div>
                    <div class="tren2"></div>
                </div>
            </div>
            <div class="col l12">
                <div class="ordenar-palabra">
                    <div class="box-palabra">
                        <span>7 - 4 - 6</span>
                        <div class="palabra">
                            <div class="p" alt="pes"></div>
                            <div class="p" alt="ta"></div>
                            <div class="p" alt="ña"></div>
                        </div>
                    </div>
                    <div class="box-palabra">
                        <span>2 - 6 - 9</span>
                        <div class="palabra">
                            <div class="p" alt="ma"></div>
                            <div class="p" alt="ña"></div>
                            <div class="p" alt="na"></div>
                        </div>
                    </div>
                    <div class="box-palabra">
                        <span>8 - 5 - 3</span>
                        <div class="palabra">
                            <div class="p" alt="al"></div>
                            <div class="p" alt="ba"></div>
                            <div class="p" alt="ñil"></div>
                        </div>
                    </div>
                    <div class="box-palabra">
                        <span>1 - 4 - 6</span>
                        <div class="palabra">
                            <div class="p" alt="mon"></div>
                            <div class="p" alt="ta"></div>
                            <div class="p" alt="ña"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_6_11() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 12) {
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