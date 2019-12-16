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
                        <select class="slc" id="slc1" alt="954">
                            <option value="" disabled selected></option>
                            <?php for($i=950; $i < 955;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        >
                        953
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc1" alt="826">
                            <option value="" disabled selected></option>
                            <?php for($i=826; $i < 830 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        < 827
                    </div>
                    <div class="grid-item" >
                        <select class="slc" id="slc1" alt="633">
                            <option value="" disabled selected></option>
                            <?php for($i=628; $i < 634 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        > 632
                    </div>
                    <div class="grid-item" >
                        684 >
                        <select class="slc" id="slc1" alt="683">
                            <option value="" disabled selected></option>
                            <?php for($i=683; $i < 688 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item" >
                        623 <
                        <select class="slc" id="slc1" alt="624">
                            <option value="" disabled selected></option>
                            <?php for($i=618; $i < 625 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc1" alt="622">
                            <option value="" disabled selected></option>
                            <?php for($i=622; $i < 628 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        < 623
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc1" alt="720">
                            <option value="" disabled selected></option>
                            <?php for($i=716; $i < 721 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        > 719
                    </div>
                    <div class="grid-item">
                        767 =
                        <select class="slc" id="slc1" alt="767">
                            <option value="" disabled selected></option>
                            <?php for($i=760; $i < 771 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        657 <
                        <select class="slc" id="slc1" alt="658">
                            <option value="" disabled selected></option>
                            <?php for($i=650; $i < 659 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        515 <
                        <select class="slc" id="slc1" alt="516">
                            <option value="" disabled selected></option>
                            <?php for($i=509; $i < 517 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" id="slc1" alt="529">
                            <option value="" disabled selected></option>
                            <?php for($i=520; $i < 530 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        > 528
                    </div>
                    <div class="grid-item" >
                        <select class="slc" id="slc1" alt="995">
                            <option value="" disabled selected></option>
                            <?php for($i=990; $i < 997 ;$i++){?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        = 995
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
function result_tipo_2_2_13() {
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