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
        <div class="row">
            <div class="col l9">
                <div class="grid-contenedor">
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"><span>4</span></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>

                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item palabra" alt="7"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>

                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item palabra" alt="4"></div>
                    <div class="item bn"></div>
                    <div class="item bn"><span>1</span></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>

                    <div class="item bn"><span>6</span></div>
                    <div class="item palabra" alt="2"></div>
                    <div class="item palabra" alt="0"></div>
                    <div class="item palabra" alt="5"></div>
                    <div class="item palabra" alt="8"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>

                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item palabra" alt="1"></div>
                    <div class="item bn"></div>
                    <div class="item palabra" alt="7"></div>
                    <div class="item bn"></div>
                    <div class="item bn"><span>3</span></div>

                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"><span>2</span></div>
                    <div class="item palabra" alt="4"></div>
                    <div class="item palabra" alt="5"></div>
                    <div class="item palabra" alt="1"></div>
                    <div class="item palabra" alt="6"></div>

                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item palabra" alt="0"></div>
                    <div class="item bn"></div>
                    <div class="item palabra" alt="4"></div>

                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item palabra" alt="3"></div>

                    <div class="item bn"></div>
                    <div class="item bn"></div>
                    <div class="item bn"><span>5</span></div>
                    <div class="item palabra" alt="7"></div>
                    <div class="item palabra" alt="1"></div>
                    <div class="item palabra" alt="3"></div>
                    <div class="item palabra" alt="9"></div>
                </div>
            </div>
            <div class="col l3">
                <div class="grid-options">
                    <div class="datos"><span>1.</span> 9 000 – 250 =</div>
                    <div class="datos"><span>2.</span> 7 000 – 2 484 =</div>
                    <div class="datos"><span>3.</span> 8 000 – 1 561 =</div>
                    <div class="datos"><span>4.</span> 9 000 – 1 599 =</div>
                    <div class="datos"><span>5.</span> 10 000 – 2 861 =</div>
                    <div class="datos"><span>6.</span> 5 000 – 2 942 =</div>
                </div>
                <div id="numeros"></div>
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
function result_tipo_3_2_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    if (r == 19) {
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