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

                    <div class="ejercicio-item" style="background-color:cornflowerblue;">

                        <div class="contenedor-texto">
                            <p>
                                Un flaco y hambriento cuervo se posó en una higuera y, al ver que los higos aún estaban
                                verdes, se quedó en el sitio a esperar a que maduraran. Vio una zorra al hambriento
                                cuervo eternizado en la hoguera, y le preguntó qué hacía. Una vez que lo supo, le dijo:
                                
                                ―Haces mal perdiendo el tiempo confiando en una lejana esperanza; la esperanza se llena
                                de bellas ilusiones, mas no de comida.

                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Lenguaje literario</option>
                                    <option value="x">Lenguaje no literario</option>
                                </select>
                            </span>
                        </div>
                    </div>

                    <div class="ejercicio-item" style="background-color:#99ed64;">

                        <div class="contenedor-texto">
                            <p>
                                Un país que busca figurar entre los destinos turísticos más importantes del mundo no
                                puede depender de un solo aeropuerto internacional, menos si ese país es tan grande como
                                el Perú y ese único aeropuerto es el congestionado Jorge Chávez de Lima, como lo afirma
                                el director de la Asociación de Hoteles de nuestra ciudad.

                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Lenguaje literario</option>
                                    <option value="n">Lenguaje no literario</option>
                                </select>
                            </span>
                        </div>
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
function result_tipo_5_0_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 2) {
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