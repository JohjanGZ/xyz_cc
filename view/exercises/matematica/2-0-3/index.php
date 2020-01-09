<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="caja-principal">
        <div class="center">
            <div id="contenedorPiezas">
                <div class="col s12 imagenPricipal">
                    <img src="<?= $dir ?>/img/conjuntos.png" width="1000px" alt="">
                </div>
            </div>
            <div class="contentRespuesta aleatorio">
                <div class="item seleccion"><p>G</p></div>
                <div class="item seleccion" alt="n"><p>Y</p></div>
                <div class="item seleccion"><p>M</p></div>
            </div>
        </div>
    </div>

        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4 class="center">Respuesta correcta</h4>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

function result_tipo_2_0_3(){
    var  min= $('#Minutos').text();
    var  seg= $('#Segundos').text();
    var  milseg= $('#Centesimas').text();
    var tiempo=min+":"+seg+":"+milseg;

          if( r == 1){
             console.log(r)
             localStorage.setItem("Nota2-0-3","2");
             localStorage.setItem("Time2-0-3", tiempo);
              correcto(); 

          }

          else {
                console.log(r)
              incorrecto();
              localStorage.setItem("Nota2-0-3","0");
              localStorage.setItem("Time2-0-3", tiempo);
             
          }    
} 
</script>