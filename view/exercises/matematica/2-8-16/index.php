<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="content">
        <div class="box boxuno" alt="oo">
            <select class="slc seleccion" alt="5954">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 5950; $i < 5955; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="box boxdos" alt="oo">
            <select class="slc seleccion" alt="7683">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 7688; $i > 7682; $i--) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="box boxtres" alt="oo">
            <select class="slc seleccion" alt="4720">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 4716; $i < 4721; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="box boxcuatro" alt="oo">
            <select class="slc seleccion" alt="6516">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 6510; $i < 6517; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="box boxcinco" alt="oo">
            <select class="slc seleccion" alt="7875">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 7880; $i > 7874; $i--) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="box boxseis" alt="oo">
            <select class="slc seleccion" alt="6436">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 6430; $i < 6437; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="box boxsiete" alt="oo">
            <select class="slc seleccion" alt="5783">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 5778; $i < 5788; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </div>
        <div class="box boxocho" alt="oo">
            <select class="slc seleccion" alt="4673">
                <option value="" disabled selected></option>
                <?php
                    for ($i = 4680; $i > 4672; $i--) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
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


function result_tipo_2_8_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 8) {
        console.log(r);
        localStorage.setItem("Nota2-8-16", "2");
        localStorage.setItem("Time2-8-16", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-8-16", "0");
        localStorage.setItem("Time2-8-16", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>