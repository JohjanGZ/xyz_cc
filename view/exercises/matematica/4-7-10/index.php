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
                    <span class="s">a.</span> x + 14 ≤ 17 ⇒ x ≤
                    <select class="browser-default seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <option value="0">0</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="eje-item">
                    ∴ x <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="11">11</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="1">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="1">1</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                    }
                </div>

                <div class="eje-item">
                    <span class="s">b.</span> x – 6 ≤ 13 ⇒ x ≤
                    <select class="browser-default seleccion" alt="19">
                        <option value="" disabled selected></option>
                        <option value="0">0</option>
                        <option value="19">19</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    ∴ x <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="6">
                        <option value="" disabled selected></option>
                        <option value="6">6</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="8">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>; ...
                    <select class="browser-default seleccion" alt="19">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="19">19</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                    }
                </div>

                <div class="eje-item">
                    <span class="s">c.</span> 2x + 8 ≤ 14 ⇒ x ≤
                    <select class="browser-default seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <option value="19">19</option>
                        <option value="3">3</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="eje-item">
                    ∴ x <span class="s">=</span> {
                    <select class="browser-default seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="16">16</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option value="9">9</option>
                    </select>;
                    <select class="browser-default seleccion" alt="1">
                        <option value="" disabled selected></option>
                        <option value="7">7</option>
                        <option value="1">1</option>
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
function result_tipo_4_7_10() {
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