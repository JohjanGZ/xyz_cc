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
        <div class="center">
            <div id="contenedorPiezas">
                <div class="row conjuntos">
                    <div class="col s12 imagenConjuntos">
                        <img src="img/1-3/conjuntos.png" alt="">
                    </div>
                </div>
                <div class="row conteCajas">
                    <div class="col cajas verde s5 card-panel"></div>
                    <div class="col cajas rojo s5 card-panel"></div>
                </div>
                <div class="row conteCajas aleatorio">
                    <div class="col pieza opcion opcRojo s5" id="rojo"><h5 class="white-text">Dos circulos rojos</h5></div>
                    <div class="col pieza opcion opcVerde s5" id="verde"><h5 class="white-text">Cuatro circulos verdes</h5></div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="80%" src="img/1-3/respuesta.png">
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
<script>
    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });
</script>