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
                        <th>Palabra</th>
                        <th>Sinónimo</th>
                        <th>Antónimo</th>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Preso</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="preso-s"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="preso-a"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Amor</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="amor-s"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="amor-a"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Alegría</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="alegria-s"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="alegria-a"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Victoria</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="victoria-s"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="victoria-a"></span>
                        </td>   
                    </tr>
                   
                </table>

            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="preso-s">
                    recluso
                </span>
                <span class="palabra pieza" alt="preso-a">
                    libre
                </span>
                <span class="palabra pieza" alt="amor-s">
                    cariño
                </span>
                <span class="palabra pieza" alt="amor-a">
                    odio
                </span>
                <span class="palabra pieza" alt="alegria-s">
                    regocijo
                </span>
                <span class="palabra pieza" alt="alegria-a">
                    tristeza
                </span>
                <span class="palabra pieza" alt="victoria-s">
                    triunfo
                </span>
                <span class="palabra pieza" alt="victoria-a">
                    derrota
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
function result_tipo_3_1_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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