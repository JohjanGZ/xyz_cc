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

                <table>
                    <tr>
                        <td class="azul">
                            <span class="" alt="presente">Termina en vocal</span>
                        </td>
                        <td>
                            <span class="respuesta contenedor" alt="vocal"></span> <br>
                            <span class="respuesta contenedor" alt="vocal"></span>

                        </td>
                        <td>
                        <span class="respuesta contenedor" alt="vocal"></span> <br>
                            <span class="respuesta contenedor" alt="vocal"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span class="" alt="presente">Termina en n- o s-</span>
                        </td>
                        <td>
                        <span class="respuesta contenedor" alt="ns"></span> <br>
                            <span class="respuesta contenedor" alt="ns"></span>
                        </td>
                        <td>
                        <span class="respuesta contenedor" alt="ns"></span> <br>
                            <span class="respuesta contenedor" alt="ns"></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span class="" alt="presente">Termina en consonante <br> diferente  de n- o s-</span>
                        </td>
                        <td>
                        <span class="respuesta contenedor" alt="consonante"></span> <br>
                            <span class="respuesta contenedor" alt="consonante"></span>
                        </td>
                        <td>
                        <span class="respuesta contenedor" alt="consonante"></span> <br>
                            <span class="respuesta contenedor" alt="consonante"></span>
                        </td>
                    </tr>
                  

                </table>

            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="vocal">
                    escribí
                </span>
                <span class="palabra pieza" alt="vocal">
                    menú
                </span>
                <span class="palabra pieza" alt="vocal">
                    Alcalá
                </span>
                <span class="palabra pieza" alt="vocal">
                    colibrí
                </span>

                <span class="palabra pieza" alt="ns">
                    Asunción
                </span>
                <span class="palabra pieza" alt="ns">
                    León
                </span>
                <span class="palabra pieza" alt="ns">
                    Acabarás
                </span>
                <span class="palabra pieza" alt="ns">
                    París
                </span>

                <span class="palabra pieza" alt="consonante">
                    Canal
                </span>
                <span class="palabra pieza" alt="consonante">
                    Localidad
                </span>
                <span class="palabra pieza" alt="consonante">
                    Feroz
                </span>
                <span class="palabra pieza" alt="consonante">
                    Calentador
                </span>
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
function result_tipo_4_1_16() {
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