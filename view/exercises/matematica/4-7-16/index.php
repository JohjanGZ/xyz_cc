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
        <div class="columna">
            <div class="principal">
                <p class="parrafo">Con una botella con leche se llenan 4 vasos iguales:</p>
                <img src="<?=$dir?>/img/principal.png" class="principal">
            </div>
            <div class="grid">
                <div class="ejercicio">
                    <div class="eje-item">
                        <span class="s">•</span> ¿Cuál de ellos tiene mayor capacidad, los 4 vasos llenos o la botella?
                    </div>
                    <div class="eje-item">
                        <select class="browser-default seleccion" alt="igual">
                            <option value="" disabled selected></option>
                            <option value="igual">igual</option>
                            <option value="20 vasos">20 vasos</option>
                            <option value="6 botellas">6 botellas</option>
                            <option value="7 botellas">7 botellas</option>
                            <option value="40 vasos">40 vasos</option>
                        </select>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="eje-item">
                        <span class="s">•</span> ¿Cuántos vasos se llenarán con 5 botellas?
                    </div>
                    <div class="eje-item">
                        <select class="browser-default seleccion" alt="20 vasos">
                            <option value="" disabled selected></option>
                            <option value="igual">igual</option>
                            <option value="20 vasos">20 vasos</option>
                            <option value="6 botellas">6 botellas</option>
                            <option value="7 botellas">7 botellas</option>
                            <option value="40 vasos">40 vasos</option>
                        </select>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="eje-item">
                        <span class="s">•</span> ¿Cuántas botellas se necesitan para llenar 24 vasos?
                    </div>
                    <div class="eje-item">
                        <select class="browser-default seleccion" alt="6 botellas">
                            <option value="" disabled selected></option>
                            <option value="igual">igual</option>
                            <option value="20 vasos">20 vasos</option>
                            <option value="6 botellas">6 botellas</option>
                            <option value="7 botellas">7 botellas</option>
                            <option value="40 vasos">40 vasos</option>
                        </select>
                    </div>
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
function result_tipo_4_7_16() {
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
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>