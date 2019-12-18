<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
    $numbers = array('(436 + 556) + 206','(436 + 556) + 206','(436 + 556) + 206','436 + (556 + 206)','436 + (556 + 206)','436 + (556 + 206)');
    $subrpt = array('992 + 208','992 + 206','436 + 762','435 + 762');
    $result = array('1196','1178','1198','1298');
?>
<div class="container">
    <section id="contenedorpuzzle">
        <div class="image uno">
            <img src="<?= $dir ?>/img/1.png" alt="">
        </div>
        <div class="containerProblems aleatorio">
            <div class="item">
                <div class="columna">
                    <div class="fila">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>
                    <div class="filados">
                        <div class="conte">
                            <span>
                                <select class="slc seleccion" id="slc2" alt="(436 + 556) + 206">
                                    <option value="" disabled selected></option>
                                    <?php foreach($numbers as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                            <div class="rojo">
                                =
                            </div>
                            <span>
                                <select class="slc seleccion" id="slc2" alt="436 + (556 + 206)">
                                    <option value="" disabled selected></option>
                                    <?php foreach($numbers as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="filado">
                        <div class="conte">
                            <span>
                                <select class="slc seleccion" id="slc2" alt="992 + 206">
                                    <option value="" disabled selected></option>
                                    <?php foreach($subrpt as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                            <div class="rojo">
                                =
                            </div>
                            <span>
                                <select class="slc seleccion" id="slc2" alt="436 + 762">
                                    <option value="" disabled selected></option>
                                    <?php foreach($subrpt as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="filatres">
                        <div class="conte">
                            <span>
                                <select class="slc seleccion" id="slc2" alt="1198">
                                    <option value="" disabled selected></option>
                                    <?php foreach($result as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                            <div class="rojo">
                                =
                            </div>
                            <span>
                                <select class="slc seleccion" id="slc2" alt="1198">
                                    <option value="" disabled selected></option>
                                    <?php foreach($result as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>
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
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
function result_tipo_2_3_16() {

    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 6) {
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