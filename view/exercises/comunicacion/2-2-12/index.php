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

                <table class="tabla-sustantivos striped">

                    <thead>
                        <tr>

                            <th>Lugar</th>

                            <th>Persona</th>

                            <th>Cosa</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <div class="palabra" alt="lugar"></div>
                            </td>

                            <td>
                                <div class="palabra" alt="persona"></div>
                            </td>

                            <td>
                                <div class="palabra" alt="cosa"></div>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <div class="palabra" alt="lugar"></div>
                            </td>

                            <td>
                                <div class="palabra" alt="persona"></div>
                            </td>

                            <td>
                                <div class="palabra" alt="cosa"></div>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <div class="palabra" alt="lugar"></div>
                            </td>

                            <td>
                                <div class="palabra" alt="persona"></div>
                            </td>

                            <td>
                                <div class="palabra" alt="cosa"></div>
                            </td>

                        </tr>
                    </tbody>



                </table>

            </div>

            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="cosa">lápiz</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cosa">silla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cosa">tableta</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="persona">alumno</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="persona">doctor</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="persona">maestra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="lugar">parque</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="lugar">aula</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="lugar">oficina</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">bonita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">grande</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">rojo</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_2_12() {
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