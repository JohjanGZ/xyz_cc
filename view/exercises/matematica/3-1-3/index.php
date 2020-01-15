<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numero = array('575','345','140','41','91','22','30','53','230','90','205','49','114','19','61') ?>

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
                        <div class="Grid-cell caja" alt="575"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="230"></div>
                        <div class="Grid-cell caja" alt="345"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="90"></div>
                        <div class="Grid-cell caja" alt="140"></div>
                        <div class="Grid-cell caja" alt="205"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="41"></div>
                        <div class="Grid-cell caja" alt="49"></div>
                        <div class="Grid-cell caja" alt="91"></div>
                        <div class="Grid-cell caja" alt="114"></div>
                    </div>
                    <div class="Grid">
                        <div class="Grid-cell caja" alt="22"></div>
                        <div class="Grid-cell caja" alt="19"></div>
                        <div class="Grid-cell caja" alt="30"></div>
                        <div class="Grid-cell caja" alt="61"></div>
                        <div class="Grid-cell caja" alt="53"></div>
                    </div>

                    <div class="Grid">
                        <div class="Grid-cell">12</div>
                        <div class="Grid-cell">10</div>
                        <div class="Grid-cell">9</div>
                        <div class="Grid-cell">21</div>
                        <div class="Grid-cell">40</div>
                        <div class="Grid-cell">13</div>
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
function result_tipo_3_1_3() {
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