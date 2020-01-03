<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $valor = array('V','F');
?>

<body>
    <div class="container-two">
        <h6 class="titleinfo">  M = <span class="rojo">{</span>1; 2; 3; 6<span class="rojo">}</span>,   N = <span class="rojo">{</span>3; 6<span class="rojo">}</span>, P = <span class="rojo">{</span>5; 4; 0<span class="rojo">}</span>, Q = <span class="rojo">{</span>3; 6<span class="rojo">}</span>, R = <span class="rojo">{</span>0; 1; 2; 3; 4; 5; 6<span class="rojo">}</span>,   S = <span class="rojo">{</span>1; 2; 3; 6<span class="rojo">}</span></h6>
        <div class="caja">
            <div class="tabla">
                <div class="grid-container aleatori">
                    <div class="grid-item">
                        Q <span class="rojo"> ⊄ </span> S
                        <select class="slc seleccion" id="slc1" alt="F">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    N <span class="rojo"> ⊂ </span> R 
                        <select class="slc seleccion" id="slc1" alt="V">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    N <span class="rojo"> ⊄ </span> M 
                        <select class="slc seleccion" id="slc1" alt="F">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    N <span class="rojo"> = </span> Q 
                        <select class="slc seleccion" id="slc1" alt="V">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    N <span class="rojo"> ⊂ </span> P 
                        <select class="slc seleccion" id="slc1" alt="F">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    P <span class="rojo"> ⊄ </span> S
                        <select class="slc seleccion" id="slc1" alt="V">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    P <span class="rojo"> ⊄ </span> R 
                        <select class="slc seleccion" id="slc1" alt="F">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    Q <span class="rojo"> ⊄ </span> P 
                        <select class="slc seleccion" id="slc1" alt="V">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    M <span class="rojo"> = </span> S
                        <select class="slc seleccion" id="slc1" alt="V">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    P <span class="rojo"> = </span> S
                        <select class="slc seleccion" id="slc1" alt="F">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    N <span class="rojo"> ⊄ </span> S
                        <select class="slc seleccion" id="slc1" alt="F">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                    S <span class="rojo"> ⊂ </span> R
                        <select class="slc seleccion" id="slc1" alt="V">
                            <option value="" disabled selected></option>
                            <?php for($i=0; $i < count($valor);$i++){?>
                            <option value="<?= $valor[$i] ?>"><?= $valor[$i] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
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
$('select').formSelect();
// Random
// var div = document.querySelector('.grid-container');
// for (var i = div.children.length; i >= 0; i--) {
//     div.appendChild(div.children[Math.random() * i | 0]);
// }
// Select

// Validar
function result_tipo_4_0_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 12) {
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

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>