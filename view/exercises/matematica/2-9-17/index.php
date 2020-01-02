<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numbers= array('0','1','2','3','4','5','6','7','8','9');
?>

<body>
    <div class="container-two">
        <div class="item itemuno">
            <div class="box boxuno">
                <select class="slc seleccion" alt="794">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=790; $i < 800; $i+=2) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxdos">
                <select class="slc seleccion" alt="4055">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=4045; $i < 4065; $i+=2) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxtres">
                <select class="slc seleccion" alt="4849">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=4835; $i < 4864; $i+=2) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="item itemdos">
            <div class="box boxunos">
                <select class="slc seleccion" alt="1765">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1745; $i < 1790; $i+=10) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxdoss">
                <select class="slc seleccion" alt="1437">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1407; $i < 1460; $i+=10) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxtress">
                <select class="slc seleccion" alt="328">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=308; $i < 380; $i+=10) { 
                            echo "<option value='$i'>$i</option>";
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
$('select').formSelect();

// Validar
function result_tipo_2_9_17() {
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