 <?php require('../../../tools/var/variables.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

     <link rel="stylesheet" type="text/css"  href="responsive/r1-6.css">
<?=$titulo?>
       <script>
          var count = 1;  
      </script>
  <style type="text/css">
    .imgvf {
    background-image: url(img/2-6/a6.gif);
    background-size: 50vw 40vh;
    width: 50vw;
    height: 40vh;
    margin: 0 auto;
    background-repeat: no-repeat;
}
.item3 a{
      width: 200px;
    height: 43px;
        padding: 5px;
}
@media (max-height: 720px){

.imgvf {

    margin: 0 auto;

}
.container, .content-wrapper {

    top: 0px;
 
}
}

  </style>

<div class="container" >
  
     <div class="imgvf" ></div>
 
<form id="form" class="row center seleccion">
<section id="contenedorPuzzle">

            <div class="row">
                  <div class="item3">
                      <a  onclick="result_tipo_2_0_14(1)"  class="btn btn6 " name="escoba" value="">Z ∩ L= {escoba}</a>
                         /
                      <a  id="guantes" onclick="result_tipo_2_0_14(0)"  class="btn btn6" name="guantes"  value="">Z ∩ L= {guantes}</a>
                  </div>                    
            </div> 
</section>
</form>

                                     <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100%" src="img/mate6.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
 <script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php'); ?>
<script>$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript">
$(".btn-intentos").html("1");
function result_tipo_2_0_15(r){

      var  min= $('#Minutos').text();
     var  seg= $('#Segundos').text();
     var  milseg= $('#Centesimas').text();
     var tiempo=min+":"+seg+":"+milseg;


    if (r==1){
      localStorage.setItem("Nota2-0-15","2");
      localStorage.setItem("Time2-0-15", tiempo);
      correcto();

    }
    else{

    count=1;
    incorrecto();
    localStorage.setItem("Nota2-0-15","0");
    localStorage.setItem("Time2-0-15", tiempo);
  }
}
</script>
 
