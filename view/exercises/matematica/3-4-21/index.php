<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('<','>','=') ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-ejercicio">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/1.png" class="principal materialboxed">
                    <select class="seleccion" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                    <img src="<?=$dir?>/img/2.png" class="principal materialboxed">
                </div>
                <div class="grid-resp">
                    <div class="contenedor" alt="0,45"></div>
                    <select class="seleccion" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                    <div class="contenedor" alt="0,52"></div>
                </div>
            </div>

            <div class="grid-ejercicio">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/3.png" class="principal materialboxed">
                    <select class="seleccion" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                    <img src="<?=$dir?>/img/4.png" class="principal materialboxed">
                </div>
                <div class="grid-resp">
                    <div class="contenedor" alt="0,36"></div>
                    <select class="seleccion" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                    <div class="contenedor" alt="0,2"></div>
                </div>
            </div>
        </div>
        <div class="grid-option">
            <div class="pieza" alt="0,45">0,45</div>
            <div class="pieza" alt="5,9">5,9</div>
            <div class="pieza" alt="0,52">0,52</div>
            <div class="pieza" alt="39,48">39,48</div>
            <div class="pieza" alt="0,2">0,2</div>
            <div class="pieza" alt="0,36">0,36</div>
            <div class="pieza" alt="2,5">2,5</div>
            <div class="pieza" alt="3,6">3,6</div>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_4_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    seleccion_lista();
    // console.log(r);
    if (r == 8) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>