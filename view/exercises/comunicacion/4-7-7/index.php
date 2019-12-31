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
                    <h5 style="background-color: #14e668;color:white;width:55%;padding: 10px 0; font-weight:700;">
                        <span>•</span>  Tiempo de vacas flacas  
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion" alt="n">
                            <span>Se refiere a épocas de crisis económica</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Se refiere a aquellas vacas mal alimentadas</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Se refiere a tiempos donde no hay vacas</span>
                        </div>
                    </div>

                </div>
                
                <div class="oracion">
                    <h5 style="background-color: #14ace6;color:white;width:55%;padding: 10px 0; font-weight:700;">
                        <span>•</span>   Lo hago en un santiamén  
                    </h5>
                    <div class="contenedor-check">
                        
                        <div class="respuesta seleccion">
                            <span>Hacer algo muy difícil y demorar mucho</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Hacer algo en un instante</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>No poder cumplir con un compromiso</span>
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

function result_tipo_4_7_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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