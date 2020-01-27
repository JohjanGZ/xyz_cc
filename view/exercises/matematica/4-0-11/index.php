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

               
            <div class="ejercicio" style="font-weight: bold;font-size: 1.8rem!important;">
                    
                    <p>
                        <span>A = </span> { a, b, c, d, e, f }
                    </p>
                    <p>
                        <span>B = </span> { a, e, o }
                    </p>
                    <p>
                        <span>C = </span> { a, e, i, o, u }
                    </p>
                </div>
                <div class="ejercicio combinar">
                    
                    <p>
                        A <span>-</span> B = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b, m, n, p</option>
                                <option value="x">a, b, c, d, e, f</option>
                                <option value="n">b, c, d, f</option>
                                <option value="x">V Ø</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        B <span>-</span> C = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">a, e, o</option>
                                <option value="n">V Ø</option>
                                <option value="x">a, e, i, o, u</option>
                                <option value="x">b, c, d, f</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        A <span>-</span> C = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">a, e, o</option>
                                <option value="x">V Ø</option>
                                <option value="x">a, e, i, o, u</option>
                                <option value="n">b, c, d, f</option>
                            </select>
                        </span>
                        }
                    </p>
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
function result_tipo_4_0_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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