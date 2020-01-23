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

            <div class="contenedor-ejercicio">
                <ul class="alfabeto" id="sortable">
                    <li id="1" class="palabra lista-item">
                        <span>El rey era arrogante y poco tolerante con los demás, hasta que un día su esposa le hizo reflexionar sobre el verdadero sentido de la autoridad.</span>
                    </li>
                    <li id="2" class="palabra lista-item">
                        <span>
                            Danielli y Angela llevaban bocaditos, ropa, mantas, etc, y cada domingo visitaban el pueblo para ayudar a los enfermos y a los más necesitados.
                        </span>
                    </li>
                    <li id="3" class="palabra lista-item">
                        <span>
                            El rey se acercó a su familia, y delante de los pobladores, les pidió perdón por no haberlas ayudado con la buena obra que hacian.
                        </span>
                    </li>
                    <li id="4" class="palabra lista-item">
                        <span>
                            El reinado fue poderoso y grande, pues todos los pobladores eran leales con el rey.
                        </span>
                    </li>
                </ul>
                
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

var r = 0;
var v = 1;

function result_tipo_4_0_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r) {
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