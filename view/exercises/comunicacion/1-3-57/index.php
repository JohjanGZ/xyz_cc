<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>

    <div class="container-two">
        <div class="svg">
            <div class="campo" id="Izquierda">
                <ul id="listA">
                    <li class="a" alt="1" id="obj1"><span>ta</span></li>
                    <li class="a" alt="2" id="obj2"><span>es</span></li>
                    <li class="a" alt="3" id="obj3"><span>ca</span></li>
                    <li class="a" alt="4" id="obj4"><span>ca</span></li>
                </ul>
            </div>
            <canvas id="canvas_1"></canvas>
            <div class="campo" id="Centro">
                <ul id="listB">
                    <li class="b" alt="1" id="obj1"><span>ba</span></li>
                    <li class="b" alt="2" id="obj2"><span>qui</span></li>
                    <li class="b" alt="3" id="obj3"><span>si</span></li>
                    <li class="b" alt="4" id="obj4"><span>mi</span></li>
                </ul>
            </div> 
            <canvas id="canvas_2"></canvas>
            <div class="campo" id="Derecha">
                <ul id="listC">
                    <li class="c" alt="1" id="obj1"><span>co</span></li>
                    <li class="c" alt="2" id="obj2"><span>mal</span></li>
                    <li class="c" alt="3" id="obj3"><span>llo</span></li>
                    <li class="c" alt="4" id="obj4"><span>no</span></li>
                </ul>
            </div> 
        </div>
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
    <?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>

    <script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>

    <script type="text/javascript">
        function result_tipo_1_3_57() {
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
                console.log(r);
                incorrecto();
                localStorage.setItem("Nota<?= $dir ?>", "0");
                localStorage.setItem("Time<?= $dir ?>", tiempo);
            }
        }
    </script>