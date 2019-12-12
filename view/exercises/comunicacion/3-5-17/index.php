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
                        <th>Tiempo</th>
                        <th>Número</th>
                        <th>Persona</th>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">subió</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="pasado"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="singular"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="tercera"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">sube</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="presente"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="singular"></span>
                        </td> 
                        <td>
                            <span class="respuesta" alt="tercera"></span>
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">manejaremos</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="futuro"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="plural"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="primera"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">visito</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="presente"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="singular"></span>
                        </td> 
                        <td>
                            <span class="respuesta" alt="primera"></span>
                        </td>  
                    </tr>
                   
                </table>

            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="pasado">
                    pasado
                </span>
                <span class="palabra pieza" alt="singular">
                    singular
                </span>
                <span class="palabra pieza" alt="tercera">
                    tercera
                </span>
                <span class="palabra pieza" alt="presente">
                    presente
                </span>
                <span class="palabra pieza" alt="singular">
                    singular
                </span>
                <span class="palabra pieza" alt="tercera">
                    tercera
                </span>
                <span class="palabra pieza" alt="futuro">
                    futuro
                </span>
                <span class="palabra pieza" alt="plural">
                    plural
                </span>
                <span class="palabra pieza" alt="primera">
                    primera
                </span>
                <span class="palabra pieza" alt="presente">
                    presente
                </span>
                <span class="palabra pieza" alt="singular">
                    singular
                </span>
                <span class="palabra pieza" alt="primera">
                    primera
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
function result_tipo_3_5_17() {
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