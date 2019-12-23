<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('Tottus','Plaza Vea','Metro','Wong');
?>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
    </div>
    <div class="table">
        <h6 class="preg">Responde</h6>
        <div class="minitable aleatorio">
            <div class="pregunta">
           <span> • ¿Qué supermercado tuvo la mayor cantidad de asistentes?</span>
                <span>
                    <select class="slc seleccion" alt="Metro">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            <span>• ¿Qué supermercado tuvo la menor cantidad de asistentes?</span>
                <span>
                    <select class="slc seleccion" alt="Wong">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            <span>• ¿Cuántos asistentes tuvieron Metro y Wong juntos?</span>
                <span>
                    <select class="slc seleccion" alt="1000">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=800; $i < 1300; $i+=100) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            <span>• ¿Cuántos asistentes tuvieron Plaza Vea y Wong juntos?</span>
                <span>
                    <select class="slc seleccion" alt="600">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=300; $i < 900; $i+=100) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            <span>• ¿Cuántos asistentes tuvieron Metro y Plaza Vea?</span>
                <span>
                    <select class="slc seleccion" alt="1200">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=800; $i < 1500; $i+=100) { 
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
<script src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
function result_tipo_2_4_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 5) {
        console.log(r);
        localStorage.setItem("Nota2-1-16", "2");
        localStorage.setItem("Time2-1-16", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-1-16", "0");
        localStorage.setItem("Time2-1-16", tiempo);

    }
}
</script>