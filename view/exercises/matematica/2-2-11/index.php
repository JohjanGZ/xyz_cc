<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 
    $escritura = array('663','659','665','667','666','658','660', '662');
?>
<div class="container-two">
    <div class="fila">
        <div class="borders">656</div>
        <div class="borders">657</div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="fila">
        <div></div>
        <div></div>
        <div class="borders">
            <select class="slc" alt="658">
                <option value="" disabled selected></option>
                <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
            </select>
        </div>
        <div class="borders">
            <select class="slc" alt="659">
                <option value="" disabled selected></option>
                <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
            </select>
        </div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="fila">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="borders">
            <select class="slc" alt="660">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($escritura); $i++) { 
                        echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div></div>
        <div></div>
    </div>
    <div class="fila">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="borders">
                661
        </div>
        <div></div>
    </div>
    <div class="fila">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="borders">
            <select class="slc" alt="662">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($escritura); $i++) { 
                        echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="fila">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div class="borders">
            <select class="slc" alt="663">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($escritura); $i++) { 
                        echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div></div>
    </div>
    <div class="fila">
        <div></div>
        <div></div>
        <div></div>
        <div class="borders">
            <select class="slc" alt="665">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($escritura); $i++) { 
                        echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="borders">
            664
        </div>
        <div></div>
        <div></div>
    </div>
    <div class="fila">
        <div></div>
        <div></div>
        <div class="borders">
            <select class="slc" alt="666">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($escritura); $i++) { 
                        echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="fila">
        <div></div>
        <div class="borders">
            <select class="slc" alt="667">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($escritura); $i++) { 
                        echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
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
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
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

function result_tipo_2_2_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
        console.log(rpta);
        localStorage.setItem("Nota2-2-11", "2");
        localStorage.setItem("Time2-2-11", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-2-11", "0");
        localStorage.setItem("Time2-2-11", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>