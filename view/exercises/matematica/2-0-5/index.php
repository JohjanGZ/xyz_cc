<?php require('../../../tools/var/variables.php'); ?>

<style>

.imgvf {
    background-image: url(img/1-5/conjunto.png);
    background-size: 600px 280px;
    width: 600px;
    height: 280px;
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
    top: 68px;
    position: relative;
    margin: 0 auto !important;
    max-width: 1200px;
}
.imgvfi {
    height: 80px;
    width: 100px;
    margin-left: -30px;
}
.item3{
    float: left;
    width: 170px;
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
.switch label {
    cursor: pointer;
    font-size: 1.8rem;
    background-color: #fff;
    padding: 9px;
    border-radius: 5px;
    color: #000000;
    box-shadow: 1px 1px 5px #8080808a;
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
.Alabel{
  margin-left:33px;
}

@media (max-width: 1200px){

.seleccion {
    top: 30px;
    position: relative;
}
} 
@media (max-width: 1300px){

.imgvf {

    background-size: 100%;
    width: 389px;
    height: 172px;
    margin: 0 auto -45px;
    background-repeat: no-repeat;
}
.seleccion {

    width: 1110px;
}
} 

@media (max-width: 1180px){

.imgvfi {
    height: 70px;
    width: 70px;
    margin-left: -22px;
}
.seleccion {
    width: 1027px;
    margin: 0 27px;
}
.item2 {

    margin-left: 0;
    margin-right: 0;
}
.container, .content-wrapper {

    margin: 20px auto;

}
} 
@media (max-height:720px) {
.seleccion {
    transform: translate(15vw, -37vh);
    top: 68px;
    position: relative;
    width: 63%;
}
.imgvf {
    transform: translate(3vw, 15vh);
    background-size: 380px 200px;
    width: 380px;
    height: 200px;
    margin: 0;
    background-repeat: no-repeat;
    border: solid 1px #c1c1c1;
    background-color: white;
    box-shadow: 0 0 7px 0px #00000033;
    border-radius: 36px;
}
.Alabel {
    margin-left: 10px;
}
.item2 {
    font-size: 24px;
    margin-top: 0px;
    width: 71px;
    float: left;
    margin-left: 18px;
    margin-right: 0px;
}
.imgvfi {
    height: 40px;
    width: 61px;
    margin-left: 10px;
}
.item3 {
    float: left;
    width: 100px;
    padding: 5px 0px;
}
.switch label .lever {
    margin: 0 5px;
}
.switch label {

    font-size: 1.2rem;
}

}
</style>
      <script>
          var count = 3;  
      </script>
    <!--<link rel="stylesheet" type="text/css" media="(max-width: 2750px)" href="responsive/r3x2750.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 1500px)" href="responsive/r3x1500.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 1100px)" href="responsive/r3x1100.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="responsive/r3x800.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 485px)" href="responsive/r3x450.css">-->
 <?=$titulo?>
<div class="container" >
    <section id="">
      <div class="row" ><div class="imgvf" ></div></div>  
        <form class="row center seleccion" method="POST" action="<?=$_SERVER['PHP_SELF']?>" id="seleccion">

<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->
            <div class=" row ">
                     <div class="col s4 ">                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/avioneta.png">
                        </div>                        
                         <div class="item2">
                         
                          <span style="color:red;" >∈ </span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="avioneta" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/taxi.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∈</span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="taxi" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                        </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/helicoptero.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∈ </span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="helicoptero" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>                    
            </div> 
<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->

            <div class="row">
            <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/carro-policia.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∈ </span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="policia" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/camion.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∉</span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="camion" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/globo.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∈ </span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="globo" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>   
                  </div> 

<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->

        <div class="row">
            <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/bus.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∈ </span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="bus" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/avioneta.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∉ </span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="avionetaDos" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/taxi.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∉</span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="taxiDos" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>   
                  </div> 

<!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->

                  <div class="row">
            <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/carro-policia.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∉</span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="polciaDos" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/globo.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∉</span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                  F
                                  <input name="globoDos" type="checkbox">
                                  <span class="lever"></span>
                                  V
                                </label>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col s4 ">
                        
                          <div class="item1">
                          <img class="imgvfi" src="img/1-5/camion.png">
                        </div>
                        
                         <div class="item2">
                         
                          <span style="color:red;" >∈</span>
                          <span class="Alabel">F</span>
                          
                        </div>
                        <div class="item3">
                            <!-- Switch -->
                              <div class="switch">
                                <label>
                                 <span class="trn" data-trn-key="f">F</span>
                                  <input name="camionDos"   type="checkbox">
                                  <span value="camionDos" class="lever"></span>
                                   <span class="trn" data-trn-key="v">V</span>
                                </label>
                              </div>
                            </div>
                      
                      </div>   
                  </div> 
 </form>
                                     <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                            <img class="materialboxed"  width="100%" src="https://secureservercdn.net/166.62.110.90/igl.698.myftpupload.com/wp-content/uploads/2017/03/Header-Imagev.13.jpg">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
    </div>
 <script src="../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php'); ?>
<script type="text/javascript">
        function result_tipo_2_0_5(){
              var  min= $('#Minutos').text();
             var  seg= $('#Segundos').text();
             var  milseg= $('#Centesimas').text();
             var tiempo=min+":"+seg+":"+milseg;

              if(

               $('input:checkbox[name=avioneta]:checked').val()=="on"
              
              &&
                $('input:checkbox[name=taxi]:checked').val()==null
              &&
                $('input:checkbox[name=helicoptero]:checked').val()==null
              &&
                $('input:checkbox[name=policia]:checked').val()=="on"
              &&
                $('input:checkbox[name=camion]:checked').val()==null
              &&
                $('input:checkbox[name=globo]:checked').val()=="on"
              &&
                $('input:checkbox[name=bus]:checked').val()=="on"
              &&
                $('input:checkbox[name=avionetaDos]:checked').val()==null
              &&
                $('input:checkbox[name=taxiDos]:checked').val()=="on"
              &&
                $('input:checkbox[name=policiaDos]:checked').val()==null
              &&
                $('input:checkbox[name=globoDos]:checked').val()==null
              &&
                $('input:checkbox[name=camionDos]:checked').val()=="on"

                )


            {      
                localStorage.setItem("Nota2-0-5","2");
                localStorage.setItem("Time2-0-5", tiempo);
                 correcto(); 
            }
            else {
                incorrecto();
                localStorage.setItem("Nota2-0-5","0");
                localStorage.setItem("Time2-0-5", tiempo);       
            }
         }
    </script>