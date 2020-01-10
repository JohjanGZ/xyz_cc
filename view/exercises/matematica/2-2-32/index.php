<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('120','90','140','50','70');
?>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <img src="<?= $dir ?>/img/imagen.png" alt="">
    </div>
    <div class="table">
        <h6 class="preg">¿Cuántos niños prefieren cada color?</h6>
        <p class="info">Completa la tabla de datos.</p>
        <div class="minitable">
            <div class="title"><h6> Preferencias </h6></div>
            <div class="subtitle"><h6>Colores</h6></div>
            <div class="subtitle"><h6>N.° de niños</h6></div>
            <div><p>Rojo</p></div>
            <div>
                <select class="slc" alt="50">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div><p>Morado</p></div>
            <div>
                <select class="slc" alt="70">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div><p>Verde</p></div>
            <div>
                <select class="slc" alt="140">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div><p>Azul</p></div>
            <div>
                <select class="slc" alt="90">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div><p>Amarillo</p></div>
            <div>
                <select class="slc" alt="120">
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

    // Select
    var r = 0;
    $(".slc").change(function() {
        slcalt = $(this).attr("alt");
        slcval = $(this).val();
        console.log(slcalt);
        console.log(slcval);
        if (slcalt == slcval) {
            r++;
        }
    });



function result_tipo_2_2_32() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
        localStorage.setItem("Nota2-2-32", "2");
        localStorage.setItem("Time2-2-32", tiempo);
        correcto();

    } else {
        incorrecto();
        localStorage.setItem("Nota2-2-32", "0");
        localStorage.setItem("Time2-2-32", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>