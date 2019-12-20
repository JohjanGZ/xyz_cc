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

            <div class="contenedor-ejercicio">
                <div class="lectura">
                    <h4>
                    El bastón
                    </h4>
                    <p>
                        El cangrejo más viejito <br>
                        camina con un bastón <br>
                        sobre la arena mojada, <br>
                        sobre la sed que da el sol.
                    </p>
                    <p>
                        Se sostiene una rodilla <br>
                        y camina con un son <br>
                        disparejo y cansadito, <br>
                        como el de su corazón.
                    </p>
                    <p>
                        Dicen que el viejo cangrejo, <br>
                        antes, tocaba el tambor <br>
                        para avisar a los peces <br>
                        si venía un pescador.
                    </p>
                    <p>
                        Ahora, camina lento <br>
                        y las piedras, con temor, <br>
                        guardan sus bordes filosos <br>
                        por no herir su cascarón. <br>
                        Los peces le juntan luna; <br>
                        las algas, algo de sol.
                    </p>
                </div>
                <p class="select">

                    <span style="color: rgb(29, 131, 214);">
                        M.a Cristina Ramos <br>
                        La luna lleva un silencio <br>
                        Editorial Anaya-Aique
                    </span> <br> <br>

                    El género literario de este texto es: <br>
                    <span>
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected>Escoge una opción</option>
                            <option value="n">Lírico</option>
                            <option value="x">Narrativo</option>
                            <option value="x">Dramático</option>
                        </select>
                    </span>
                </p>
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
function result_tipo_4_1_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 1) {
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