<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
    <div class="container">
        <div class="container-cuento">
            <div class="lectura">
                <h5>El león y el ratón</h5>
                <p>
                    Érase una vez un león y un ratón que vivían en el mismo bosque. Un día, el ratón fue a beber agua al río, se cayó en él y la corriente lo arrastró.
                </p>
                <p>
                El ratón pidió ayuda porque no sabía nadar. El león, al escucharlo, se metió en el río y lo sacó. El ratón, muy feliz, le dijo al león: “Muchas gracias por salvarme la vida. Desde ahora seré tu amigo y te ayudaré siempre que lo necesites”. —¿Cómo me vas a ayudar tú, con lo pequeño que eres? —dijo el león, riendo.
                </p>
                <p>
                    Pasó el tiempo y, un buen día, el león cayó en una trampa de cazadores. Con todas sus fuerzas, intentó escapar de la red que lo tenía atrapado, pero no lo consiguió. Entonces, apareció el ratón y, con sus afilados dientecillos, cortó las cuerdas de la red. De esta manera, el león pudo escapar y, agradecido, le dijo: “Amigo ratón, perdóname por haberme reído”.
                </p>
                <p>
                Esa noche, el ratón durmió acurrucado junto al león. Ambos comprendieron que los gestos de amor que habían tenido el uno con el otro les había unido para siempre.
                </p>
            </div>
            <div class="imagen-lectura">
                <img src="<?= $dir ?>/img/2.png" alt="">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
        </div>
    </div>
  </body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript">
  $(".btn-intentos").hide();
  $(".btnEnviar").hide();
  $(".btnCorregir").hide();
  $(".btnSiguiente").removeClass( "disabled" );
</script>