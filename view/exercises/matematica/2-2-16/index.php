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
                <div class="grid-container aleatorio">
                    <div class="grid-item">
                        623
                        <select class="slc" id="slc1" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        632
                    </div>
                    <div class="grid-item">
                        736
                        <select class="slc" id="slc2" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        723
                    </div>
                    <div class="grid-item" >
                        843
                        <select class="slc" id="slc3" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        844
                    </div>
                    <div class="grid-item" >
                        824
                        <select class="slc" id="slc4" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        834
                    </div>
                    <div class="grid-item" >
                        920
                        <select class="slc" id="slc5" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        856
                    </div>
                    <div class="grid-item">
                        771
                        <select class="slc" id="slc6" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        717
                    </div>
                    <div class="grid-item">
                        583
                        <select class="slc" id="slc7" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        578
                    </div>
                    <div class="grid-item">
                        881
                        <select class="slc" id="slc8" alt="=">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        881
                    </div>
                    <div class="grid-item">
                        957
                        <select class="slc" id="slc9" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        960
                    </div>
                    <div class="grid-item">
                        899
                        <select class="slc" id="slc10" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        900
                    </div>
                    <div class="grid-item">
                        668
                        <select class="slc" id="slc11" alt="<">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        686
                    </div>
                    <div class="grid-item" >
                        656
                        <select class="slc" id="slc12" alt=">">
                            <option value="" disabled selected></option>
                            <?php foreach($signos as $s):?>
                            <option value="<?= $s ?>"><?= $s ?></option>
                            <?php endforeach; ?>
                        </select>
                        655
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
                <img class="materialboxed" width="80%" src="img/12/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
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
function result_tipo_2_2_12() {
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

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>