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
        <div class="item">
            <div class="fila">
                <div class="item1">
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=2; $i < 10 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="fila">
                <div class="item2">10</div>
                <div class="item3">13</div>
            </div>
            <div class="fila">
                <div class="item4">
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=2; $i < 10 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="item5">15</div>
                <div class="item6">
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=2; $i < 10 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="fila">
                <div class="item1">
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=2; $i < 10 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="fila">
                <div class="item2">9</div>
                <div class="item3">14</div>
            </div>
            <div class="fila">
                <div class="item4">
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=2; $i < 10 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="item5">13</div>
                <div class="item6">
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=2; $i < 10 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="fila">
                <div class="item1">
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=5; $i < 14 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="fila">
                <div class="item2">15</div>
                <div class="item3">22</div>
            </div>
            <div class="fila">
                <div class="item4">
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=5; $i < 14 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="item5">19</div>
                <div class="item6">
                    <select class="slc" alt="13">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=5; $i < 14 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="fila">
                <div class="item1">
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=5; $i < 14 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="fila">
                <div class="item2">15</div>
                <div class="item3">18</div>
            </div>
            <div class="fila">
                <div class="item4">
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=5; $i < 14 ; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="item5">21</div>
                <div class="item6">
                    <select class="slc" alt="12">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=5; $i < 14 ; $i++) { 
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
                <img class="materialboxed" width="80%" src="img/15/respuesta.png">
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
function result_tipo_2_2_25() {
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