<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="caja-principal">
        <div class="content">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
            </div>
            <div class="tabla">
                <div class="header">
                    <div class="animal">Golosinas</div>
                    <div class="cantidad">Cantidad</div>
                </div>
                <div class="cuerpoTabla">
                    <div class="fila">
                        <div>Algodón de azúcar</div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila">
                        <div>Canchita</div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila">
                        <div>Gaseosas</div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila">
                        <div>Helados</div>
                        <div class="seleccion"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila" id="final">
                        <div></div>
                        <div>10</div>
                        <div>25</div>
                        <div>30</div>
                        <div>35</div>
                        <div>40</div>
                        <div>45</div>
                        <div>50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="100%" src="<?= $dir ?>/img/respuesta.png">
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

<script type="text/javascript">
// Validar


function result_tipo_2_3_23() {
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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>