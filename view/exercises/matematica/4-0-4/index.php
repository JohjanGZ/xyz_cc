<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 
    $letras = array('G','H','I','J','K','L','M','N');
    $letra  = array('A','B','C','D','E')
?>
<body>
    <div class="caja-principal">
        <div class="image">

        </div>
        <div class="problemas">
            <div class="content aleatori">
                <div class="item">
                    <img src="<?= $dir ?>/img/2.png">
                    <div class="options">
                        <div class="seleccion" alt="oo">V</div>
                        <div class="seleccion" alt="n">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/3.png">
                    <div class="options">
                        <div class="seleccion" alt="oo">V</div>
                        <div class="seleccion" alt="n">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/4.png">
                    <div class="options">
                        <div class="seleccion" alt="oo">V</div>
                        <div class="seleccion" alt="n">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/5.png">
                    <div class="options">
                        <div class="seleccion" alt="oo">V</div>
                        <div class="seleccion" alt="n">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/6.png">
                    <div class="options">
                        <div class="seleccion" alt="n">V</div>
                        <div class="seleccion" alt="oo">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/7.png">
                    <div class="options">
                        <div class="seleccion" alt="n">V</div>
                        <div class="seleccion" alt="oo">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/8.png">
                    <div class="options">
                        <div class="seleccion" alt="n">V</div>
                        <div class="seleccion" alt="oo">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/9.png">
                    <div class="options">
                        <div class="seleccion" alt="n">V</div>
                        <div class="seleccion" alt="oo">F</div>
                    </div>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/10.png">
                    <div class="options">
                        <div class="seleccion" alt="oo">V</div>
                        <div class="seleccion" alt="n">F</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar

function result_tipo_4_0_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>