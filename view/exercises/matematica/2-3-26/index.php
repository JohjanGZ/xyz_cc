<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

    $numeros = array('3','7', '838','5','2', '5', '743','9', '8');

?>
<div class="container-two">
    <div class="filaUno">
        <div class="columna primero">
            <h5> b. David compró una olla arrocera y un horno. ¿Cuánto gastó?</h5>
            <img src="img/18/image.png" alt="">
        </div>
        <div class="tabla">
            <div class="contenedor">
                <div class="fila">
                    <div>Olla arrocera:</div>
                    <div>
                        <select class="slc" alt="2">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div>
                        <select class="slc" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div>
                        <select class="slc" alt="9">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="mas">+</div>
                </div>
                <div class="fila">
                    <div>Horno :</div>
                    <div>
                        <select class="slc" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div>
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div>
                        <select class="slc" alt="9">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div></div>
                </div>
                <hr>
                <div class="fila">
                    <div></div>
                    <div>
                        <select class="slc" alt="8">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div>
                        <select class="slc" alt="3">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div>
                        <select class="slc" alt="8">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="respuesta">
            <div><b>Respuesta:</b> David gastó S/
                <span>
                    <select class="slc" alt="838">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span> .
            </div>
        </div>
    </div>

</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/18/respuesta.png">
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

    if (slcalt == slcval) {
        r++;
        console.log(r);
    }
});

function result_tipo_2_3_26() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-25", "2");
        localStorage.setItem("Time2-3-25", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-25", "0");
        localStorage.setItem("Time2-3-25", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>