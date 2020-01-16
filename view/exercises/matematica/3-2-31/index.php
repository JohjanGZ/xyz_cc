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
        <div class="grid-container">
            <div class="grid-item">
                <div class="item"><span>•</span> Al dividir 3 000 entre 42 obtengo como resultado 84.</div>
                <div class="item">
                    <div class="option">
                        <div class="seleccion"></div>
                        Verdadero
                    </div>
                    <div class="option">
                        <div class="seleccion" alt="n"></div>
                        Falso
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="item"><span>•</span> 908 entre 22 es igual a 41 con residuo 6.</div>
                <div class="item">
                    <div class="option">
                        <div class="seleccion" alt="n"></div>
                        Verdadero
                    </div>
                    <div class="option">
                        <div class="seleccion"></div>
                        Falso
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="item"><span>•</span> 745 entre 80 es 9 con residuo 25.</div>
                <div class="item">
                    <div class="option">
                        <div class="seleccion" alt="n"></div>
                        Verdadero
                    </div>
                    <div class="option">
                        <div class="seleccion"></div>
                        Falso
                    </div>
                </div>
            </div>

            <div class="grid-item">
                <div class="item"><span>•</span> El residuo que obtengo al dividir 1 217 entre 28 es 13.</div>
                <div class="item">
                    <div class="option">
                        <div class="seleccion" alt="n"></div>
                        Verdadero
                    </div>
                    <div class="option">
                        <div class="seleccion"></div>
                        Falso
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_2_31() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    if (r == 4) {
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>