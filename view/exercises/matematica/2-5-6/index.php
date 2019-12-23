<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
  $numeros= array('1','2','3','4','5','6','7','8','10');
  $multi  =array('5 x 8 = 40','8 x 6 = 48','7 x 9 = 63','9 x 4 = 36','5 x 7 = 35','5 x 6 = 30','7 x 8 = 56','9 x 3 = 27')
?>
<div class="container">
    <div class="content">
        <div class="tabla">
            <div>
                <span>27 <span class="rojo">÷</span> 3 <span class="rojo">=</span> 9 porque 3 <span
                        class="rojo">×</span> 9 <span class="rojo">=</span> 27.</span>
            </div>
            <div>
                <span>35 <span class="rojo">÷</span> 5 <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span> porque
                    <span class="largo">
                        <select class="slc seleccion" alt="5 x 7 = 35">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($multi); $i++) { 
                                    echo "<option value='$multi[$i]'>$multi[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    .</span>
            </div>
            <div>
                <span>48 <span class="rojo">÷</span> 8 <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="6">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span> porque
                    <span class="largo">
                        <select class="slc seleccion" alt="8 x 6 = 48">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($multi); $i++) { 
                                    echo "<option value='$multi[$i]'>$multi[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    .</span>
            </div>
            <div>
                <span>56 <span class="rojo">÷</span> 7 <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="8">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span> porque
                    <span class="largo">
                        <select class="slc seleccion" alt="7 x 8 = 56">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($multi); $i++) { 
                                    echo "<option value='$multi[$i]'>$multi[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    .</span>
            </div>
            <div>
                <span>36 <span class="rojo">÷</span> 9 <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="4">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span> porque
                    <span class="largo">
                        <select class="slc seleccion" alt="9 x 4 = 36">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($multi); $i++) { 
                                    echo "<option value='$multi[$i]'>$multi[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    .</span>
            </div>
        </div>
    </div>
</div>
</section>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript">
function result_tipo_2_5_6() {
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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>