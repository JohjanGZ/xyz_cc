<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$extension = array(
    '1;2;3;4;5;6;7;8;9;10;11;12;13;14;16',
    '1;2;3;4;5;6;7;8;9;10;12;13;14;16',
    '1;2;3;4;5;6;7;8;9;10;11;12;14;16',
    '1;2;3;4;5;6;7;8;9;10;12;14;16',
    'a,b,c,d,e,f,g,h,i',
    'a,b,c,d,e,f,g,h,i,a,e,i',
    'a,b,c,d,e,f,g,h,i,j,k,l,m',
    'a,a,b,c,d,e,e,f,g,h,i,i',
    'c,a,m,i,n,o,e,u',
    'c,a,m,i,n,o,e,a,e,i,o,u',
    'c,a,a,m,i,i,n,o,e,e,u',
    '1;2;3;4;5;6;7;8;9;10;12;14;16',
    '1;2;3;4;5;6;7;8;9;10;12;13;14;16',
    '1;2;3;4;5;6;7;8;9;10;11;12;14;16',
);
?>

<body>
    <div class="container-two">
        <!-- <div class="grid-head">
            <div class="grid-item wc">Por extensión</div>
            <div class="grid-item we">Por comprensión</div>
        </div> -->
        <div class="grid-body">
            <div class="grid-box">
                <div class="grid-item wc">
                    D<span class="s">={</span>1; 2; 3; 4; 5; 6; 7; 8; 9<span class="s">}</span>
                    <span class="space"></span>
                    E<span class="s">={</span>2; 4; 6; 8; 10; 12; 14; 16<span class="s">}</span>
                </div>
                <div class="grid-item we">
                    <span class="text">D <span class="s">U</span> E</span>
                    <span class="s">={</span>
                    <select class="slc" alt="<?=$extension[3]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                    <span class="s">}</span>
                </div>
            </div>

            <div class="grid-box">
                <div class="grid-item wc">
                    P<span class="s">={</span>a b, c, d, e, f, g, h, i<span class="s">}</span>
                    <span class="space"></span>
                    O<span class="s">={</span>a, e, i<span class="s">}</span>
                </div>
                <div class="grid-item we">
                    <span class="text">P <span class="s">U</span> O</span>
                    <span class="s">={</span>
                    <select class="slc" alt="<?=$extension[4]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                    <span class="s">}</span>
                </div>
            </div>

            <div class="grid-box">
                <div class="grid-item wc">
                    X<span class="s">={</span>c, a, m, i, n, o<span class="s">}</span>
                    <span class="space"></span>
                    Y<span class="s">={</span>a, e, i, o, u<span class="s">}</span>
                </div>
                <div class="grid-item we">
                <span class="text">X <span class="s">U</span> Y</span>
                <span class="s">={</span>
                    <select class="slc" alt="<?=$extension[8]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                    <span class="s">}</span>
                </div>
            </div>

        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?=$dir?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_0_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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