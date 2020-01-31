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
                    <span class="s">a.</span> 2x/5 – 7 ≥ 5 ⇒ x ≥
                    <select class="browser-default seleccion" alt="30">
                        <option value="" disabled selected></option>
                        <option value="0">0</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="30">30</option>
                    </select>
                </div>
                <div class="eje-item">
                    C.S <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="30">
                        <option value="" disabled selected></option>
                        <option value="30">30</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="31">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="31">31</option>
                        <option value="11">11</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="32">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="32">32</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>; ...
                    }
                </div>

                <div class="eje-item">
                    <span class="s">b.</span> 3x/5 – 6 ≥ 12 ⇒ x ≥
                    <select class="browser-default seleccion" alt="30">
                        <option value="" disabled selected></option>
                        <option value="30">30</option>
                        <option value="19">19</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    C.S <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="30">
                        <option value="" disabled selected></option>
                        <option value="30">30</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="31">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="31">31</option>
                        <option value="11">11</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="32">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="32">32</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>; ...
                    }
                </div>

                <div class="eje-item">
                    <span class="s">c.</span> 4x/7 – 2 ≥ 14 ⇒ x ≥
                    <select class="browser-default seleccion" alt="28">
                        <option value="" disabled selected></option>
                        <option value="19">19</option>
                        <option value="28">28</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    C.S <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="28">
                        <option value="" disabled selected></option>
                        <option value="28">28</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="29">
                        <option value="" disabled selected></option>
                        <option value="27">27</option>
                        <option value="29">29</option>
                        <option value="21">21</option>
                        <option value="29">29</option>
                    </select>;
                    <select class="browser-default seleccion" alt="30">
                        <option value="" disabled selected></option>
                        <option value="27">27</option>
                        <option value="30">30</option>
                        <option value="16">16</option>
                        <option value="29">29</option>
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
function result_tipo_4_7_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 12) {
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