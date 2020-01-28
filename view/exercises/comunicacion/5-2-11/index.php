<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="grid">
            <div class="esquema">
                <img src="<?=$dir?>/img/principal.png" class="principal">
                <div class="text">
                    Cuando Adriano organizó <span class="seleccion" alt="">la</span> excursión, nadie quería acompañarlo. <span class="seleccion" alt="n">El</span> tenía una linterna que
                    su mamá le había regalado. “Vamos a la cueva clausurada”, dijo, “que no les <span class="seleccion" alt="n">de</span> miedo”. Al final,
                    todos se animaron. “Pero <span class="seleccion" alt="n">tu</span> vas adelante conmigo”, dijo Micaela. Quedaron en encontrarse a
                    las siete de la noche, mas, la mayoría, llegó a las ocho. “<span class="seleccion" alt="n">Mas</span> tarde mejor”, dijo Adriano.
                    Fueron con Gladiador, <span class="seleccion" alt="">el</span> perro y mejor amigo de Adriano. <span class="seleccion" alt="">El</span> misterio asomaba en la puerta
                    de la cueva. Iluminaron la entrada con la linterna y, de pronto, Gladiador entró corriendo.
                    Después de un tenebroso silencio, ¡un monstruo salió corriendo de la cueva! Los niños
                    huyeron, gritando. <span class="seleccion" alt="">El</span> monstruo fue directo hacia Adriano. Los niños iluminaron la escena: era
                    Gladiador que tenía un periódico con un montón de telas de araña en la cabeza.
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

function result_tipo_5_2_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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