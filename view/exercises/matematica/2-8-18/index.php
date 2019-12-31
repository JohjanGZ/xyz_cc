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
        <div class="caja">
            <div class="plus rojo">+</div>
            <div class="info">
                <span class="rojo">(</span>5<span class="naranja">UM</span>; 6<span class="verde">C</span>; 8<span class="rojo">D</span>; 4<span class="azul">U</span> <span class="rojo">) + (</span> 2 <span class="naranja">UM</span>; 1<span class="verde">C</span>; 4<span class="rojo">D</span>; 9<span class="azul">U</span> <span class="rojo">)</span>
            </div>
            <div class="header">
                <div>UM</div>
                <div>C</div>
                <div>D</div>
                <div>U</div>
            </div>
            <div class="filas">
                <div>
                    <select class="slc seleccion" alt="5">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="6">
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
                    <select class="slc seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="filas">
                <div>
                    <select class="slc seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="1">
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
                <div>
                    <select class="slc seleccion" alt="9">
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
                    <select class="slc seleccion" alt="7">
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
        </div>
        <div class="caja">
            <div class="plus rojo">-</div>
            <div class="info">
                <span class="rojo">(</span>6<span class="naranja">UM</span>; 5<span class="verde">C</span>; 3<span class="rojo">D</span>; 4<span class="azul">U</span> <span class="rojo">) + (</span>3<span class="naranja">UM</span>; 4<span class="verde">C</span>; 7<span class="rojo">D</span>; 5<span class="azul">U</span> <span class="rojo">)</span>
            </div>
            <div class="header">
                <div>UM</div>
                <div>C</div>
                <div>D</div>
                <div>U</div>
            </div>
            <div class="filas">
                <div>
                    <select class="slc seleccion" alt="6">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="5">
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
                    <select class="slc seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="filas">
                <div>
                    <select class="slc seleccion" alt="3">
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
                <div>
                    <select class="slc seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="5">
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
                    <select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="0">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n): ?>
                                <option value='<?= $n ?>'><?= $n ?></option>";
                        <?php endforeach; ?>
                    </select>
                </div>
                <div>
                    <select class="slc seleccion" alt="5">
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
function result_tipo_2_8_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 24) {
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