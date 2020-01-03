<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numbers= array('0','1','2','3','4','5','6','7','8','9');
?>

<body>
    <div class="container-two">
        <div class="info">
            <p><span class="azul">c. </span> Nueve mil ochocientos veintisiete menos cuatro mil novecientos treinta y tres.</p>
        </div>
        <div class="caja">
            <div class="plus rojo">-</div>
            <div class="header">
                <div>UM</div>
                <div>C</div>
                <div>D</div>
                <div>U</div>
            </div>
            <div class="filas">
                <div>
                    <select class="slc seleccion" alt="9">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="8">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="filas">
                <div>
                    <select class="slc seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="9">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <hr>
            <div class="filas">
                <div>
                    <select class="slc seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="8">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="9">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
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

$('select').formSelect();

// Validar
function result_tipo_2_9_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 12) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>