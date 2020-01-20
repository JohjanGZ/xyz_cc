<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('1','6','3','1134','100','30','1000','1136');
    $numerosDos = array('2','2214','1','4','200','2241','40','2000')
?>

<body>
    <div class="container-two">
        <div class="contenedor main__contenedor">
            <div class="image">
                <img src="<?= $dir ?>/img/imagen.png" class="materialboxed" alt="">
            </div>
            <div class="detalles">
                <span>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                millar
                <span>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                centena
                <span>
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                decenas
                <span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                unidades
            </div>
            <div class="detallesDos">
                <span>
                    <select class="slc" alt="1000">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="100">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="30">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                =
                <span>
                    <select class="slc" alt="1136">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
        </div>
        <div class="contenedor second__contenedor">
            <div class="image">
                <img src="<?= $dir ?>/img/imagenDos.png" class="materialboxed" alt="">
            </div>
            <div class="detalles">
                <span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                millar
                <span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                centena
                <span>
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                decenas
                <span>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                unidades
            </div>
            <div class="detallesDos">
                <span>
                    <select class="slc" alt="2000">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="200">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="40">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
                =
                <span>
                    <select class="slc" alt="2241">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numerosDos); $i++) { 
                            echo "<option value='$numerosDos[$i]'>$numerosDos[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
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
function result_tipo_2_7_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 19) {
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