<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
    <div class="container">
        <div class="row svg">

            <div class="campo" id="imgIzquierda">

                <ul id="listA">
                    <li alt="r" class="a" id="obj1">
                        <h4>repta</h4>
                    </li>
                    <li alt="v" class="a" id="obj2">
                        <h4>vuela</h4>
                    </li>
                    <li alt="s" class="a" id="obj2">
                        <h4>salta</h4>
                    </li>
                </ul>

            </div>
            <div class="campo" id="centro">
                <canvas height="400px" width="280px" id="micanvas"></canvas>
            </div>
            <div class="campo" id="imgDerecha">
                <ul id="listB">
                    <li alt="r" class="b" id="obj1"><img src="<?= $dir ?>/img/1.png"></li>
                    <li alt="s" class="b" id="obj2"><img src="<?= $dir ?>/img/2.png"></li>
                    <li alt="v" class="b" id="obj2"><img src="<?= $dir ?>/img/3.png"></li>
                </ul>
            </div>

        </div>
        <div class="row fila2">

        </div>
    </div>
    </section>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.jpg">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>

    <script src="../../../../../js/core.js"></script>
    <?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>

    <script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>

    <script type="text/javascript">
        function result_tipo_1_3_16() {
            var min = $('#Minutos').text();
            var seg = $('#Segundos').text();
            var milseg = $('#Centesimas').text();
            var tiempo = min + ":" + seg + ":" + milseg;

            if (r == 3) {
                localStorage.setItem("Nota<?= $dir ?>", "2");
                localStorage.setItem("Time<?= $dir ?>", tiempo);
                correcto();
            } else {
                incorrecto();
                localStorage.setItem("Nota<?= $dir ?>", "0");
                localStorage.setItem("Time<?= $dir ?>", tiempo);
            }
        }
    </script>