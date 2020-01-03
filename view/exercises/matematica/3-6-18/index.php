<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $angulo = array('recto','llano','agudo','obtuso','90º','360º','180º','45º','135º','70º','60º');
?>

<body>
    <div class="container-two">
        <div class="row">
            <div class="col l12">
                <div class="grid-head">
                    <div class="grid-item-head clr w1">Imagen</div>
                    <div class="grid-item-head clr w2">Ángulo</div>
                    <div class="grid-item-head clr w3">Descripción</div>
                </div>
                <div class="grid-container">
                    <!-- 1 -->
                    <div class="grid-caja">
                        <div class="grid-item w1">
                            <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                        </div>
                        <div class="grid-item w2">
                            <select class="seleccion" alt="obtuso">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="grid-item w3">
                            su medida es mayor a
                            <select class="seleccion" alt="90º">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=4; $i < 11; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="grid-caja">
                        <div class="grid-item w1">
                            <img src="<?=$dir?>/img/2.png" class="img materialboxed">
                        </div>
                        <div class="grid-item w2">
                            <select class="seleccion" alt="llano">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="grid-item w3">
                            su medida es igual a
                            <select class="seleccion" alt="180º">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=4; $i < 11; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="grid-caja">
                        <div class="grid-item w1">
                            <img src="<?=$dir?>/img/3.png" class="img materialboxed">
                        </div>
                        <div class="grid-item w2">
                            <select class="seleccion" alt="recto">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="grid-item w3">
                            su medida es igual a
                            <select class="seleccion" alt="90º">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=4; $i < 11; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="grid-caja">
                        <div class="grid-item w1">
                            <img src="<?=$dir?>/img/4.png" class="img materialboxed">
                        </div>
                        <div class="grid-item w2">
                            <select class="seleccion" alt="agudo">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="grid-item w3">
                            su medida es menor a
                            <select class="seleccion" alt="90º">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=4; $i < 11; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_6_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
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