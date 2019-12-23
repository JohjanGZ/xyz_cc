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
                    <div class="animal">Animales</div>
                    <div class="cantidad">Cantidad</div>
                </div>
                <div class="cuerpoTabla">
                    <div class="fila">
                        <div>Patos</div>
                        <div class="equis"><p>x</p></div>
                        <div class="equis"><p>x</p></div>
                        <div class="equis"><p>x</p></div>
                        <div class="equis"><p>x</p></div>
                        <div class="equis"><p>x</p></div>
                        <div class="equis"><p></p></div>
                        <div class="equis"><p></p></div>
                    </div>
                    <div class="fila">
                        <div>Cerdos</div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila">
                        <div>Caballos</div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila">
                        <div>Vacas</div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila">
                        <div>Cisnes</div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila">
                        <div>Perros</div>
                        <div class="seleccion" alt="n"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                        <div class="seleccion"></div>
                    </div>
                    <div class="fila" id="final">
                        <div></div>
                        <div>1</div>
                        <div>2</div>
                        <div>3</div>
                        <div>4</div>
                        <div>5</div>
                        <div>6</div>
                        <div>7</div>
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

<script type="text/javascript">
// Validar


function result_tipo_2_4_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 16) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>