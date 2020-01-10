<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
    $numbers = array('556 + 436','396 + 206','436 + 556','206 + 396','435 + 556','556 + 466');
    $result = array('602','962','992','206','682','862');
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
                                <select class="slc seleccion" id="slc2" alt="436 + 556">
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
                                <select class="slc seleccion" id="slc2" alt="556 + 436">
                                    <option value="" disabled selected></option>
                                    <?php foreach($numbers as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="filatres">
                        <div class="conte">
                            <span>
                                <select class="slc seleccion" id="slc2" alt="992">
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
                                <select class="slc seleccion" id="slc2" alt="992">
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
            <div class="item">
                <div class="columna">
                    <div class="fila">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </div>
                    <div class="filados">
                        <div class="conte">
                            <span>
                                <select class="slc seleccion" id="slc2" alt="206 + 396">
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
                                <select class="slc seleccion" id="slc2" alt="396 + 206">
                                    <option value="" disabled selected></option>
                                    <?php foreach($numbers as $n) : ?>
                                    <option value="<?= $n ?>"><?= $n ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="filatres">
                        <div class="conte">
                            <span>
                                <select class="slc seleccion" id="slc2" alt="602">
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
                                <select class="slc seleccion" id="slc2" alt="602">
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
function result_tipo_2_2_21() {

    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 8) {
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