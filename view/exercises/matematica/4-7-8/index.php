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
        <div class="grid">
            <div class="ejercicio">
                <div class="eje-item">
                    <span class="s">a.</span> m/3 > 3 ⇒ m >
                    <select class="browser-default seleccion" alt="9">
                        <option value="" disabled selected></option>
                        <option value="0">0</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    C.S <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="10">
                        <option value="" disabled selected></option>
                        <option value="10">10</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="11">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="11">11</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="12">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="12">12</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>; ...
                    }
                </div>

                <div class="eje-item">
                    <span class="s">b.</span> m/2 > 1 ⇒ m >
                    <select class="browser-default seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <option value="0">0</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    C.S <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="5">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="5">5</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>; ...
                    }
                </div>

                <div class="eje-item">
                    <span class="s">c.</span> m/7 < 4 ⇒ m <
                    <select class="browser-default seleccion" alt="28">
                        <option value="" disabled selected></option>
                        <option value="28">28</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    C.S <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="0">
                        <option value="" disabled selected></option>
                        <option value="0">0</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="1">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>; ... ;
                    <select class="browser-default seleccion" alt="27">
                        <option value="" disabled selected></option>
                        <option value="27">27</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                    }
                </div>
            </div>
        </div>
    </div>

    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
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
// Validar
function result_tipo_4_7_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 13) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>