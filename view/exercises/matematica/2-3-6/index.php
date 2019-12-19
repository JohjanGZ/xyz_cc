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
    $desco = array ('2 000 + 100 + 50 + 3','6000 + 10 + 5','2 000 + 100 + 60 + 3','6000 + 10 + 4','2 008 + 100 + 60 + 3');
    $escritura = array('Dos mil ciento sesenta y tres','Seis mil catorce','Dos mil ciento setenta y tres','Seis mil quince');
?>

<body>
    <div class="container-two">
        <div class="caja">
            <div class="tabla">
                <div class="grid-container">
                    <div class="principalNumber">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </div>
                    <div class="grid-item cabe"><span class="o">UM</span></div>
                    <div class="grid-item cabe"><span class="b">C</span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item" style="position:relative;">
                        <select class="slc" id="slc2" alt="2">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc2" alt="1">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select class="slc" id="slc2" alt="6">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select class="slc" id="slc2" alt="3">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="info1">
                        <select class="slc" alt="2 000 + 100 + 60 + 3">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($desco); $i++) { 
                                echo "<option value='$desco[$i]'>$desco[$i]</option>";
                            }
                        ?>
                        </select>
                        <select class="slc" alt="Dos mil ciento sesenta y tres">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($escritura); $i++) { 
                                echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="principalNumber">
                        <img src="<?= $dir ?>/img/2.png" class="image2" alt="">
                    </div>
                    <div class="grid-item cabe"><span class="o">UM</span></div>
                    <div class="grid-item cabe"><span class="b">C</span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item" style="position:relative;">
                        <select class="slc" id="slc2" alt="6">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc2" alt="0">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select class="slc" id="slc2" alt="1">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select class="slc" id="slc2" alt="4">
                            <option value="" disabled selected></option>
                            <?php 
                                foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="info2">
                        <select class="slc" alt="6000 + 10 + 4">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($desco); $i++) { 
                                echo "<option value='$desco[$i]'>$desco[$i]</option>";
                            }
                        ?>
                        </select>
                        <select class="slc" alt="Seis mil catorce">
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
var r = 0;
$('select').formSelect();
//Random
var div = document.querySelector('.tabla');
for (var i = div.children.length; i >= 0; i--) {
    div.appendChild(div.children[Math.random() * i | 0]);
}

$(".slc").change(function() {
    slcalt = $(this).attr("alt");
    slcval = $(this).val();
    console.log(slcalt);
    console.log(slcval);
    if (slcalt == slcval) {
        r++;
        console.log(r);
    }
});
// Validar
function result_tipo_2_3_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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