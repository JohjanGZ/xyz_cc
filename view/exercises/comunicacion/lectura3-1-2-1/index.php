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
                    <li class="tab col s4"><a href="#test-swipe-3">Parte 3</a></li>
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>No me gusta mi cara</h5>
                        <p>
                            <span class="text-m">¿A ti te gusta tu cara?</span> <br>
                            <span class="text-f">Pues claro. ¿Por qué no iba a gustarme?</span> <br>    
                            <span class="text-m">Pues yo he soñado que tenía otra cara</span> <br>    
                            <span class="text-f">¡Tú siempre tienes unos sueños muy tontos!</span> <br>    
                            <span class="text-m">Los sueños nunca son tontos; son sueños, y son bonitos.</span> <br>    
                            <span class="text-f">Bueno, ¿Cómo era tu cara nueva?</span> <br>    
                            <span class="text-m">No era nueva, era la cara de mi hermano.</span> <br>    
                            <span class="text-f">¿De tu hermano mayor?</span> <br>    
                            <span class="text-m">Sí, bueno, yo he soñado que tenía su cara y me gustaba tenerla. Estoy seguro pues podía verme en el espejo del baño.</span> <br>    
                            <span class="text-f">¿Cómo vas a llegar al espejo del baño? Yo, cuando quiero mirarme, tengo que subirme a la banqueta.</span> <br>    
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
                    <h5>No me gusta mi cara</h5>
                        <p>
                            <span class="text-m">Yo también tengo que subirme. Pero te estoy diciendo que en el sueño me veía con la cara              de mi hermano.</span> <br>
                            <span class="text-f">No comprendo cómo se puede cambiar de cara, ni siquiera en un sueño.</span> <br>    
                            <span class="text-m">Pues a mí me gustaría tener los ojos azules en vez de marrones. Y también me gustaría                       cambiar de nariz; la mía parece una papa. Además, mis orejas son grandes y no me gustan nada.</span> <br>    
                            <span class="text-f">Pero si cambiaras de ojos, de nariz y de orejas, ¡te volverías otro!</span> <br>    
                            <span class="text-m">No. Yo seguiría siendo yo, pero con la cara distinta.</span>  

                            
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
                    <h5>No me gusta mi cara</h5>
                        <p>
                            

                            <span class="text-f">Eso es imposible. O cambias toda la cabeza, con los pensamientos que hay dentro y todo,                 o no puedes cambiar nada.</span> <br>    
                            <span class="text-m">¡No, no, los pensamientos no! Yo digo la cara de afuera.</span> <br>    
                            <span class="text-f">Pero si tu cara no es fea. Tú eres mi amigo y me gusta cómo eres.</span> <br>    
                            <span class="text-m">Está bien, está bien, pero... a mí no me gusta mi cara.</span>  
                        </p>
                        <p style="text-align: right;">
                        Roberto Denti
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