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

            <div class="contenedor-ejercicios">
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <p>
                            Andar: <span class="palabra" alt="andar">x</span><span class="palabra" alt="andar">x</span> <br>
                            Depositar: <span class="palabra" alt="depositar">x</span><span class="palabra" alt="depositar">x</span> <br>
                            Sacar: <span class="palabra" alt="sacar">x</span><span class="palabra" alt="sacar">x</span> <br>
                            Limpiar: <span class="palabra" alt="limpiar">x</span><span class="palabra" alt="limpiar">x</span> <br>
                            Observar: <span class="palabra" alt="observar">x</span><span class="palabra" alt="observar">x</span> <br>
                        </p>

                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="andar">caminar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="andar">marchar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="depositar">poner</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="depositar">colocar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="sacar">extraer</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="sacar">retirar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="limpiar">lavar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="limpiar">asear</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="observar">contemplar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="observar">mirar</h4>
                </li>
            </ul>
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
function result_tipo_3_1_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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