<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
 $numbers = array('0','1','2','3','4','5','6','7','8','9');
?>
<div class="container-two">
    <div class="fila">
        <div class="numero">1 624</div>
        <div class="rojo"> < </div> 
        <div class="numero uno">1
                <span>
                    <select class="slc seleccion" id="slc1" alt="6">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                        <?php endforeach; ?>
                    </select>
                </span>
                24
        </div>
    </div>
    <div class="fila">
        <div class="numero">8 762	</div>
        <div class="rojo"> > </div> 
        <div class="numero uno">8 76
                <span>
                    <select class="slc seleccion" id="slc2" alt="2">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                        <?php endforeach; ?>
                    </select>
                </span>
        </div>
    </div>
    <div class="fila">
        <div class="numero">5 565</div>
        <div class="rojo"> < </div> 
        <div class="numero uno">5
                <span>
                    <select class="slc seleccion" id="slc3" alt="5">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                        <?php endforeach; ?>
                    </select>
                </span>
                65
        </div>
    </div>
    <div class="fila">
        <div class="numero uno">6
                <span>
                    <select class="slc seleccion" id="slc4" alt="7">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                        <?php endforeach; ?>
                    </select>
                </span>
                67
        </div>
        <div class="rojo"> = </div> 
        <div class="numero">6 767</div>
    </div>
    <div class="fila">
        <div class="numero uno">49
                <span>
                    <select class="slc seleccion" id="slc5" alt="9">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                        <?php endforeach; ?>
                    </select>
                </span>
                4
        </div>
        <div class="rojo"> < </div> 
        <div class="numero">4994</div>
    </div>
    <div class="fila">
        <div class="numero uno">9
                <span>
                    <select class="slc seleccion" id="slc6" alt="3">
                        <option value="" disabled selected></option>
                        <?php foreach($numbers as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                        <?php endforeach; ?>
                    </select>
                </span>
                22
        </div>
        <div class="rojo"> > </div> 
        <div class="numero">9322</div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
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
<script src="<?= $dir ?>/js/validate.js"></script>
<script>$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript">

// $('.seleccion').formSelect();

// var r = 0;

// $(".slc").change(function() {
//     if ($("#slc1").attr("alt") < $("#slc1").val()) {
//         r++;
//     }else if($("#slc2").attr("alt") > $("#slc2").val()){
//         r++;
//     }else if($("#slc3").attr("alt") < $("#slc3").val()){
//         r++;
//     }else if($("#slc4").attr("alt") = $("#slc4").val()){
//         r++;
//     }else if($("#slc5").attr("alt") > $("#slc5").val()){
//         r++;
//     }else if($("#slc6").attr("alt") < $("#slc6").val()){
//         r++;
//     }
// });


function result_tipo_2_3_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
        console.log(r);
        localStorage.setItem("Nota2-3-10", "2");
        localStorage.setItem("Time2-3-10", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-3-10", "0");
        localStorage.setItem("Time2-3-10", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>