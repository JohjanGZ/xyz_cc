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
    padding: 0 50px;
}

@media (min-width: 1920px) {
    #palabras {
        padding: 50px;
    }
}

#palabras li {
    width: 100%;
    margin-bottom: 5px;
    text-align: center;
}

#palabras li>img {
    border: 3px solid silver;
    border-radius: 10px;
    padding: 10px;
    width: auto;
    height: 160px;
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

img.img-principal {
    width: auto;
    height: 190px;
    margin-top: 5vh;
}
</style>
<?=$titulo?>
<div class="container">
    <div class="row">
        <div class="contenedor-ejercicio">
            <div class="oraciones">
                <p>
                    Una
                    <span class="pieza" alt="uno">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    entre la mano y el auto.
                </p>
                <p>
                    Una
                    <span class="pieza" alt="dos">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </span>
                    entre el martillo y el chupetín.
                </p>
                <p>
                    Un
                    <span class="pieza" alt="tres">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </span>
                    entre el martillo y la maceta.
                </p>
            </div>
            <div class="contenedor-rueda">
                <div class="rueda">
                    <div class="rueda-item dropx contenedor uno" alt="dos">
                    
                    </div>
                    <div class="rueda-item dropx contenedor dos" alt="tres">
                    
                    </div>
                    <div class="rueda-item dropx contenedor tres" alt="uno">
                    
                    </div>
                    <div class="rueda-item-imagen cuatro">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                    </div>
                    <div class="rueda-item-imagen cinco">
                        <img src="<?= $dir ?>/img/5.png" alt="">

                    </div>
                    <div class="rueda-item-imagen seis">
                        <img src="<?= $dir ?>/img/6.png" alt="">

                    </div>
                    <div class="rueda-item-imagen siete">
                        <img src="<?= $dir ?>/img/7.png" alt="">

                    </div>
                    <div class="rueda-item-imagen ocho">
                        <img src="<?= $dir ?>/img/8.png" alt="">

                    </div>
                    <div class="rueda-item-imagen nueve">
                        <img src="<?= $dir ?>/img/9.png" alt="">

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

function result_tipo_1_0_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (r == 3) {
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