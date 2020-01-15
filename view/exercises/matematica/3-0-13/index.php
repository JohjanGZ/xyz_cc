<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="grid-preguntas">
        <div class="grid-pregunta">
            <div class="grid-container">
                <!-- 1 -->
                <div class="pregunta">
                    <div class="image">
                        <img src="<?=$dir?>/img/1.png" class="img-o">
                    </div>
                    <div class="options">
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o1.png" class="img"></span>
                            </label>
                        </div>
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="n" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o2.png" class="img"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="pregunta">
                    <div class="image">
                        <img src="<?=$dir?>/img/2.png" class="img-o">
                    </div>
                    <div class="options">
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="n" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o1.png" class="img"></span>
                            </label>
                        </div>
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o2.png" class="img"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="pregunta">
                    <div class="image">
                        <img src="<?=$dir?>/img/3.png" class="img-o">
                    </div>
                    <div class="options">
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o1.png" class="img"></span>
                            </label>
                        </div>
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="n" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o2.png" class="img"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="pregunta">
                    <div class="image">
                        <img src="<?=$dir?>/img/4.png" class="img-o">
                    </div>
                    <div class="options">
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="n" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o1.png" class="img"></span>
                            </label>
                        </div>
                        <div class="option">
                            <label>
                                <input type="checkbox" class="optn" alt="" />
                                <span class="txtopt c1"><img src="<?=$dir?>/img/o2.png" class="img"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
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
// Formulario - Registrados

function result_tipo_3_0_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>