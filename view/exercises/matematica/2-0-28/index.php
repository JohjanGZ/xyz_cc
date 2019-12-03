 <?php require('../../../tools/var/variables.php'); ?>

<style>
.imgvf {
    background-image: url(img/2-9/a9.gif);
    background-size: 100% 100%;
    width: 530px;
    height: 315px;
    margin: 0 auto 0;
    background-repeat: no-repeat;
}

.contenedorimg {
    border: solid 1px gainsboro;
    width: 100px;
    height: 76px;
    margin: 5px;
    border-radius: 15px;
}
#contenedorPiezas {
    background: #5561ff00;
    /* width: 652px; */
    height: 100px;
    float: left;
    margin-left: 211px;
    /* box-shadow: 0px 0px 10px 2px #dadada; */
    margin-top: 80px;
}

#contenedorPuzzle img {
    float: left;
    padding: 0;
    width: 70px;
    height: auto;
    position: relative;
    z-index: 10;
}

.seleccion {
    width: 50%;
    top: 10%;
    position: relative;
}

.imgvfi{

  height: 50px;
  width:50px;
}
.item3{

    float: left;
    width: 150px;
    
    padding: 13px;
}

.item2{
      font-size: 24px;
    margin-top: 15px;
    width: 71px;
    float: left;
    
    margin-left: 28px;
    margin-right: 25px;
}
.item1{
  width: 50px;
    float: left;
 
}

.switch label .lever {
    content: "";
    display: inline-block;
    position: relative;
    width: 36px;
    height: 14px;
    background-color: rgba(128, 28, 92, 0.65);
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background 0.3s ease;
    transition: background 0.3s ease;
    vertical-align: middle;
    margin: 0 16px;
}

.switch label .lever:after {
    background-color: #861b5f;
    -webkit-box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
}

.switch label input[type=checkbox]:checked + .lever {
    background-color: #fdcc5359;
}

.switch label input[type=checkbox]:checked + .lever:after {
    background-color: #ffd768;
}

.switch, .switch * {
    -webkit-tap-highlight-color: transparent;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-bottom: -14px;
    padding-bottom: -21px;
}

section {

    margin-top: 15vh;
    margin-left: 15vw;

}

@media (max-width: 1300px){
.grafica {
    height: 320px !important;
    width: 349px !important;
}
.contenedorPieza {
    min-height: 93px;
}
}

.row .col {

    padding: 0 0.0rem;

}
</style>

<div class="container">
  <?=$titulo?>
    <section id="contenedorPuzzle">
      <div class="row" >
<div class="col s5">
        <div class="imgvf" ></div>
  </div>

        <form class="col s7  seleccion" method="POST"  id="seleccion">

<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->

            <div class="row">
         
                      <div class="col s5">
                       <b> - Todas las sillas son iguales</b>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="1" type="checkbox" checked="checked">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                       </div> 
                      </div>   
              

<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->

            <div class="row">
         
                          <div class="col s5">
                       <b> - Algunas sillas son de 4 patas</b>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="2" type="checkbox" checked="checked">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                       </div> 
                      </div>   

<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->

            <div class="row">
         
                          <div class="col s5">
                       <b> - Solo dos sillas tienen 5 ruedas</b>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="3" type="checkbox" checked="checked">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                       </div> 
                      </div>   

<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->

            <div class="row">
         
                      <div class="col s5">
                       <b> - Ninguna silla tiene dos ruedas</b>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="4" type="checkbox" checked="checked">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                       </div> 
                      </div>   

 </form>
 </div>
 </section> 

                                      <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100%" src="img/mate9.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
   </div>
    <script src="../../../../../js/core.js"></script>
<?php require_once('../../../tools/botones/botones.php'); ?>
<script type="text/javascript">
  function result_tipo_2_0_22(){

    var  min= $('#Minutos').text();
    var  seg= $('#Segundos').text();
    var  milseg= $('#Centesimas').text();
    var  tiempo=min+":"+seg+":"+milseg;
    
      if(
           $('input:checkbox[name=1]:checked').val()==null    
        &&
           $('input:checkbox[name=2]:checked').val()=="on"
        &&
           $('input:checkbox[name=3]:checked').val()=="on"
        &&
           $('input:checkbox[name=4]:checked').val()==null   
       )
      {      
        localStorage.setItem("Nota2-0-22","2");
        localStorage.setItem("Time2-0-22", tiempo);

         correcto(); 
      }

    else {

        incorrecto();
         
        localStorage.setItem("Nota2-0-22","0");
        localStorage.setItem("Time2-0-22", tiempo);
       
    }  
}
</script>
</body>


