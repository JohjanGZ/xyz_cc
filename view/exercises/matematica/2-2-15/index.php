<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('>','=','<');
?>
<body>
    <div class="container-two">
        <div class="caja card-panel blue darken-1">
            <div class="problema">
                <div class="fila">
                    <div class="numero">
                    363 + 266
                    </div>
                    <div></div>
                    <div class="numero">
                    485 + 120
                    </div>
                </div>
                <div class="fila">
                    <div class="flechas">↘ ↙</div>
                    <div></div>
                    <div class="flechas">↘ ↙</div>
                </div>
                <div class="fila choosers">
                    <select class="slc" alt="629">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=626; $i < 635 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="605">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=600; $i < 609 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="caja card-panel blue darken-1">
            <div class="problema">
                <div class="fila">
                    <div class="numero">
                    852 + 45
                    </div>
                    <div></div>
                    <div class="numero">
                    726 + 186
                    </div>
                </div>
                <div class="fila">
                    <div class="flechas">↘ ↙</div>
                    <div></div>
                    <div class="flechas">↘ ↙</div>
                </div>
                <div class="fila choosers">
                    <select class="slc" alt="897">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=895; $i < 904 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc smalerBox" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="912">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=908; $i < 917 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
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
                <img class="materialboxed" width="80%" src="<?=$dir ?>/img/respuesta.png">
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
function result_tipo_2_2_15() {
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