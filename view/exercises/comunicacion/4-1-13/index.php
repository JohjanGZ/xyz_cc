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
                            <span>Casa</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Canción</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Observar</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Ademán</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Avión</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Perro</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Vaso</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Diré</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Lápiz</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Vegetal</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Olvido</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Plato</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Calor</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Ratón</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Llorar</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Canon</span>
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


function result_tipo_4_1_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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