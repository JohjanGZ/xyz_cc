<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">
h4 {
    text-align: center;
}

#listA {
    display: flex;
    flex-wrap: wrap;
}

#palabras {
    padding: 50px;
}

#palabras li {
    width: 100%;
    margin-bottom: 5px;
    text-align: center;
}

#palabras li>img {
    /* border: 3px solid silver; */
    border-radius: 10px;
    /* padding: 25px; */
}

#palabras li>span {
    font-size: 22px;
    letter-spacing: 10px;
    padding-left: 8px;
    border: 3px solid transparent;
    cursor: pointer;
}

#palabras li>span:hover {
    border: 3px solid #37D3F7;
    border-radius: 5px;
}

@media (min-width: 600px) {
    #palabras li {
        width: 200PX;
        margin: auto;
        margin-bottom: 2vh;
    }
}
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="campo" id="palabras">
            <ul id="listA">
                <li>
                    <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                    <span class="a" alt="">9</span>/
                    <span class="a" alt="n">1</span>/
                    <span class="a" alt="">3</span>
                </li>
                <li>
                    <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                    <span class="a" alt="n">2</span>/
                    <span class="a" alt="">7</span>/
                    <span class="a" alt="">8</span>
                </li>
                <li>
                    <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                    <span class="a" alt="n">3</span>/
                    <span class="a" alt="">9</span>/
                    <span class="a" alt="">1</span>
                </li>
                <li>
                    <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                    <span class="a" alt="">7</span>/
                    <span class="a" alt="n">4</span>/
                    <span class="a" alt="">5</span>
                </li>
                
                <li>
                    <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                    <span class="a" alt="">9</span>/
                    <span class="a" alt="">1</span>/
                    <span class="a" alt="n">8</span>
                </li>
                <li>
                    <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                    <span class="a" alt="n">10</span>/
                    <span class="a" alt="">15</span>/
                    <span class="a" alt="">8</span>
                </li>
                <li>
                    <img src="<?= $dir ?>/img/7.png" class="responsive-img">
                    <span class="a" alt="">3</span>/
                    <span class="a" alt="n">9</span>/
                    <span class="a" alt="">1</span>
                </li>
                <li>
                    <img src="<?= $dir ?>/img/8.png" class="responsive-img">
                    <span class="a" alt="">7</span>/
                    <span class="a" alt="n">6</span>/
                    <span class="a" alt="">5</span>
                </li>
            </ul>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_1_0_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>