<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $nom = array('sombrero A', 'sombrero B','sombrero C', 'sombrero D', 'sombrero E') ?>

<body>
    <div class="container-two">
        <div class="row">
            <div class="col s12">
                <center>
                    <span class="text"><span class="num">●</span>Daniela compró 3 blusas, 2 faldas y 2 sombreros. Ella
                        quiere
                        saber de cuántas maneras distintas puede vestirse con su nueva ropa.</span>
                </center>
            </div>
            <div class="col s4">
                <p class="num">● 2 blusas</p>
                <img src="<?=$dir?>/img/principal1.png" class="principal materialboxed">
                <p class="num">● 2 faldas</p>
                <img src="<?=$dir?>/img/principal2.png" class="principal materialboxed">
                <p class="num">● 2 sombreros</p>
                <img src="<?=$dir?>/img/principal3.png" class="principal materialboxed">
            </div>
            <div class="col s8">
                <div class="grid-container">
                    <div class="grid-template">
                        <div class="grid-tabla"><img src="<?=$dir?>/img/1.png" class="img"></div>
                        <div class="grid-tabla">
                            <div class="grid">
                                <div class="grid-pre">
                                    <div class="imagen"><img src="<?=$dir?>/img/2.png" class="img-two"></div>
                                </div>
                                <div class="grid-pre">
                                    <select class="slc" alt="<?= $nom[1] ?>">
                                        <option value="" disabled selected></option>
                                        <?php
                                    for ($i=0; $i < count($nom); $i++) { 
                                        echo "<option value='$nom[$i]'>$nom[$i]</option>";
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>

                            <div class="grid">
                                <div class="grid-pre">
                                    <select class="slc" alt="<?= $nom[0] ?>">
                                        <option value="" disabled selected></option>
                                        <?php
                                    for ($i=0; $i < count($nom); $i++) { 
                                        echo "<option value='$nom[$i]'>$nom[$i]</option>";
                                    }
                                ?>
                                    </select>
                                </div>
                                <div class="grid-pre">
                                    <div class="imagen"><img src="<?=$dir?>/img/3.png" class="img-two"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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
function result_tipo_1_9_25() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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
</script>|