<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $numeros = array('10'); 
?>

<body>
    <div class="container-two">
        <div class="content">
            <div class="columna aleatorio">
                <div class="item">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="10">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="20">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="30">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/4.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="40">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="columna aleatorio">
                <div class="item">
                    <img src="<?= $dir ?>/img/5.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="50">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/6.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="60">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/7.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="70">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/8.png" alt="">
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="80">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 100; $i+=10) { 
                                    echo "<option value='$i'>$i cm</option>";
                                }
                            ?>
                        </select>
                    </span>
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
function result_tipo_2_5_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 8) {
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