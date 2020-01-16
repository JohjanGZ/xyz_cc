<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('1574','1451','123','234','1340'); ?>

<body>

    <div class="container-two">
        <span class="mb"><span class="s">a.</span> En una establo habían 1 340 vacas; luego trajeron 234 más y, finalmente vendieron 123.
            ¿Cuántas vacas quedaron en el establo?</span>
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab"><a class="active" href="#test1">1.° Lee y comprende el problema</a></li>
            <li class="tab"><a href="#test2">2.° Plantea un estrategia</a></li>
            <li class="tab"><a href="#test3">3.° Aplica la estrategia</a></li>
            <li class="tab"><a href="#test4">4.° Responde y comprueba</a></li>
        </ul>
        <div id="test1" class="col s12 test">
            <div class="grid-item">
                <div class="item">
                    <span class="so">Datos:</span>
                </div>
                <div class="grid-respuest">
                    <div class="item">
                        • En el establo hay
                        <select class="seleccion" alt="1340">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        .
                    </div>
                    <div class="item">
                        • Trajeron
                        <select class="seleccion" alt="234">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        vacas más.
                    </div>
                    <div class="item">
                        • Vendieron
                        <select class="seleccion" alt="123">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        vacas.
                    </div>
                    <div class="item">
                        • Quedaron
                        <select class="seleccion" alt="1451">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        vacas.
                    </div>
                </div>
            </div>
        </div>
        <div id="test2" class="col s12 test">
            <div class="grid-item">
                <div class="item">
                    <span>Para saber cuántas vacas quedaron
                        en el establo, planteamos una
                        operación combinada.</span>
                </div>
                <div class="grid-respuesta">
                    <div class="item so">había</div>
                    <div class="item so">trajeron</div>
                    <div class="item so">vendieron</div>
                    <div class="item">
                        <span class="s">(</span>
                        <select class="seleccion" alt="1340">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <span class="s">+</span>
                        <select class="seleccion" alt="234">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">)</span>
                    </div>
                    <div class="item">
                        <span class="s">-</span>
                        <select class="seleccion" alt="123">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div id="test3" class="col s12 test">
            <div class="grid-item">
                <div class="grid-respuesta2">
                    <div class="item">
                        <span class="s">(</span>
                        <select class="seleccion" alt="1340">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <span class="s">+</span>
                        <select class="seleccion" alt="234">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">)</span>
                    </div>
                    <div class="item">
                        <span class="s"> - </span>
                        <select class="seleccion" alt="123">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">=</span>
                    </div>
                    <div class="item">x</div>
                </div>
                <div class="grid-respuesta2">
                    <div class="item">
                        <select class="seleccion" alt="1574">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <span class="s"> - </span>
                        <select class="seleccion" alt="123">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">=</span>
                    </div>
                    <div class="item">x</div>
                </div>
                <div class="grid-respuesta2">
                    <div class="item">
                        <select class="seleccion" alt="1451">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">=</span>
                    </div>
                    <div class="item">x</div>
                </div>
            </div>
        </div>
        <div id="test4" class="col s12 test">
            <div class="grid-item">
                <div class="grid-respuest">
                    <div class="item">
                        • Quedaron
                        <select class="seleccion" alt="1451">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        en el establo.
                    </div>
                    <div class="item">
                        • Para comprobar, lee nuevamente el problema
                        y resuelve las operaciones para verificar la
                        respuesta.
                    </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_2_27() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 14) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>