<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">

            <div class="ejercicio">
                <div class="ejercicio-item">
                    <img class="row-img" src="<?= $dir ?>/img/1.png" alt="">
                    <div class="contenedor-ejercicios">
                        <div class="letra letrax">
                            <span>
                                H
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                O
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                J
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                A
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="ejercicio-item">
                    <img class="row-img" src="<?= $dir ?>/img/2.png" alt="">
                    <div class="contenedor-ejercicios">
                        <div class="letra letrax" alt="n">
                            <span>
                                E
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                L
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                E
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                F
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                A
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                N
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                T
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                E
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ejercicio-item">
                    <img class="row-img" src="<?= $dir ?>/img/3.png" alt="">
                    <div class="contenedor-ejercicios">
                        <div class="letra letrax" alt="n">
                            <span>
                                I
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                G
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                U
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                A
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                N
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                A
                            </span>
                            <div class="guion">
                                <span>-</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.jpg">
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
function result_tipo_3_0_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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