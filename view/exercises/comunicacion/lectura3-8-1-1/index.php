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
                        <h5>Dos amigos</h5>
                        <p>
                            Una noche, uno de los amigos despertó sobresaltado. Saltó de la cama, se vistió
                            apresuradamente y se dirigió a la casa del otro. Al llegar, golpeó ruidosamente y todos se
                            despertaron. Los criados le abrieron la puerta, asustados, y él entró a la residencia. El
                            dueño de la casa, que lo esperaba con una bolsa de dinero en una mano y su espada en la
                            otra, le dijo:
                        </p>
                        <p>
                            –Amigo mío: sé que no eres hombre de salir corriendo en plena noche sin ningún motivo. Si
                            viniste a mi casa es porque algo grave te sucede. Si perdiste dinero en el juego, aquí
                            tienes, tómalo...Y si tuviste un altercado y necesitas ayuda para enfrentar a los que te
                            persiguen, juntos pelearemos. Ya sabes que puedes contar conmigo para todo.
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
                        <h5>Dos amigos</h5>
                        <p>
                            El visitante respondió: <br>
                            – Agradezco mucho tus generosos ofrecimientos, pero no estoy aquí por ninguno de esos
                            motivos...
                        </p>
                        <p class="fontainer">
                            Estaba durmiendo tranquilamente cuando soñé que estabas intranquilo y triste, que la
                            angustia te dominaba y que me necesitabas a tu lado. La pesadilla me preocupó y por eso vine
                            a tu casa a estas horas. No podía estar seguro de que te encontrabas bien y tuve que
                            comprobarlo por mí mismo.
                            Así actúa un verdadero amigo. No espera que su compañero acuda a él, sino que, cuando supone
                            que algo le sucede, corre a ofrecerle su ayuda.
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