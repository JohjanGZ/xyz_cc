<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="h">
            <div class="col s10">
                <div class="grid-container">

                    <div class="col1">
                        <div id="sortable">
                            <?php for ($i=1; $i < 5; $i++) { 
                                if ($i == 5) {
                            ?>
                            <div class="grid-item w" id="<?=$i?>">
                                <img src="<?=$dir?>/img/<?=$i?>.png" class="img-a">
                            </div>
                            <?php } else { ?>
                            <div class="grid-item w" id="<?=$i?>">
                                <img src="<?=$dir?>/img/<?=$i?>.png" class="img">
                            </div>
                            <?php } 
                            } ?>
                        </div>
                    </div>
                    <div class="col1 colo">
                        <div class="grid-num">1.</div>
                        <div class="grid-num">2.</div>
                        <div class="grid-num">3.</div>
                        <div class="grid-num">4.</div>
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

function result_tipo_5_1_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    // Sortable
    var items = $('#sortable .grid-item').map(function() {
        return $.trim($(this).attr('id'));
    }).get();
    var itsort = $('#sortable .grid-item').map(function() {
        return $.trim($(this).attr('id'));
    }).get();
    itsort.sort();

    var itemD = JSON.stringify(items);
    var itemO = JSON.stringify(itsort);
    console.log(itemD)
    console.log(itemO)
    // Sortable
    
    if (itemD == itemO) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto()
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>