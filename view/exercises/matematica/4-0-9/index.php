<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>



    <div class="container">
        <div class="row">

            <div class="contenedor-ejercicios">

               
                <div class="ejercicio">
                    <div class="conjunto">
                       
                    </div>

                </div>
                <div class="ejercicio">
                    
                    <p>
                        H <span>∪</span> I = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b, m, n, p</option>
                                <option value="x">n, p, s, k, r, t</option>
                                <option value="n">b, m, n, p, r, s, t, k</option>
                                <option value="x">r, t</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        J <span>∪</span> I = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b, m, n, p</option>
                                <option value="n">n, p, s, k, r, t</option>
                                <option value="x">b, m, n, p, r, s, t, k</option>
                                <option value="x">r, t</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        H <span>∪</span> J = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b, m, n, p, r, t</option>
                                <option value="x">n, p, s, k, r, t</option>
                                <option value="x">b, m, n, p, r, s, t, k</option>
                                <option value="x">r, t, s, k</option>
                            </select>
                        </span>
                        }
                    </p>
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
function result_tipo_4_0_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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