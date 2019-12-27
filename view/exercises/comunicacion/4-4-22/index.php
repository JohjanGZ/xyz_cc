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
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td class="borde-azul">
                            <div class="contenedor palabra" alt="aracnidox">
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td class="borde-azul">
                            <div class="contenedor palabra" alt="vertebrados">
                                
                            </div>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td class="borde-azul aracnidos">
                            <div class="contenedor palabra" alt="aracnidos">
                                
                            </div>
                        </td>
                        <td>
                            <span class="linea-derecha">

                            </span>
                        </td>
                        <td>
                            <span class="linea-alto">

                            </span>
                            <span class="linea-derecha-medio">

                            </span>
                            <span class="linea-alto">

                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="borde-azul animales">
                            <div class="contenedor palabra" alt="animales">
                                
                            </div>
                        </td>
                        <td>
                            <span class="linea-derecha">

                            </span>
                        </td>
                        <td>
                            <span class="linea-alto">

                            </span>
                            <span class="linea-derecha-medio">

                            </span>
                            <span class="linea-alto">

                            </span>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <span class="linea-alto" style="height: 41px;">

                            </span>
                            <span class="linea-alto">

                            </span>
                        </td>
                        <td>

                        </td>
                        <td class="borde-azul">
                            <div class="contenedor palabra" alt="aracnidox">
                                
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td class="borde-azul">
                            <div class="contenedor palabra" alt="invertebrados">
                                
                            </div>
                        </td>
                        <td>
                            <span class="linea-derecha">

                            </span>
                        </td>
                        <td class="borde-azul animales">
                            <div class="contenedor palabra" alt="artropodos">
                                
                            </div>
                        </td>
                        <td>
                            <span class="linea-derecha">

                            </span>
                        </td>
                        <td>
                            <span class="linea-alto">

                            </span>
                            <span class="linea-derecha-medio">

                            </span>
                            <span class="linea-alto">

                            </span>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td class="borde-azul insectos">
                            <div class="contenedor palabra" alt="insectos">
                                
                            </div>
                        </td>
                        <td>
                            <span class="linea-derecha">

                            </span>
                        </td>
                        <td class="borde-azul">
                            <div class="contenedor palabra" alt="hormiga">
                                
                            
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                    </tr>
                </table>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="animales">Animales</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="vertebrados">Vertebrados</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aracnidox">Escarabajo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="artropodos">Artrópodos</h4>
                </li>

                <li class="silabas">
                    <h4 class="pieza" alt="invertebrados">Invertebrados</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="insectos">Insectos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="hormiga">Hormiga</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aracnidox">Araña</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aracnidos">Arácnidos</h4>
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
function result_tipo_4_4_22() {
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
        console.log(r);

        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>