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
        <center>
            <img src="<?= $dir ?>/img/principal.png" class="img">
        </center>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/1.png">
<<<<<<< HEAD:view/exercises/matematica/1-1-13/index.php
                    <div class="contenedor" alt="3"></div>
                    <img src="<?= $dir ?>/img/2.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <div class="contenedor" alt="5"></div>
                    <img src="<?= $dir ?>/img/3.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/4.png">
                    <div class="contenedor" alt="6"></div>
                    <img src="<?= $dir ?>/img/5.png">
                </div>
            </div>

            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/6.png">
                    <div class="contenedor" alt="5"></div>
                    <img src="<?= $dir ?>/img/7.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <div class="contenedor" alt="7"></div>
                    <img src="<?= $dir ?>/img/8.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/9.png">
                    <div class="contenedor" alt="3"></div>
=======
                    <div class="caja contenedor" alt="1"></div>
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/1-1-6/index.php
                </div>
            </div>

            <div class="grid-item">
                <div class="flex-box">
<<<<<<< HEAD:view/exercises/matematica/1-1-13/index.php
                    <div class="contenedor" alt="1"></div>
                    <img src="<?= $dir ?>/img/10.png">
=======
                    <img src="<?= $dir ?>/img/2.png">
                    <div class="caja contenedor" alt="8"></div>
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/1-1-6/index.php
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
<<<<<<< HEAD:view/exercises/matematica/1-1-13/index.php
                    <img src="<?= $dir ?>/img/11.png">
                    <div class="contenedor" alt="7"></div>
                    <img src="<?= $dir ?>/img/12.png">
=======
                    <img src="<?= $dir ?>/img/3.png">
                    <div class="caja contenedor" alt="7"></div>
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/1-1-6/index.php
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
<<<<<<< HEAD:view/exercises/matematica/1-1-13/index.php
                    <img src="<?= $dir ?>/img/13.png">
                    <div class="contenedor" alt="6"></div>
=======
                    <img src="<?= $dir ?>/img/4.png">
                    <div class="caja contenedor" alt="5"></div>
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/1-1-6/index.php
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
<<<<<<< HEAD:view/exercises/matematica/1-1-13/index.php
            <ul class="opciones">
                <?php
                $opciones = array('3','5','6','5','7','3','1','7','6','8','10','4');
                for ($i=0; $i < count($opciones); $i++) { 
                    echo "<li alt='$opciones[$i]' class='pieza'>
                            <span>$opciones[$i]</span>
                          </li>";
                }
            ?>
=======
            <ul class="opciones aleatorio">
                <li id="1" alt="1" class="pieza">
                    <span>1</span>
                </li>
                <li id="2" alt="2" class="pieza">
                    <span>2</span>
                </li>
                <li id="3" alt="3" class="pieza">
                    <span>3</span>
                </li>
                <li id="4" alt="4" class="pieza">
                    <span>4</span>
                </li>
                <li id="5" alt="5" class="pieza">
                    <span>5</span>
                </li>
                <li id="6" alt="6" class="pieza">
                    <span>6</span>
                </li>
                <li id="7" alt="7" class="pieza">
                    <span>7</span>
                </li>
                <li id="8" alt="8" class="pieza">
                    <span>8</span>
                </li>
                <li id="9" alt="9" class="pieza">
                    <span>9</span>
                </li>
                <li id="10" alt=" 10" class="pieza">
                    <span>10</span>
                </li>
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/1-1-6/index.php
            </ul>
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
function result_tipo_1_1_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

<<<<<<< HEAD:view/exercises/matematica/1-1-13/index.php
    if (r == 9) {
=======
    if (r == 4) {
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/1-1-6/index.php
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