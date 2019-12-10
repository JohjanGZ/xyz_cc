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
                                En&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                mi&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                cartera&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                tengo&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                lápiz&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                tajador&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                borrador&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                libro&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                y&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                cuaderno.
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ejercicio-item">
                    <img class="row-img" src="<?= $dir ?>/img/2.png" alt="">
                    <div class="contenedor-ejercicios">
                        <div class="letra letrax" alt="n">
                            <span>
                                Tengo&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                los&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                libros&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                de&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax" alt="n">
                            <span>
                                Inglés&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                Arte&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                y&nbsp;
                            </span>
                            <div class="guion">
                                <span>,</span>
                            </div>
                        </div>
                        <div class="letra letrax">
                            <span>
                                Ciencia.
                            </span>
                            <div class="guion">
                                <span>,</span>
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
function result_tipo_3_4_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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