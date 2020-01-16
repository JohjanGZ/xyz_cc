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
        <div class="grid-container">
            <div class="grid-item">
                <div class="item">
                    <span class="s">•</span>a<span class="s">-</span>512<span class="s">=</span>36
                </div>
                <div class="grid-respuesta">
                    <div class="item">
                        a
                        <span class="s">=</span>
                        <div class="total" alt="3"></div>
                        <div class="total" alt="6"></div>
                        <span class="s">+</span>
                        <div class="total" alt="5"></div>
                        <div class="total" alt="1"></div>
                        <div class="total" alt="2"></div>
                    </div>
                    <div class="item">
                        a
                        <span class="s">=</span>
                        <div class="total" alt="5"></div>
                        <div class="total" alt="4"></div>
                        <div class="total" alt="8"></div>
                    </div>
                </div>

            </div>

            <div class="grid-item">
                <div class="item">
                    <span class="s">•</span>512<span class="s">+</span>b<span class="s">=</span>700
                </div>
                <div class="grid-respuesta">
                    <div class="item">
                        b
                        <span class="s">=</span>
                        <div class="total" alt="7"></div>
                        <div class="total" alt="0"></div>
                        <div class="total" alt="0"></div>
                        <span class="s">-</span>
                        <div class="total" alt="5"></div>
                        <div class="total" alt="1"></div>
                        <div class="total" alt="2"></div>
                    </div>
                    <div class="item">
                        b
                        <span class="s">=</span>
                        <div class="total" alt="1"></div>
                        <div class="total" alt="8"></div>
                        <div class="total" alt="8"></div>
                    </div>
                </div>

            </div>

            <div class="grid-item">
                <div class="item">
                    <span class="s">•</span>725<span class="s">+</span>22<span class="s">-</span>c<span
                        class="s">=</span>34
                </div>
                <div class="grid-respuesta">
                    <div class="item">
                        <div class="total" alt="7"></div>
                        <div class="total" alt="4"></div>
                        <div class="total" alt="7"></div>
                        <span class="s">-</span>
                        <div class="total" alt="3"></div>
                        <div class="total" alt="4"></div>
                        <span class="s">=</span>
                        c
                    </div>
                    <div class="item">
                        <div class="total" alt="7"></div>
                        <div class="total" alt="1"></div>
                        <div class="total" alt="3"></div>
                        <span class="s">=</span>
                        c
                    </div>
                </div>

            </div>

            <div class="grid-item">
                <div class="item">
                    <span class="s">•</span>512<span class="s">+</span>21<span class="s">=</span>c<span
                        class="s">+</span>128
                </div>
                <div class="grid-respuesta">
                    <div class="item">
                        <div class="total" alt="5"></div>
                        <div class="total" alt="3"></div>
                        <div class="total" alt="3"></div>
                        <span class="s">-</span>
                        <div class="total" alt="1"></div>
                        <div class="total" alt="2"></div>
                        <div class="total" alt="8"></div>
                        <span class="s">=</span>
                        c
                    </div>
                    <div class="item">
                        <div class="total" alt="4"></div>
                        <div class="total" alt="0"></div>
                        <div class="total" alt="5"></div>
                        <span class="s">=</span>
                        c
                    </div>
                </div>

            </div>

            <div class="grid-item">
                <div class="item">
                    <span class="s">•</span>215<span class="s">+</span>34<span class="s">-</span>a<span
                        class="s">=</span>128
                </div>
                <div class="grid-respuesta">
                    <div class="item">
                        <div class="total" alt="2"></div>
                        <div class="total" alt="4"></div>
                        <div class="total" alt="9"></div>
                        <span class="s">-</span>
                        <div class="total" alt="1"></div>
                        <div class="total" alt="2"></div>
                        <div class="total" alt="8"></div>
                        <span class="s">=</span>
                        a
                    </div>
                    <div class="item">
                        <div class="total" alt="1"></div>
                        <div class="total" alt="2"></div>
                        <div class="total" alt="1"></div>
                        <span class="s">=</span>
                        a
                    </div>
                </div>

            </div>

            <div class="grid-item">
                <div class="item">
                    <span class="s">•</span>b<span class="s">-</span>315<span class="s">=</span>28
                </div>
                <div class="grid-respuesta">
                    <div class="item">
                        b
                        <span class="s">=</span>
                        <div class="total" alt="2"></div>
                        <div class="total" alt="8"></div>
                        <span class="s">+</span>
                        <div class="total" alt="3"></div>
                        <div class="total" alt="1"></div>
                        <div class="total" alt="5"></div>
                    </div>
                    <div class="item">
                        b
                        <span class="s">=</span>
                        <div class="total" alt="3"></div>
                        <div class="total" alt="4"></div>
                        <div class="total" alt="3"></div>
                    </div>
                </div>

            </div>

        </div>
        <div id="numeros"></div>
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
function result_tipo_3_7_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    if (r == 51) {
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