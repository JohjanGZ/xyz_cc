<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $producto = array('20','25','30','35','40','45','50','60','70','80','90','100');
?>
<body>
    <div class="caja-principal">
        <div class="content">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
            </div>
            <div class="preguntas">
                <div class="pregunta">
                    <span>   a. ¿Cuántos niños y niñas asistieron en total?</span>
                    <span>
                        <select class="slc seleccion" alt="25">
                            <option value="" disabled selected></option>
                            <?php
                               foreach ($producto as $i) { 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </span>
                    <span class="rojo">+</span>
                    <span>
                        <select class="slc seleccion" alt="35">
                            <option value="" disabled selected></option>
                            <?php
                               foreach ($producto as $i) { 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </span>
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="60">
                            <option value="" disabled selected></option>
                            <?php
                               foreach ($producto as $i) { 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="pregunta">
                    <span> b. Si en total asistieron 100 personas, ¿cuántos adultos asistieron a la fiesta?</span>
                    <span>
                        <select class="slc seleccion" alt="100">
                            <option value="" disabled selected></option>
                            <?php
                               foreach ($producto as $i) { 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </span>
                    <span class="rojo">-</span>
                    <span>
                        <select class="slc seleccion" alt="60">
                            <option value="" disabled selected></option>
                            <?php
                               foreach ($producto as $i) { 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </span>
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="40">
                            <option value="" disabled selected></option>
                            <?php
                               foreach ($producto as $i) { 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="100%" src="<?= $dir ?>/img/respuesta.png">
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

<script type="text/javascript">
// Validar


function result_tipo_2_4_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>