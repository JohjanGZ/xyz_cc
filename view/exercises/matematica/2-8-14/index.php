<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

    $numeros = array('>','=','<');

?>
<div class="container-two">

    <div class="middle aleaorio">
        <div class="item ">
            <div class="droppable" alt="325">7 623</div>
            <div class="numero card-panel blue darken-1">
               <select class="slc seleccion" alt="<">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
            </div>
            <div class="droppable" alt="324">7 632</div>
        </div>
        <div class="item ">
            <div class="droppable" alt="325">6 824</div>
            <div class="numero card-panel blue darken-1">
               <select class="slc seleccion" alt="<">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
            </div>
            <div class="droppable" alt="324">6 834</div>
        </div>
        <div class="item ">
            <div class="droppable" alt="325">4 583</div>
            <div class="numero card-panel blue darken-1">
               <select class="slc seleccion" alt=">">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
            </div>
            <div class="droppable" alt="324">4 578</div>
        </div>
        <div class="item ">
            <div class="droppable" alt="325">7 899</div>
            <div class="numero card-panel blue darken-1">
               <select class="slc seleccion" alt="<">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
            </div>
            <div class="droppable" alt="324">7 900</div>
        </div>
        <div class="item ">
            <div class="droppable" alt="325">5 717</div>
            <div class="numero card-panel blue darken-1">
               <select class="slc seleccion" alt="<">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
            </div>
            <div class="droppable" alt="324">5 771</div>
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
<?php require('../../../tools/botones/botones.php');?>
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript">
$('select').formSelect();


function result_tipo_2_8_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 5) {
        console.log(r);
        localStorage.setItem("Nota2-8-14", "2");
        localStorage.setItem("Time2-8-14", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-8-14", "0");
        localStorage.setItem("Time2-8-14", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>