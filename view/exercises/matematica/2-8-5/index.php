<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $escritura = array('4 514','4 516','7 693','6 922','6 822','6 002','7 650','6 012'); ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item tt"><span></span>Número</div>
            <div class="grid-item tt"><span></span>Valor posicional</div>
            <div class="grid-item">
            • 5<span class="rojo">D</span>	+	6<span class="verde">C</span>	+	7<span class="naraja">UM</span>	+	0<span class="azul">U</span>	=
            </div>
            <div class="grid-item">
            <select class="slc" alt="7 650">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            • 4<span class="naraja">UM</span>	+	5<span class="verde">C</span>	+	6<span class="azul">U</span>	+	1<span class="rojo">D</span>	=
            </div>
            <div class="grid-item">
                <select class="slc" alt="4 516">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            • 6<span class="verde">C</span>	+	7<span class="naraja">UM</span>	+	9<span class="rojo">D</span>	+	3<span class="azul">U</span>	=
            </div>
            <div class="grid-item">
                <select class="slc" alt="7 693">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            • 2<span class="azul">U</span>	+	0<span class="rojo">D</span>	+	0<span class="verde">C</span>	+	6<span class="naraja">UM</span>	 =
            </div>
            <div class="grid-item">
                <select class="slc" alt="6 002">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            • 6<span class="naraja">UM</span>	+	9 <span class="verde">C</span>	+	2<span class="azul">U</span>	+	2<span class="rojo">D</span>	=
            </div>
            <div class="grid-item">
                <select class="slc" alt="6 922">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_8_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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