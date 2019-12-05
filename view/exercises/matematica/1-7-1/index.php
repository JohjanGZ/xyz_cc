<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numero = array('1', '3', '5','7', '9', '11','13', '15', '17','19', '21', '23') ?>

<body>

    <div class="container-two">
        <div class="row">
            <div class="col s4">
                <div class="pregunta">
                    <p class="text"><span class="tl">1.</span>Una mariquita se reunió con sus hermanas. Al recorrer su
                        camino,
                        descansó en los lugares
                        donde encontró un número impar. <span class="tl">Arrastra</span> los números y <span
                            class="tl">ubícalos</span> en los lugares donde descansó.</p>

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
                    <div class="grid-container">
                        <div class="grid-item"><img src="<?=$dir?>/img/1.png" class="img"></div>
                        <div class="grid-item b caja" alt="1"></div>
                        <div class="grid-item b">2</div>
                        <div class="grid-item b caja" alt="3"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>

                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item b">4</div>
                        <div class="grid-item b caja" alt="5"></div>
                        <div class="grid-item b">6</div>
                        <div class="grid-item b caja" alt="7"></div>

                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item b">8</div>

                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item b caja" alt="13"></div>
                        <div class="grid-item b">12</div>
                        <div class="grid-item b caja" alt="11"></div>
                        <div class="grid-item b">10</div>
                        <div class="grid-item b caja" alt="9"></div>

                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item b">14</div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>

                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item b caja" alt="15"></div>
                        <div class="grid-item b">16</div>
                        <div class="grid-item b caja" alt="17"></div>
                        <div class="grid-item b">18</div>
                        <div class="grid-item b caja" alt="19"></div>

                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item b">20</div>

                        <div class="grid-item"></div>
                        <div class="grid-item"><img src="<?=$dir?>/img/2.png" class="img"></div>
                        <div class="grid-item"></div>
                        <div class="grid-item b">24</div>
                        <div class="grid-item b caja" alt="23"></div>
                        <div class="grid-item b">22</div>
                        <div class="grid-item b caja" alt="21"></div>
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
function result_tipo_1_7_1() {
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