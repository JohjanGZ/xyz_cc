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
                <select class="slc seleccion" alt="1300">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1000; $i < 3000; $i+=300) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxdos">
                <select class="slc seleccion" alt="806">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=780; $i < 890; $i+=13) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxtres">
                <select class="slc seleccion" alt="2106">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=2100; $i < 2130; $i+=3) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxcuatro">
                <select class="slc seleccion" alt="595">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=590; $i < 602; $i+=1) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="box boxcinco">
                <select class="slc seleccion" alt="1511">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1500; $i < 1520; $i+=1) { 
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
function result_tipo_2_9_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 5) {
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