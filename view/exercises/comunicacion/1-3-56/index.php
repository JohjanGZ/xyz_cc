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
                    <li alt="1" class="a" id="obj1"><span>ca</span></li>
                    <li alt="2" class="a" id="obj2"><span>ca</span></li>
                    <li alt="3" class="a" id="obj3"><span>tan</span></li>
                    <li alt="4" class="a" id="obj4"><span>sa</span></li>
                </ul>

            </div>
            <div class="campo" id="centro">
                <canvas height="400px" width="280px" id="micanvas"></canvas>
            </div>
            <div class="campo" id="imgDerecha">
                <ul id="listB">
                    <li alt="1" class="b" id="obj1"><span>pa</span></li>
                    <li alt="2" class="b" id="obj2"><span>lle</span></li>
                    <li alt="3" class="b" id="obj3"><span>que</span></li>
                    <li alt="4" class="b" id="obj4"><span>co</span></li>
                </ul>
            </div>

        </div>
    </div>
    </section>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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
        function result_tipo_1_3_56() {
            var min = $('#Minutos').text();
            var seg = $('#Segundos').text();
            var milseg = $('#Centesimas').text();
            var tiempo = min + ":" + seg + ":" + milseg;

            if (r == 4) {
                console.log(r);
                localStorage.setItem("Nota<?= $dir ?>", "2");
                localStorage.setItem("Time<?= $dir ?>", tiempo);
                correcto();
            } else {
                incorrecto();
                console.log(r);
                localStorage.setItem("Nota<?= $dir ?>", "0");
                localStorage.setItem("Time<?= $dir ?>", tiempo);
            }
        }
    </script>