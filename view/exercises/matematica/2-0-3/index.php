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
            <div class="col s12 imagenPricipal">
                    <img src="<?= $dir ?>/img/conjuntos.png" width="1000px" alt="">
                </div>
            </div>
            <div class="row letras">
            
                <!-- <div class="col s4">El nombre del conjunto:</div> -->
                <div class="aleatorio">
                    <div class="col s1 letra card-panel white-text blue letras"  id="g"><h5>G</h5></div>
                    <div class="col s1 letra card-panel white-text blue letras" id="y"><h5>Y</h5></div>
                    <div class="col s1 letra card-panel white-text blue letras"  id="m"><h5>M</h5></div>
                </div>
                <div class="col s2  offset-s5 card-panel resultado blue"></div>
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
<?php require('../../../tools/botones/botones.php');?><script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>
    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });
</script>