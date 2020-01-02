<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20');
?>

<body>
    <div class="container-two aleatori">
        <div class="contenedores">
            <div class="itema">
                <h5><span class="azul">d.</span> Siempre 39</h5>
                <div class="contenedor">
                    <div class="item colorRed">
                        <h5>10</h5>
                    </div>
                    <div class="item colorRed">
                        <h5>15</h5>
                    </div>
                    <div class="item colorRed">
                        <h5>14</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="17">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="13">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="9">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="12">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorRed">
                        <h5>11</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="16">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="itema">
                <h5><span class="azul">e.</span> Siempre 15</h5>
                <div class="contenedor dos">
                    <div class="item colorBlue">
                        <h5>2</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="9">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorBlue">
                        <h5>4</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorBlue">
                        <h5>5</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="3">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorBlue">
                        <h5>6</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="1">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorBlue">
                        <h5>8</h5>
                    </div>
                </div>
            </div>
            <div class="itema">
                <h5><span class="azul">f.</span> Siempre 27</h5>
                <div class="contenedor tres">
                    <div class="item colorYellow">
                        <h5>6</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="11">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorYellow">
                        <h5>10</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="13">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorYellow">
                        <h5>9</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item colorYellow">
                        <h5>8</h5>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="slc seleccion" alt="12">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
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

// Validar
function result_tipo_2_8_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 14) {
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