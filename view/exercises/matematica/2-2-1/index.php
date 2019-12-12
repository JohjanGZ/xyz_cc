<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('3','60','6','466');
?>
<body>

    <div class="container-two aleatorio">
        <div class="cajada">
            <div class="number"><img src="img/1/uno.png" class="materialboxed" alt=""></div>
            <div class="fila2">
                <span>
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=6; $i < 12; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                centenas,
                <span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 5; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                decenas y
                <span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=2; $i < 7; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                unidades
            </div>
            <div class="fila3">
                <span>
                    <select class="slc" alt="900">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=898; $i < 906; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="20">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=18; $i < 23; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 7; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                =
                <span>
                    <select class="slc" alt="925">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=923; $i < 929; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
        </div>
        <div class="cajada">
            <div class="number"><img src="img/1/dos.png"  class="materialboxed"alt=""></div>
            <div class="fila2">
                <span>
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=3; $i < 9; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                centenas,
                <span>
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=6; $i >= 0; $i--) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                decenas y
                <span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=5; $i < 8; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                unidades
            </div>
            <div class="fila3">
                <span>
                    <select class="slc" alt="700">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=699; $i < 704; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 5; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 8; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                =
                <span>
                    <select class="slc" alt="706">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=703; $i < 707; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
        </div>
        <div class="cajada">
            <div class="number"><img src="img/1/tres.png"  class="materialboxed"alt=""></div>
            <div class="fila2">
                <span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 7; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                centenas,
                <span>
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=3; $i < 9; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                decenas y
                <span>
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                           for ($i=0; $i < 6; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </span>
                unidades
            </div>
            <div class="fila3">
                <span>
                    <select class="slc" alt="600">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=597; $i < 604; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="70">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=67; $i < 74; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                +
                <span>
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 5; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </span>
                =
                <span>
                    <select class="slc" alt="670">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=668; $i < 674; $i++) { 
                                echo "<option value='$i'>$i</option>";
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
                <img class="materialboxed" width="80%" src="img/1/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
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


// Validar
function result_tipo_2_2_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 21) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}


var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});

</script>