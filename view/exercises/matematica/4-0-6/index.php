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
                    <p>
                        P = { dígitos pares del número 390 }
                    </p>
                    <p>
                        (
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">V</option>
                                <option value="x">U</option>
                            </select>
                        </span>
                        )
                    </p>
                </div>
                <div class="ejercicio">
                    <p>
                        Q = { vocales débiles de la palabra <span>pie</span> }
                    </p>
                    <p>
                        (
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">V</option>
                                <option value="n">U</option>
                            </select>
                        </span>
                        )
                    </p>
                </div>
                <div class="ejercicio">
                    <p>
                        R = { números naturales entre 98 y 100 }
                    </p>
                    <p>
                        (
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">V</option>
                                <option value="n">U</option>
                            </select>
                        </span>
                        )
                    </p>
                </div>
                <div class="ejercicio">
                    <p>
                        S = { números de tres cifras cuya suma de ellas sea mayor que 28 }
                    </p>
                    <p>
                        (
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">V</option>
                                <option value="x">U</option>
                            </select>
                        </span>
                        )
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
function result_tipo_4_0_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

    if (r == 4) {
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