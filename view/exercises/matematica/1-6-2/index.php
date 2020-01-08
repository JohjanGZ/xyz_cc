<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                </div>
                <div class="grid-caja">
                    <div class="grid-campo c">C</div>
                    <div class="grid-campo d">D</div>
                    <div class="grid-campo u">U</div>

                    <div class="grid-campo">
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-campo">
                        <select class="slc" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-campo">
                        <select class="slc" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/2.png" class="img materialboxed">
                </div>
                <div class="grid-caja">
                    <div class="grid-campo c">C</div>
                    <div class="grid-campo d">D</div>
                    <div class="grid-campo u">U</div>

                    <div class="grid-campo c">
                        <select class="slc" alt="8">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-campo d">
                        <select class="slc" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-campo u">
                        <select class="slc" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/3.png" class="img materialboxed">
                </div>
                <div class="grid-caja">
                    <div class="grid-campo c">C</div>
                    <div class="grid-campo d">D</div>
                    <div class="grid-campo u">U</div>

                    <div class="grid-campo c">
                        <select class="slc" alt="3">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-campo d">
                        <select class="slc" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-campo u">
                        <select class="slc" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/4.png" class="img materialboxed">
                </div>
                <div class="grid-caja">
                    <div class="grid-campo c">C</div>
                    <div class="grid-campo d">D</div>
                    <div class="grid-campo u">U</div>

                    <div class="grid-campo c">
                        <select class="slc" alt="" disabled>
                            <option value="" selected>2</option>
                        </select>
                    </div>
                    <div class="grid-campo d">
                        <select class="slc" alt="" disabled>
                            <option value="" selected>0</option>
                        </select>
                    </div>
                    <div class="grid-campo u">
                        <select class="slc" alt="" disabled>
                            <option value="" selected>0</option>
                        </select>
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
function result_tipo_1_6_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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