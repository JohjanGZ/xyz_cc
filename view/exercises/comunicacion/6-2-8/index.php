<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?= $titulo ?>

<body>

    <div class="contenedor-two">
        <div class="content">
            <!-- <span class="seleccion">optima</span>/<span class="seleccion" alt="oooo">-->
            <div class="info">
                <p>a. No sé si <span class="seleccion" alt="oooo">reir</span>/<span class="seleccion" alt="n">reír</span> o llorar.</p>
                <p>b. ¿<span class="seleccion" alt="oooo">Cuando</span>/<span class="seleccion" alt="n">Cuándo</span>
                    será tu fiesta?</p>
                <p>c. Estaba feliz porque los exámenes estaban <span class="seleccion" alt="n">incluidos</span>/<span class="seleccion" alt="oooo">incluídos</span> en el seguro.</p>
                <p>d. El queso había sido <span class="seleccion" alt="oooo">roido</span>/<span class="seleccion" alt="n">roído</span> por un ratón.</p>
                <p>e. Me aseguró que no <span class="seleccion" alt="n">vio</span>/<span class="seleccion" alt="oooo">vió</span> nada.</p>
                <p>f. Demostró mucho <span class="seleccion" alt="oooo">brio</span>/<span class="seleccion" alt="n">brío</span> en la batalla.</p>
                <p>g. Me dijo algo más pero no lo <span class="seleccion" alt="oooo">oi</span>/<span class="seleccion" alt="n">oí</span>.</p>
                <p>h. Nos mostró su <span class="seleccion" alt="n">guion</span>/<span class="seleccion" alt="oooo">guión</span> teatral.</p>
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
<?php require('../../../tools/botones/botones.php'); ?> <script>
    $("#next").attr("onclick", "<?= $next ?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_6_2_8() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 8) {
            console.log(r)
            localStorage.setItem("Nota<?= $cod ?>", nota);
            localStorage.setItem("Time<?= $cod ?>", tiempo);
            correcto();
        } else {
            incorrecto();
            console.log(r)
            localStorage.setItem("Nota<?= $cod ?>", "0");
            localStorage.setItem("Time<?= $cod ?>", tiempo);
        }
    }
</script>