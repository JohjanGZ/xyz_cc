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
                    <li class="tab col s3 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s3"><a href="#test-swipe-2">Parte 2</a></li>
                    <li class="tab col s3"><a href="#test-swipe-3">Parte 3</a></li>
                    <li class="tab col s3"><a href="#test-swipe-4">Parte 4</a></li>
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El cóndor</h5>
                        <p>
                            Se dice que en un pueblo, un hombre vivía con su hija llamada Juliana. Ella cuidaba ovejas y
                            otros animales, y cada día un joven vestido con elegancia iba a visitarla. El joven tenía un
                            traje negro hermoso, chalina blanca y un gran sombrero.
                        </p>
                        <p>
                            Cada día el joven iba a visitar a Juliana y se hicieron buenos amigos. Un día comenzaron a
                            jugar así: “Álzame tú y yo te alzaré”. Comenzaron el juego, y el joven alzó a Juliana.
                            Recién cuando la había alzado en alto, Juliana se dio cuenta de que estaba volando.
                        </p>
                        <p>
                            El joven puso a Juliana dentro de un nido en un barranco. Allí el joven se convirtió en
                            cóndor.
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
                        <h5>La pequeña ardilla</h5>
                        <p>
                            Cuando habían pasado unos años juntos, ella llegó a ser la madre de un niño, pero lloraba
                            día y noche por su padre, a quien había dejado en su pueblo. Le pidió muchas veces al cóndor
                            que la ayude a regresar, pero él siempre se negó. <br>
                            Un día, un picaflor apareció; Juliana, al verlo, le dijo: “Ayúdame a regresar y buscar a mi
                            papá”.
                        </p>
                        <p>
                            El picaflor le contestó: “Escúchame, no llores. Te voy a ayudar. Iré a contarle a tu papá
                            dónde estás, y tu papá vendrá a buscarte”. Juliana le dijo: “Escúchame, picaflor. En mi casa
                            hay muchas flores, te aseguro que si tú me ayudas, todas las flores que hay en mi casa serán
                            para ti”.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-3" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>La pequeña ardilla</h5>
                        <p>
                            Cuando dijo eso, el picaflor voló contento al pueblo, y fue a decir al padre de Juliana: “He
                            descubierto dónde está tu hija. Para sacarla del lugar donde se encuentra, tenemos que
                            llevar un burro muerto”, y explicó su plan al padre.
                        </p>
                        <p>
                            Dejaron al burro muerto en el suelo. Y mientras el cóndor se comía al burro, el picaflor y
                            el padre ayudaron a Juliana a escapar. Después llevaron dos sapos: uno pequeño y otro
                            grande. Dejaron los sapos en el nido.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-4" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El cóndor</h5>
                        <p>
                            Luego, el picaflor fue donde estaba el cóndor y le contó: “Oye, cóndor. Tú no sabes que
                            desgracia hay en tu casa”. “¿Qué ha pasado?”, el cóndor le preguntó. “Tu mujer y tu hijo se
                            han convertido en sapos”. <br>
                            El cóndor sorprendido se fue volando a ver. Ni Juliana, ni su hijo
                            estaban dentro del nido, solamente dos sapos. El cóndor se asustó y no pudo hacer nada para
                            recuperarlos.
                        </p>
                        <p>
                            Desde ese día, el picaflor está todos los días entre las flores de la casa de Juliana,
                            mientras ella, su hijo y su padre viven felices.
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