<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $angulo = array('recto','llano','agudo','obtuso','90º','360º','180º','45º','135º','70º','60º');
?>

<body>
    <div class="container-two">
        <div class="row">
            <div class="col l4">
                <img src="<?=$dir?>/img/principal.png" class="principal materialboxed">
            </div>
            <div class="col l8">
                <div class="grid-cabecera">
                    <div class="grid-item-cabecera clr">
                        Inasistencias de alumnos de una escuela primaria durante una semana
                    </div>
                </div>
                <div class="grid-head">
                    <div class="grid-item-head clr">Días</div>
                    <div class="grid-item-head clr">Frecuencia</div>
                </div>
                <div class="grid-container">
                    <!-- 1 -->
                    <div class="grid-caja">
                        <div class="grid-item">
                            Lunes
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="obtuso">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="grid-caja">
                        <div class="grid-item">
                            Martes
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="llano">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="grid-caja">
                        <div class="grid-item">
                            Miércoles
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="recto">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="grid-caja">
                        <div class="grid-item">
                            Jueves
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="agudo">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < 4; $i++) { 
                                        echo "<option value='$angulo[$i]'>$angulo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
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
function result_tipo_3_6_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 8) {
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