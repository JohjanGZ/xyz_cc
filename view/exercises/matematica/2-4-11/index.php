<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $producto = array('polo grande','pantalón grande','gorro grande','polo mediano','pantalón mediano','gorro mediano','polo pequeño','pantalón pequeño','gorro pequeño');
?>

<body>
    <div class="caja-principal">
        <div class="content">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
            </div>
            <div class="tabla">
                <div class="header">
                    <div></div>
                    <div class="hd">Pequeño</div>
                    <div class="hd">Mediano</div>
                    <div class="hd">Grande</div>
                </div>
                <div class="filas">
                    <div class="fila">
                        <div>Pantalón</div>
                        <div>
                            <select class="slc seleccion" alt="12">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="19">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="10">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="fila">
                        <div>Polo</div>
                        <div>
                            <select class="slc seleccion" alt="12">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="5">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="4">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="fila">
                        <div>Gorro</div>
                        <div>
                            <select class="slc seleccion" alt="8">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="9">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div>
                            <select class="slc seleccion" alt="6">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=1; $i < 20; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="preguntas">
                <div class="pregunta">
                    <span> a. ¿Qué producto se vendió más?</span>
                    <span>
                        <select class="slc seleccion" alt="pantalón mediano">
                            <option value="" disabled selected></option>
                            <?php
                               foreach ($producto as $i) { 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="pregunta">
                    <span> b. ¿Qué producto se vendió menos?</span>
                    <span>
                        <select class="slc seleccion" alt="polo grande">
                            <option value="" disabled selected></option>
                            <?php
                                foreach ($producto as $i) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="100%" src="<?= $dir ?>/img/respuesta.png">
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

<script type="text/javascript">
// Validar


function result_tipo_2_4_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 11) {
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