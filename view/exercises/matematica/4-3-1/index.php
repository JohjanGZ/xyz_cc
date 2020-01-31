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

                <div class="numeros">

                    <span class=" numero">
                        5 741
                    </span>
                    <span class="seleccion numero" alt="n">
                        3 072
                    </span>
                    <span class="seleccion numero" alt="n">
                        6 018
                    </span>
                    <span class=" numero">
                        2 785
                    </span>
                    <span class=" numero">

                        7 129
                    </span>
                    <span class=" numero">
                        9 061
                    </span>
                    <span class="seleccion numero" alt="n">
                        2 854
                    </span>
                    

                </div>
                <div class="numeros">
                <span class="seleccion numero" alt="n">
                        9 172
                    </span>
                    <span class="seleccion numero" alt="n">
                        1 250
                    </span>
                    <span class=" numero">
                        3 023
                    </span>
                    <span class="seleccion numero" alt="n">
                        2 036
                    </span>
                    <span class=" numero">
                        8 723
                    </span>
                    <span class="seleccion numero" alt="n">
                        6 098
                    </span>
                    <span class="seleccion numero" alt="n">
                        4 750
                    </span>
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
function result_tipo_4_3_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    
    if (r == 8) {
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