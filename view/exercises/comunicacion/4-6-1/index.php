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
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s6 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s6"><a href="#test-swipe-2">Parte 2</a></li>
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">

                <div class="imagen-lectura">
                    <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                </div>

            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">

                <table>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="n">6</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Minutos antes de terminar el plazo previsto, el coordinador da por terminada la discusión y
                            expone las conclusiones haciendo un resumen final que sintetice los puntos de coincidencia
                            que pudieran permitir un acercamiento entre los diversos enfoques y las diferencias que
                            quedan después de la discusión.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Cada expositor hará uso de la palabra durante 10 minutos aproximadamente. El coordinador
                            cederá la palabra a los integrantes de la mesa redonda en forma sucesiva.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="n">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Para que cada expositor pueda aclarar sus argumentos y rebatir los opuestos, el coordinador
                            los invita a hablar nuevamente durante unos dos minutos cada uno. En esta etapa los
                            expositores pueden dialogar si lo desean defendiendo sus puntos de vista.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Una vez ubicados en el escenario los participantes, el coordinador da las palabras
                            iniciales, mencionando el tema a tratarse, explica el procedimiento a seguirse, hace la
                            presentación de los expositores, comunica al auditorio que podrán hacer preguntas al final,
                            y ofrece la palabra al primer expositor.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="n">5</option>
                                    <option value="x">6</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            El coordinador invita al auditorio a efectuar preguntas sobre las ideas expuestas. No se
                            establecerá discusión entre al auditorio y la mesa. Las personas del auditorio tendrán
                            derecho a una sola intervención.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Una vez finalizadas las exposiciones de todos los participantes, el coordinador hace un
                            breve resumen de las ideas principales de cada uno de ellos, y señala las diferencias más
                            notorias que se hayan planteado.
                        </td>
                    </tr>

                </table>

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
$(document).ready(function() {
    $('.tabs').tabs();
});

$(".tab").click(function() {
    $(this).addClass("activo");
});

// Validar
function result_tipo_4_6_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 6) {
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