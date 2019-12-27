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
                            <span class="celeste">●</span>
                            ( 
                            <span class="palabra seleccion" alt="n">Ella</span> / 
                            <span class="palabra seleccion" alt="x">Yo</span> )
                            juega el tenis todos los sábados.
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            ( 
                            <span class="palabra seleccion" alt="x">Vosotros</span> / 
                            <span class="palabra seleccion" alt="n">Nosotros</span> )
                            vamos a la playa mañana.
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            ¿ ( 
                            <span class="palabra seleccion" alt="n">Tú</span> / 
                            <span class="palabra seleccion" alt="x">Usted</span> )
                            comes fruta ?
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            ( 
                            <span class="palabra seleccion" alt="n">Ustedes</span> / 
                            <span class="palabra seleccion" alt="x">Vosotros</span> )
                            siempre recuerdan mis cumpleaños.
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            ( 
                            <span class="palabra seleccion" alt="x">Él</span> / 
                            <span class="palabra seleccion" alt="n">Ellos</span> )
                            han ido al centro comercial.
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
function result_tipo_4_4_18() {
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