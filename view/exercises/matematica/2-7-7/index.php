<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $escritura = array('martes 2 de febrero','lunes 8 de febrero','sábado 20 de agosto','viernes 26 de agosto','lunes 25 de mayo','domingo 31 de mayo','domingo 21 de mayo'); ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item tt"><span></span>4 días antes </div>
            <div class="grid-item tt"><span></span>hoy</div>
            <div class="grid-item tt"><span></span>2 días después</div>
            <div class="grid-item">
                <select class="slc" alt="martes 2 de febrero">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <span class="rojo">←</span> sábado 6 de febrero <span class="rojo">→</span>
            </div>
            <div class="grid-item">
                <select class="slc" alt="lunes 8 de febrero">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="sábado 20 de agosto">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <span class="rojo">←</span> miércoles 24 de agosto <span class="rojo">→</span>
            </div>
            <div class="grid-item">
                <select class="slc" alt="viernes 26 de agosto">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="lunes 25 de mayo">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <span class="rojo">←</span> viernes 29 de mayo <span class="rojo">→</span>
            </div>
            <div class="grid-item">
                <select class="slc" alt="domingo 31 de mayo">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_7_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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