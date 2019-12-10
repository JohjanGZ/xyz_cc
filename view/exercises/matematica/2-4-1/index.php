<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php 
    $numeros = array('0','1','2','3','4','5','6','7','8','9');
?>
<?=$titulo?>
<div class="container-two">
    <div class="containerPrincipal">
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">4</div>
                <div class="box">2</div>
                <div class="box">4</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">3</div>
                <div class="box">0</div>
                <div class="box">1</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">3</div>
                <div class="box">9</div>
                <div class="box">5</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">1</div>
                <div class="box">3</div>
                <div class="box">5</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="0">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">2</div>
                <div class="box">6</div>
                <div class="box">8</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">2</div>
                <div class="box">1</div>
                <div class="box">2</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="0">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="5">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">3</div>
                <div class="box">6</div>
                <div class="box">5</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">1</div>
                <div class="box">3</div>
                <div class="box">2</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="3">
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
    <div class="containerPrincipal">
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">4</div>
                <div class="box">4</div>
                <div class="box">6</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">1</div>
                <div class="box">3</div>
                <div class="box">6</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="0">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">3</div>
                <div class="box">6</div>
                <div class="box">2</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">2</div>
                <div class="box">4</div>
                <div class="box">1</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">4</div>
                <div class="box">9</div>
                <div class="box">8</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">2</div>
                <div class="box">3</div>
                <div class="box">0</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
            </div>
        </div>
        <div class="tabla">
            <div class="fila">
                <div class="box"></div>
                <div class="box">4</div>
                <div class="box">3</div>
                <div class="box">8</div>
            </div>
            <div class="fila">
                <div class="box">-</div>
                <div class="box">2</div>
                <div class="box">0</div>
                <div class="box">4</div>
            </div>
            <hr>
            <div class="respuesta">
                <div></div>
                <select class="slc" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
                </select>
                <select class="slc" alt="4">
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
            <img class="materialboxed" width="80%" src="img/13-5/respuesta.png">
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
        console.log(r);
    }
});



// Formulario - Registrados

function result_tipo_2_4_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 24) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-21", "2");
        localStorage.setItem("Time2-3-21", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-21", "0");
        localStorage.setItem("Time2-3-21", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>