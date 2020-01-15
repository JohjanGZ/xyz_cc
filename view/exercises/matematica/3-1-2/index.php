<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numero = array('476','238','110','77','59','49','23','33','238','128','128','51','69','28','36') ?>

<body>

    <div class="container-two">
        <div class="row">
            <div class="col s4">
                <div class="pregunta">
                    <div class="grid-options">
                        <?php for ($i=0; $i < count($numero); $i++) { ?>
                        <div class="grid-option pieza" alt="<?=$numero[$i]?>">
                            <?=$numero[$i]?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col s8">
                <div class="respuesta">
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="476"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="238"></div>
                        <div class="Grid-cell caja" alt="238"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="128"></div>
                        <div class="Grid-cell caja" alt="110"></div>
                        <div class="Grid-cell caja" alt="128"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="77"></div>
                        <div class="Grid-cell caja" alt="51"></div>
                        <div class="Grid-cell caja" alt="59"></div>
                        <div class="Grid-cell caja" alt="69"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="49"></div>
                        <div class="Grid-cell caja" alt="28"></div>
                        <div class="Grid-cell caja" alt="23"></div>
                        <div class="Grid-cell caja" alt="36"></div>
                        <div class="Grid-cell caja" alt="33"></div>
                    </div>

                    <div class="Grid">
                        <div class="Grid-cell">32</div>
                        <div class="Grid-cell">17</div>
                        <div class="Grid-cell">11</div>
                        <div class="Grid-cell">12</div>
                        <div class="Grid-cell">24</div>
                        <div class="Grid-cell">9</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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
function result_tipo_3_1_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 15) {
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