<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="grid-tabla">
            <div class="grid-container">
                <p>46,505 + 4,89 + 17,567</p>
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item total" alt="4"></div>
                    <div class="grid-item total coma" alt="6"></div>
                    <div class="grid-item total" alt="5"></div>
                    <div class="grid-item total" alt="0"></div>
                    <div class="grid-item total" alt="5"></div>

                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item total coma" alt="4"></div>
                    <div class="grid-item total" alt="8"></div>
                    <div class="grid-item total" alt="9"></div>
                    <div class="grid-item total" alt="0"></div>

                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item total" alt="1"></div>
                    <div class="grid-item total coma" alt="7"></div>
                    <div class="grid-item total" alt="5"></div>
                    <div class="grid-item total" alt="6"></div>
                    <div class="grid-item total" alt="7"></div>
                </div>
                <div class="grid-item xxs">
                    <div class="grid-item" alt=""></div>
                    <div class="grid-item" alt=""></div>
                    <div class="grid-item total" alt="6"></div>
                    <div class="grid-item total coma" alt="8"></div>
                    <div class="grid-item total" alt="9"></div>
                    <div class="grid-item total" alt="6"></div>
                    <div class="grid-item total" alt="2"></div>
                </div>
            </div>

            <div class="grid-container">
            <p>99,395 + 13,987 + 0,4321</p>
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item"></div>
                    <div class="grid-item total" alt="9"></div>
                    <div class="grid-item total coma" alt="9"></div>
                    <div class="grid-item total" alt="3"></div>
                    <div class="grid-item total" alt="9"></div>
                    <div class="grid-item total" alt="5"></div>
                    <div class="grid-item total" alt="0"></div>

                    <div class="grid-item"></div>
                    <div class="grid-item total" alt="1"></div>
                    <div class="grid-item total coma" alt="3"></div>
                    <div class="grid-item total" alt="9"></div>
                    <div class="grid-item total" alt="8"></div>
                    <div class="grid-item total" alt="7"></div>
                    <div class="grid-item total" alt="0"></div>

                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item total coma" alt="0"></div>
                    <div class="grid-item total" alt="4"></div>
                    <div class="grid-item total" alt="3"></div>
                    <div class="grid-item total" alt="2"></div>
                    <div class="grid-item total" alt="1"></div>
                </div>
                <div class="grid-item xxs">
                    <div class="grid-item total" alt="1"></div>
                    <div class="grid-item total" alt="1"></div>
                    <div class="grid-item total coma" alt="3"></div>
                    <div class="grid-item total" alt="8"></div>
                    <div class="grid-item total" alt="1"></div>
                    <div class="grid-item total" alt="4"></div>
                    <div class="grid-item total" alt="1"></div>
                </div>
            </div>

            <div class="grid-container">
            <p>93,828 + 2,491 + 35,221</p>
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item total" alt="9"></div>
                    <div class="grid-item total coma" alt="3"></div>
                    <div class="grid-item total" alt="8"></div>
                    <div class="grid-item total" alt="2"></div>
                    <div class="grid-item total" alt="8"></div>

                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item total coma" alt="2"></div>
                    <div class="grid-item total" alt="4"></div>
                    <div class="grid-item total" alt="9"></div>
                    <div class="grid-item total" alt="1"></div>

                    <div class="grid-item"></div>
                    <div class="grid-item"></div>
                    <div class="grid-item total" alt="3"></div>
                    <div class="grid-item total coma" alt="5"></div>
                    <div class="grid-item total" alt="2"></div>
                    <div class="grid-item total" alt="2"></div>
                    <div class="grid-item total" alt="1"></div>
                </div>
                <div class="grid-item xxs">
                    <div class="grid-item" alt=""></div>
                    <div class="grid-item total" alt="1"></div>
                    <div class="grid-item total" alt="3"></div>
                    <div class="grid-item total coma" alt="1"></div>
                    <div class="grid-item total" alt="5"></div>
                    <div class="grid-item total" alt="4"></div>
                    <div class="grid-item total" alt="0"></div>
                </div>
            </div>
        </div>
        <div id="numeros"></div>
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
function result_tipo_4_4_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 63) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>