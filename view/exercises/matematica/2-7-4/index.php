<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $letras = array('Cinco mil doscientos','Seis mil doscientos','Siete mil doscientos','Ocho mil doscientos','Nueve mil doscientos', 'Diez mil doscientos', 'Once mil doscientos');
?>
<body>
    <div class="container-two aleatori">
        <div class="content">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="detalle">
                <div>
                    <span>
                        <span>
                            <select class="slc seleccion" alt="9">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </span>millares y <span>
                            <select class="slc seleccion" alt="2">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </span>centenas =
                        <span>
                            <select class="slc seleccion" alt="9200">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1200; $i < 10000 ; $i+=1000) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </span> unidades
                    </span>
                </div>
                <div>
                    <span class="seLee">Se lee:
                        <span class="largo">
                            <select class="slc seleccion" alt="Nueve mil doscientos">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($letras); $i++) { 
                                    echo "<option value='$letras[$i]'>$letras[$i]</option>";
                                }
                            ?>
                            </select>
                        </span>
                    </span>
                </div>
            </div>
            <div class="gridTabla">
                <div class="tabla">
                    <div class="header">
                        <div class="colorYellow">UM</div>
                        <div class="colorGreen">C</div>
                        <div class="colorRed">D</div>
                        <div class="azul">U</div>
                    </div>
                    <div class="fila">
                        <div>
                            <select class="slc seleccion" alt="9">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="2">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="0">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="0">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i</option>";
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
$('select').formSelect();

// Validar
function result_tipo_2_7_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 8) {
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