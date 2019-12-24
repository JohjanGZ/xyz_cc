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
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s4 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s4"><a href="#test-swipe-2">Parte 2</a></li>

                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El bufeo colorado</h5>
                        <p>
                            Al delfín rosado del Amazonas la gente lo llama, simplemente, bufeo colorado y así lo
                            distinguen de sus otros hermanos que son de color gris. La leyenda de que el bufeo, como ser
                            o duende “encantado” que es, puede transformarse en un hombre “gringo” al que le gustan las
                            mujeres jóvenes y bonitas. Así, con esa apariencia, suele presentarse a la fiesta en la que
                            participa la chica elegida. Como viajero de paso, baila y enamora a la muchacha, invita a
                            beber a todos los participantes y así se gana la simpatía general. Pero él no come, ni menos
                            bebe licor; porque si se emborracha, se rompería el encantamiento y se descubriría quién es. <br>
                            Cuando la muchacha ya es la enamorada del bufeo, él la colma de regalos y atenciones.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El bufeo colorado</h5>
                        <p>
                        La visita siempre por las noches y se marcha antes del amanecer. Así, poco tiempo después, la mujer enamorada empieza a mostrar una conducta extraña, porque quiere permanecer todo el tiempo junto al río, y si esta situación no es notada a tiempo por sus familiares y no la mandan a curar con un buen chamán, puede terminar desapareciendo, ya que en su deseo de estar siempre junto a su gringo “bufeo” enamorado, terminará arrojándose al río para no salir jamás. <br>
                        De la misma manera se cuenta que los bufeos usan lo que parece dinero de noche, pero al llegar el día son solo hojas. También se cuenta sobre bufeos hembras y barcos enteros con bufeos en forma humana que surcan los ríos navegables de la selva durante la noche.
                        </p>


                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            

        </div>


    </div>
</body>

<script>
$(document).ready(function() {
    $('.tabs').tabs();
});

$(".tab").click(function() {
    $(this).addClass("activo");
});
</script>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
$(".btn-intentos").hide();
$(".btnEnviar").hide();
$(".btnCorregir").hide();
$(".btnSiguiente").removeClass("disabled");
</script>