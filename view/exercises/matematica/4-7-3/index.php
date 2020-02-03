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
                    <span class="s">a.</span> y – 6 = 10 ⇒ y =
                    <select class="browser-default seleccion" alt="16">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    <span class="s">b.</span> y – 10 = 23 ⇒ y =
                    <select class="browser-default seleccion" alt="33">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="33">33</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    <span class="s">c.</span> y – 17 = 42 ⇒ y =
                    <select class="browser-default seleccion" alt="59">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="59">59</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    <span class="s">d.</span> y – 5 = 18 ⇒ y =
                    <select class="browser-default seleccion" alt="23">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="8">8</option>
                        <option value="23">23</option>
                    </select>
                </div>
                <div class="eje-item">
                    <span class="s">e.</span> y – 15 = 25 ⇒ y =
                    <select class="browser-default seleccion" alt="40">
                        <option value="" disabled selected></option>
                        <option value="40">40</option>
                        <option value="2">2</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    <span class="s">f.</span> y – 19 = 14 ⇒ y =
                    <select class="browser-default seleccion" alt="33">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="8">8</option>
                        <option value="33">33</option>
                    </select>
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
function result_tipo_4_7_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 6) {
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