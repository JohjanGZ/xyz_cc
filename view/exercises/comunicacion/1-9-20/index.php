<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $plb = array('ladra','podrido','ladrón','dragón','cuadro'); ?>

<body>
    <div class="container-two">
        <center>
            <img src="<?= $dir ?>/img/principal.png" class="principal">
        </center>
        <div class="grid-container">
            <div class="grid-item">
                <div class="br-img">
                    El
                    <div class="box-select">
                        <select id="select1">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 5; $i++) { 
                                $palabra = $plb[$i];
                            ?>
                            <option value="<?=$palabra?>"><?= $palabra?></option>
                            <?php } ?>
                        </select>
                    </div>
                    está en la pared.
                </div>
            </div>
            <div class="grid-item">
                <div class="br-img">
                    El
                    <div class="box-select">
                        <select id="select2">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 5; $i++) { 
                                $palabra = $plb[$i];
                            ?> <option value="<?=$palabra?>"><?= $palabra?></option>
                            <?php } ?>
                        </select>
                    </div>
                    escupe fuego.
                </div>
            </div>

            <div class="grid-item">
                <div class="br-img">
                    Si está
                    <div class="box-select">
                        <select id="select3">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 5; $i++) { 
                                $palabra = $plb[$i];
                            ?>
                            <option value="<?=$palabra?>"><?= $palabra?></option>
                            <?php } ?>
                        </select>
                    </div>
                    huele mal.
                </div>
            </div>
            <div class="grid-item">
                <div class="br-img">
                    El perro
                    <div class="box-select">
                        <select id="select4">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 5; $i++) { 
                                $palabra = $plb[$i];
                            ?>
                            <option value="<?=$palabra?>"><?= $palabra?></option>
                            <?php } ?>
                        </select>
                    </div>
                    mucho.
                </div>
            </div>

            <div class="grid-item">
                <div class="br-img">
                    El
                    <div class="box-select">
                        <select id="select5">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 5; $i++) { 
                                $palabra = $plb[$i];
                            ?>
                            <option value="<?=$palabra?>"><?= $palabra?></option>
                            <?php } ?>
                        </select>
                    </div>
                    robó dinero.
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_9_20() {
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
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>