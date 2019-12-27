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
                            <span class="celeste">●</span>
                            La orquesta está formada por
                            <span class="palabra contenedor" alt="uno">x</span>, 
                            <span class="palabra contenedor" alt="uno">x</span>, 
                            <span class="palabra contenedor" alt="uno">x</span>y 
                            <span class="palabra contenedor" alt="uno">x</span>. 
                            
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Compramos
                            <span class="palabra contenedor" alt="dos">x</span>, 
                            <span class="palabra contenedor" alt="dos">x</span>, 
                            <span class="palabra contenedor" alt="dos">x</span>y 
                            <span class="palabra contenedor" alt="dos">x</span>  
                            para adornar.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Los animales de granja como
                            <span class="palabra contenedor" alt="tres">x</span>, 
                            <span class="palabra contenedor" alt="tres">x</span>, 
                            <span class="palabra contenedor" alt="tres">x</span>y 
                            <span class="palabra contenedor" alt="tres">x</span>
                            comen alfalfa.
                            
                        </p>
                       

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">soxofones</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">pianos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">trompetas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">violines</h4>
                </li>

                <li class="silabas">
                    <h4 class="pieza" alt="dos">jazmines</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">claveles</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">azucenas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">gladiolos</h4>
                </li>

                <li class="silabas">
                    <h4 class="pieza" alt="tres">caballos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">becerros</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">vacas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">asnos</h4>
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
function result_tipo_4_4_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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