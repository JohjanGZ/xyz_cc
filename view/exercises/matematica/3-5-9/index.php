<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $resul = array('85','86','72','74','506','508','65','67') ?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="item">
                    <span>•</span> 69 <span>-</span> 32 <span>+ (</span>6 <span>x</span> 8<span>) =</span>
                    <select class="slc seleccion" alt="85">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($resul); $i++) { 
                                echo "<option value='$resul[$i]'>$resul[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="grid-item">
                <div class="item">
                    <span>•</span> <span>(</span>36 <span>–</span> 15<span>) +</span> 7 <span>×</span> 8
                    <span>–</span> 3 <span>=</span>
                    <select class="slc seleccion" alt="74">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($resul); $i++) { 
                                echo "<option value='$resul[$i]'>$resul[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="grid-item">
                <div class="item">
                    <span>•</span> <span>(</span>73 <span>+</span> 47<span>) ×</span> 4 <span>+</span> 28
                    <span>=</span>
                    <select class="slc seleccion" alt="508">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($resul); $i++) { 
                                echo "<option value='$resul[$i]'>$resul[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="grid-item">
                <div class="item">
                    <span>•</span>21 <span>+ (</span>6 <span>×</span> 9 <span>–</span> 2 <span>×</span>
                    4<span>) =</span>
                    <select class="slc seleccion" alt="67">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($resul); $i++) { 
                                echo "<option value='$resul[$i]'>$resul[$i]</option>";
                            }
                        ?>
                    </select>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_5_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 4) {
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>