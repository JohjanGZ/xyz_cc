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

                    <div class="contenedor-respuesta">
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Vivienda</span>
                            <span class="palabra seleccion" alt="n">Castillo</span>
                            <span class="palabra seleccion" alt="x">Casa</span>
                            <span class="palabra seleccion" alt="x">Hogar</span>
                            <span class="palabra seleccion" alt="x">Domicilio</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="n">Soltar</span>
                            <span class="palabra seleccion" alt="x">Coger</span>
                            <span class="palabra seleccion" alt="x">Sujetar</span>
                            <span class="palabra seleccion" alt="x">Agarrar</span>
                            <span class="palabra seleccion" alt="x">Aferrar</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Defender</span>
                            <span class="palabra seleccion" alt="n">Atacar</span>
                            <span class="palabra seleccion" alt="x">Proteger</span>
                            <span class="palabra seleccion" alt="x">Cuidar</span>
                            <span class="palabra seleccion" alt="x">Resguardar</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Viejo</span>
                            <span class="palabra seleccion" alt="x">Remoto</span>
                            <span class="palabra seleccion" alt="x">Antiguo</span>
                            <span class="palabra seleccion" alt="x">Arcaico</span>
                            <span class="palabra seleccion" alt="n">Joven</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Aumentar</span>
                            <span class="palabra seleccion" alt="x">Incrementar</span>
                            <span class="palabra seleccion" alt="n">Disminuir</span>
                            <span class="palabra seleccion" alt="x">Crecer</span>
                            <span class="palabra seleccion" alt="x">Ampliar</span>
                        </p>

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
function result_tipo_4_2_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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