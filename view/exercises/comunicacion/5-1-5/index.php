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

                    <div class="contenedor-respuesta">
                        <p>
                            <span class="celeste">●</span>
                            Los niños han salido bien en sus estudios;
                            <span class="palabra seleccion" alt="n">es decir</span>
                            <span class="palabra seleccion" alt="">a fin de</span>
                            <span class="palabra seleccion" alt="">además</span>
                            <span class="palabra seleccion" alt="">ya que</span>
                            , han sacado buenas notas en el colegio.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Organizaron un bingo
                            <span class="palabra seleccion" alt="">asimismo</span>
                            <span class="palabra seleccion" alt="n">a fin de</span>
                            <span class="palabra seleccion" alt="">o sea</span>
                            <span class="palabra seleccion" alt="">por último</span>
                            recolectar dinero para reconstruir el auditorio.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Tuvieron que comprar esos dulces
                            <span class="palabra seleccion" alt="">con fin de</span>
                            <span class="palabra seleccion" alt="">es decir</span>
                            <span class="palabra seleccion" alt="">para</span>
                            <span class="palabra seleccion" alt="n">para que</span>
                            el niño se calmara.
                        </p>
                       
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
function result_tipo_5_1_5() {
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