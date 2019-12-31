<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

    $numeros = array('>','=','<','3 821','6 253','6 753','4 665','7 273','4 634');

?>
<div class="container-two aleatorio">

    <div class="item">
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="3 821">
                    <option value="" disabled selected></option>
                    <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                </select>
            </div>
        </div>
        <div class="two">
            <select class="slc seleccion" alt="=">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/3.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="3 821">
                    <option value="" disabled selected></option>
                    <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                </select>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="6 253">
                    <option value="" disabled selected></option>
                    <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                </select>
            </div>
        </div>
        <div class="two">
            <select class="slc seleccion" alt="<">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/5.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="6 753">
                    <option value="" disabled selected></option>
                    <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                </select>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/6.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="4 665">
                    <option value="" disabled selected></option>
                    <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                </select>
            </div>
        </div>
        <div class="two">
            <select class="slc seleccion" alt="=">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/7.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="4 665">
                    <option value="" disabled selected></option>
                    <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                </select>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/8.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="7 273">
                    <option value="" disabled selected></option>
                    <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                </select>
            </div>
        </div>
        <div class="two">
            <select class="slc seleccion" alt=">">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="one">
            <div class="uno">
                <img src="<?= $dir ?>/img/9.png" alt="">
            </div>
            <div class="dos">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="tres">
                <select class="slc seleccion" alt="4 634">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
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
<script type="text/javascript">
$('select').formSelect();


function result_tipo_2_8_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 12) {
        console.log(r);
        localStorage.setItem("Nota2-8-14", "2");
        localStorage.setItem("Time2-8-14", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-8-14", "0");
        localStorage.setItem("Time2-8-14", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>