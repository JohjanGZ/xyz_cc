<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="content">
        <div class="image">
            <span class="box boxuno">
            <select class="slc seleccion" alt="1">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i m</option>";
                                }
                            ?>
                        </select>
            </span>
            <span class="box boxdos">
            <select class="slc seleccion" alt="3">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i m</option>";
                                }
                            ?>
                        </select>
            </span>
            <span class="box boxtres">
            <select class="slc seleccion" alt="2">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 10; $i++) { 
                                    echo "<option value='$i'>$i m</option>";
                                }
                            ?>
                        </select>
            </span>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
$('select').formSelect();
// Formulario - Registrados


function result_tipo_2_5_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 3) {
        console.log(r);
        localStorage.setItem("Nota2-4-8", "2");
        localStorage.setItem("Time2-4-8", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-4-8", "0");
        localStorage.setItem("Time2-4-8", tiempo);

    }
}
</script>