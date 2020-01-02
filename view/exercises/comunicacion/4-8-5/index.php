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

            <div class="contenedor-oraciones">

                <div class="oracion">
                    <h5>
                        <span>•</span> Mi mamá debe darme <b>algo</b> para pagar el recibo.
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta seleccion">
                            <span>monedas</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>beneficios</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>plata</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>dinero</span>
                        </div>
                    </div>

                </div>
                
                <div class="oracion">
                    <h5>
                        <span>•</span> Mi abuelito aún <b>tiene</b> la corbata que le regalé.
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta seleccion">
                            <span>regala</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>cubre</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>observa</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>conserva</span>
                        </div>
                    </div>

                </div>  
                <div class="oracion">
                    <h5>
                        <span>•</span> El deportista <b>tuvo</b> el éxito gracias a su esfuerzo.
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta seleccion">
                            <span>generó</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>logró</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>produjo</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>complementó</span>
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

var r = 0;

function result_tipo_4_8_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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