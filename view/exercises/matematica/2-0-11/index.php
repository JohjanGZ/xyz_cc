<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <center>
            <img src="img/1-11/conjunto.gif" class="img">
        </center>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <span class="span-before">Sabado y domingo son elementos de</span>
                    <div class="caja" alt="s" data="t"></div>
                    <span class="span-after">y también de</span>
                    <div class="caja" alt="t" data="s"></div>
                    <span class="span-after">.</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja" alt="t"></div>
                    <span class="span-after"> es </span>
                    <div class="caja" id="subcon" alt="subconjunto"></div>
                    <span class="span-after"> de </span>
                    <div class="caja" alt="s"></div>
                    <span class="span-after"> . </span>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="s" class="pieza"><span>S</span></li>
                <li id="2" alt="t" class="pieza"><span>T</span></li>
                <li id="3" alt="s" class="pieza"><span>S</span></li>
                <li id="4" alt="t" class="pieza"><span>T</span></li>
                <li id="5" alt="subconjunto" class="pieza subcon"><span>subconjunto</span></li>
            </ul>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="img/1-11/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_2_0_11() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
            console.log(r);
            localStorage.setItem("Nota<?=$cod?>", nota);
            localStorage.setItem("Time<?=$cod?>", tiempo);
            correcto();
        } else {
            console.log(r);
            incorrecto();
            localStorage.setItem("Nota<?=$cod?>", "0");
            localStorage.setItem("Time<?=$cod?>", tiempo);
        }

    }
</script>