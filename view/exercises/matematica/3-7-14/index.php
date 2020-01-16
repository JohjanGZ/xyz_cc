<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?= $titulo ?>
<?php 
    $respuestas = array('1; 1', '2; 2', '1; 3', '9; 3', '9; 6', '6; 9', '2; 3', '4; 2', '12; 6', '3; 1', '4; 6', '6; 3'); 
    $resp2 = array('mitad','tercera parte', 'cuarta parte', 'quinta parte');  
?>
<body>

    <div class="container-two">
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab"><a class="active" href="#figura1">Figura 1</a></li>
            <li class="tab"><a href="#figura2">Figura 2</a></li>
            <li class="tab"><a href="#figura3">Compara</a></li>
        </ul>
        <div id="figura1" class="col s12">
            <div class="row">
                <div class="col l6">
                    <h6 class="plano"></h6>
                    <div class="grid-options">
                        <div class="datos">
                            Q <span>= {</span>
                            <select class="seleccion" alt="4; 6">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            R <span>= {</span>
                            <select class="seleccion" alt="6; 3">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            S <span>= {</span>
                            <select class="seleccion" alt="2; 3">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                    </div>
                </div>
                <div class="col l6">
                    <img src="<?= $dir ?>/img/1.png" class="img materialboxed">
                </div>
            </div>
        </div>
        <div id="figura2" class="col s12">
            <div class="row">
                <div class="col l6">
                    <img src="<?= $dir ?>/img/2.png" class="img materialboxed">
                </div>
                <div class="col l6">
                    <h6 class="plano"></h6>
                    <div class="grid-options">
                        <div class="datos">
                            Q <span>= {</span>
                            <select class="seleccion" alt="2; 2">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            R <span>= {</span>
                            <select class="seleccion" alt="3; 1">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            S <span>= {</span>
                            <select class="seleccion" alt="1; 1">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="figura3" class="col s12">
            <div class="row">
                <div class="col l7">
                    <img src="<?= $dir ?>/img/3.png" class="imgcompa materialboxed">
                </div>
                <div class="col l5">
                     <div class="boxe">
                            <div class="item2">
                            <span>Eje X: Se redujo a  la
                            <span class="corto">
                                <select class="seleccion" alt="mitad">
                                    <option value="" disabled selected></option>
                                    <?php foreach ($resp2 as $key => $rspta) {
                                        echo "<option value='$rspta'>$rspta</option>";
                                    } ?>
                                </select>
                            </span>
                            </span>
                            </div>
                            <div class="item2">
                            <span>Eje Y: Se redujo a  la
                            <span class="corto">
                                <select class="seleccion" alt="tercera parte">
                                    <option value="" disabled selected></option>
                                    <?php foreach ($resp2 as $key => $rspta) {
                                        echo "<option value='$rspta'>$rspta</option>";
                                    } ?>
                                </select>
                            </span>
                            </span>
                            </div>
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
<?php require('../../../tools/botones/botones.php'); ?> <script>
    $("#next").attr("onclick", "<?= $next ?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_3_7_14() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;
        r = 0
        seleccion_lista();
        if (r == 6) {
            localStorage.setItem("Nota<?= $cod ?>", nota);
            localStorage.setItem("Time<?= $cod ?>", tiempo);
            correcto();
        } else {
            incorrecto();
            console.log(r);
            localStorage.setItem("Nota<?= $cod ?>", "0");
            localStorage.setItem("Time<?= $cod ?>", tiempo);
        }

    }
</script>