<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
                #contenedorpuzzle{
                width: 700px;
                margin: 0vh auto;
                }
                .item img {
                width: 200px;
                margin: 3 15px 0;
                float: left;
                border: solid #cdcdcd;
                border-radius: 20px;
                padding: 30px 74px;
                }
                .item img:hover{
                border:solid #37D3F7;
                }   
                h5 {
                font-size: 200%;
                }
                .img-principal{
                margin-top: 10px;
                width: 130px !important;
                margin: 5vh auto 2vh;
                }
                #item4 img{
                  max-height:  200px;
                  padding: 30px 74px;
                }
                @media (max-height: 680px ){
                #contenedorpuzzle{
                width: 1205px;
               
                }
                .img-principal{
                margin: 20px 0;
                width: 130px !important;
                }
                }
          </style>

          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">
  <center><img class="img-principal"  src="<?= $dir ?>/img/principal.png"></center>
      	<section class="fila1" id="contenedorpuzzle">
              <div class="row">
              	<div class=""><div class="item"  id="item1"><img alt="n" src="<?= $dir ?>/img/1.png"></div></div>
              	<div class=""><div class="item"  id="item2"><img  src="<?= $dir ?>/img/2.png"></div></div>
                <div class=""><div class="item"  id="item3"><img alt="n" src="<?= $dir ?>/img/3.png"></div></div>
                <div class=""><div class="item"  id="item5"><img alt="n" src="<?= $dir ?>/img/5.png"></div></div>
                <div class=""><div class="item"  id="item6"><img alt="n" src="<?= $dir ?>/img/6.png"></div></div>
              </div>
        </section>
</div>
              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <h4>Respuesta correcta</h4>
                  <center>
                  <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.png">
                  </center>
                  </div>
                  <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                  </div>
              </div>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    function result_tipo_1_0_6(){               
        var  min= $('#Minutos').text();
        var  seg= $('#Segundos').text();
        var  milseg= $('#Centesimas').text();
        var tiempo=min+":"+seg+":"+milseg;

        if(r==4)
            {
                localStorage.setItem("Nota<?=$cod?>",nota);
                localStorage.setItem("Time<?=$cod?>", tiempo);
                correcto(); 
            }
            else {
                incorrecto();
                localStorage.setItem("Nota<?=$cod?>","0");
                localStorage.setItem("Time<?=$cod?>", tiempo);  
            }    
          } 
</script>