<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 


?>
<body>
    <div class="container-two">
        <div class="caja">
            <div class="tabla">
                <div class="grid-container aleatorio">
                    <div class="grid-item">
                        <div class="numero">
                            849
                        </div>
                        <div class="signo">
                            <
                        </div>
                        <select class="slc" id="slc1" alt="850">
                            <option value="" disabled selected></option>
                            <?php for($i=850; $i >= 847;$i--){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="signo">
                            <
                        </div>
                        <select class="slc" id="slc1" alt="851">
                            <option value="" disabled selected></option>
                            <?php for($i=847; $i < 852;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc1" alt="973">
                            <option value="" disabled selected></option>
                            <?php for($i=973; $i < 977;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="signo">
                            <
                        </div>
                        <div class="numero">
                            974
                        </div>
                        <div class="signo">
                            <
                        </div>
                        <select class="slc" id="slc1" alt="975">
                            <option value="" disabled selected></option>
                            <?php for($i=970; $i < 976;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc1" alt="784">
                            <option value="" disabled selected></option>
                            <?php for($i=784; $i < 788;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="signo">
                            <
                        </div>
                        <select class="slc" id="slc1" alt="785">
                            <option value="" disabled selected></option>
                            <?php for($i=790; $i > 784;$i--){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="signo">
                            <
                        </div>
                        <div class="numero">
                            786
                        </div>
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc1" alt="861">
                            <option value="" disabled selected></option>
                            <?php for($i=861; $i < 867;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="signo">
                            <
                        </div>
                        <div class="numero">
                            862
                        </div>
                        <div class="signo">
                            <
                        </div>
                        <select class="slc" id="slc1" alt="863">
                            <option value="" disabled selected></option>
                            <?php for($i=863; $i > 859;$i--){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
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
                <img class="materialboxed" width="80%" src="img/14/respuesta.png">
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
function result_tipo_2_2_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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