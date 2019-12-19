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
                    
                    <div class="contenedor-check">
                        
                        
                        <div class="respuesta seleccion">
                            <span>Avaro</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Cafe</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Taza</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Calcetin</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Fobia</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Leon</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Calendario</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Cuaderno</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Hotel</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Anis</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Olvido</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Plato</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Raton</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Ejecucion</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Cancion</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Tarjeta</span>
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


function result_tipo_4_1_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 7) {
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