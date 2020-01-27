<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $desarrollo = array('216','625','841','1 000','27','1 027','243','343','586','16','10 000','10 016','5','211','169','144','25','32','1','33','0','16 807');
?>
<body>
    <div class="container-two">
        <div class="container">
            <div class="item">
                <div class="grid-item smal">0 <span class="potencia">2</span> x 7<span class="potencia2">5</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>+</span>
                    <span>
                        <select class="slc" alt="16 807">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="16 807">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="grid-item smal">6 <span class="potencia">3</span> + 5<span class="potencia2">4</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="216">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>+</span>
                    <span>
                        <select class="slc" alt="625">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="841">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="grid-item smal">10 <span class="potencia">3</span> + 3<span class="potencia2">3</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="1 000">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>+</span>
                    <span>
                        <select class="slc" alt="27">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="1 027">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="grid-item smal">3 <span class="potencia">5</span> - 7<span class="potencia2">3</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="243">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>-</span>
                    <span>
                        <select class="slc" alt="343">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="586">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="grid-item smal">4 <span class="potencia">2</span> x 10<span class="potencia2">4</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="16">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>x</span>
                    <span>
                        <select class="slc" alt="10 000">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="10 016">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="grid-item smal">6 <span class="potencia">3</span> - 5<span class="potencia2">1</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="216">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>-</span>
                    <span>
                        <select class="slc" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="211">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($desarrollo); $i++) { 
                                    echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="grid-item smal">13 <span class="potencia">2</span> - 12<span class="potencia2">2</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="169">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>-</span>
                    <span>
                        <select class="slc" alt="144">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="25">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
            </div>
            <div class="item">
                <div class="grid-item smal">2 <span class="potencia">3</span> + 1<span class="potencia2">6</span></div>
                <div class="grid-item"><span>
                        <select class="slc" alt="32">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                    <span>+</span>
                    <span>
                        <select class="slc" alt="1">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                        </select>
                    </span>
                </div>
                <div class="grid-item">
                    <span>
                        <select class="slc" alt="33">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
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
function result_tipo_4_1_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 24) {
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