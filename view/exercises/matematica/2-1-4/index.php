<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 

    $signos = array('>','=','<');

?>

<body>
    <div class="container-two">
        <div class="caja">
            <div class="tabla">
                <div class="grid-container">
                    <div class="grid-item">
                        <div>• 5 + 4 + 6</div>
                        <select class="slc" id="slc1" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div>6 + 3 + 5</div>
                    </div>
                    <div class="grid-item">
                        <div>• 7 + 8 – 3</div>
                        <select class="slc" id="slc2" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div>17 + 3 – 5</div>
                    </div>
                    <div class="grid-item">
                        <div>• 8 – 2 + 7</div>
                        <select class="slc" id="slc3" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div>9 – 5 – 2</div>
                    </div>
                    <div class="grid-item">
                        <div>• 8 – 7 + 2</div>
                        <select class="slc" id="slc4" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div>12 + 4 – 8</div>
                    </div>
                    <div class="grid-item">
                        <div>• 5 + 6 + 9</div>
                        <select class="slc" id="slc5" alt="=">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                       <div> 9 + 2 + 9</div>
                    </div>
                    <div class="grid-item">
                        <div>• 6 + 4 + 8</div>
                        <select class="slc" id="slc6" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div>15 – 3 – 7</div>
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
$('select').formSelect();
// Random
// var div = document.querySelector('.grid-container');
// for (var i = div.children.length; i >= 0; i--) {
//     div.appendChild(div.children[Math.random() * i | 0]);
// }
// Select
var r = 0;

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
function result_tipo_2_1_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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