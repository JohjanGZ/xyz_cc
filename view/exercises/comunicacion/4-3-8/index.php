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
                            <span class="pieza silaba" alt="ti">TI</span>
                            <span class="pieza silaba" alt="ver">VÉR</span> 
                            <span class="pieza silaba" alt="ce">CE</span>
                            <span style="font-weight: bold;font-size: 3rem;">
                            →
                            </span> 
                            <span class="palabra contenedor" alt="ver">x</span>
                            <span class="palabra contenedor" alt="ti">x</span>
                            <span class="palabra contenedor" alt="ce">x</span>

                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="pieza silaba" alt="co">CO</span>
                            <span class="pieza silaba" alt="pi">PI</span> 
                            <span class="pieza silaba" alt="ti">TÍ</span> 
                            <span style="font-weight: bold;font-size: 3rem;">
                            →
                            </span> 
                            <span class="palabra contenedor" alt="ti">x</span>
                            <span class="palabra contenedor" alt="pi">x</span>
                            <span class="palabra contenedor" alt="co">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="pieza silaba" alt="lu">LU</span>
                            <span class="pieza silaba" alt="ce">CÉ</span> 
                            <span class="pieza silaba" alt="la">LA</span>
                            <span style="font-weight: bold;font-size: 3rem;">
                            →
                            </span> 
                            <span class="palabra contenedor" alt="ce">x</span>
                            <span class="palabra contenedor" alt="lu">x</span>
                            <span class="palabra contenedor" alt="la">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="pieza silaba" alt="la">LA</span>
                            <span class="pieza silaba" alt="bu">BU</span> 
                            <span class="pieza silaba" alt="fa">FÁ</span>
                            <span style="font-weight: bold;font-size: 3rem;">
                            →
                            </span> 
                            <span class="palabra contenedor" alt="fa">x</span>
                            <span class="palabra contenedor" alt="bu">x</span>
                            <span class="palabra contenedor" alt="la">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="pieza silaba" alt="ca">CA</span>
                            <span class="pieza silaba" alt="mi">MI</span> 
                            <span class="pieza silaba" alt="qui">QUÍ</span>
                            <span style="font-weight: bold;font-size: 3rem;">
                            →
                            </span> 
                            <span class="palabra contenedor" alt="qui">x</span>
                            <span class="palabra contenedor" alt="mi">x</span>
                            <span class="palabra contenedor" alt="ca">x</span>
                        </p>

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
function result_tipo_4_3_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 15) {
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