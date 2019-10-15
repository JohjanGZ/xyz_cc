  
  <?php
 require('../../tools/var/variables.php');
   ?>

  <head>
         
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
           <style type="text/css">
            #contenedorPuzzle{
              width: 70%;
              margin:0 auto;
            }

 
                   table{
                    width: 80%;
                    margin:10% auto 0;
                   }
                   td{
                    max-width: 35px !important;
                   }
                  .n1{
                      background-color: #ff7b7b;
                   }
                  .n2{
                     background-color: #806cf5;
                  }
                  .n1, .n2{
                    color: white;
                    font-weight: 500;
                  }

                  #uno, #dos, #tres, #cuatro, #cinco, #seis, #siete, #ocho, #nueve, #diez, #once, #doce,  .item {
                      box-shadow: inset 0px 1px 3px 0px #7d7c7c !important;
                      width: 100%;
                      height: 50px;
                      max-width: 161px;

                  }
                  .menor{
                    color:red;
                    font-weight: 800;
                  }
                  .item{
                      box-shadow: 2px 2px 2px grey !important;
                      border: solid 2px #ff7b7b !important;
                      border-radius: 5px;
                      padding: 13% !important;
                      text-align: center;
                      font-size: 100%;
                      font-weight: 600;
                      color: #000000;
                      background: #f0edff;
                  }

                  .contenedorPieza .item{
                    box-shadow: none !important;
                  }
                 @media (max-width: 780px) {
                    td, th {
                            padding: 4px 0px !important;
   
                      }



                      #uno, #dos, #tres, #cuatro, #cinco, #seis, #siete, #ocho, #nueve, #diez, #once, #doce, .item {
                           
                              height: 36px;
                          }
                  }

              </style>
              </head>
               <?=$titulo?>
                        <div class="container">
                              <section id="contenedorpuzzle">
                                    <table class="centered">
                                      <tr>
                                        <td class="n1">245</td>
                                        <td></td>
                                        <td class="n1">465</td>
                                        <td ></td>
                                        <td class="n1">297</td>
                                        <td></td>
                                        <td class="n1">424</td>
                                        <td></td>
                                        <td class="n1">102</td>
                                        <td></td>
                                        <td class="n1">320</td>
                                      </tr>
                                      <tr>
                                        <td><div class="contenedorPieza" id="uno"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div></td>
                                        <td><span class="menor"><</span></td>
                                        <td>
                                          <div class="contenedorPieza" id="dos"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                            
                                          </div>
                                        </td>
                                        <td><span class="menor"><</span></td>
                                        <td>
                                          <div class="contenedorPieza" id="tres"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                          </div>
                                        </td>
                                        <td><span class="menor"><</span></td>
                                        <td>
                                          <div class="contenedorPieza" id="cuatro"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                          </div>
                                        </td>
                                        <td><span class="menor"><</span></td>
                                        <td>
                                          <div class="contenedorPieza" id="cinco"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                          </div>
                                        </td>
                                           <td><span class="menor"><</span></td>
                                        <td>
                                          <div class="contenedorPieza" id="seis"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                        </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class="n2">26</td>
                                        <td></td>
                                        <td class="n2">448</td>
                                        <td></td>
                                        <td class="n2">358</td>
                                        <td></td>
                                        <td class="n2">244</td>
                                        <td></td>
                                        <td class="n2">500</td>
                                        <td></td>
                                        <td class="n2">109</td>
                                      </tr>
                                       <tr>
                                        <td><div class="contenedorPieza" id="siete"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">                                        
                                        </div></td>
                                        <td><span class="menor">></span></td>
                                        <td>
                                          <div class="contenedorPieza" id="ocho"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"> 
                                          </div>
                                        </td>
                                        <td><span class="menor">></span></td>
                                        <td>
                                          <div class="contenedorPieza" id="nueve"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                          </div>
                                        </td>
                                        <td><span class="menor">></span></td>
                                        <td>
                                          <div class="contenedorPieza" id="diez"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                          </div>
                                        </td>
                                        <td><span class="menor">></span></td>
                                        <td>
                                          <div class="contenedorPieza" id="once"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                          </div>
                                        </td>
                                           <td><span class="menor">></span></td>
                                        <td>
                                          <div class="contenedorPieza" id="doce"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                                          </div>
                                        </td>
                                      </tr> 
                                     
                                    <tr   id="contenedoritem">
                                       <td class="contenedorimg ">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i102" >102</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg ">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i245" >245</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg ">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i297" >297</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i320" >320</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i424" >424</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i465" >465</div>
                                       </td>
                              
                                    </tr>  
                                    <tr  id="contenedoritem" >
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i500" >500</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i448" >448</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i358" >358</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i264" >264</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i244" >244</div>
                                       </td>
                                       <td><span class="menor"></span></td>
                                       <td class="contenedorimg">
                                       <div class="item" draggable="true" ondragstart="start(event)" ondragend="end(event)" id="i109" >109</div>
                                       </td>
                                    </tr> 
                                                           
                                    </table>

                              </section>
                         </div>
                         <!--modal -->
                          <div id="modal1" class="modal">
                          <div class="modal-content">
                          <h4>¡Respuesta correcta!</h4>
                          <center>
                          <img class="materialboxed"  width="50%" src="../../img/tipos/leeyclasifica.png">
                          </center>
                          </div>
                          <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                          </div>
                          </div>
            <div class="row">
            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">              
            </div>
            </div>
 </section>
<script type="text/javascript">

        function result_tipo_2_2_1(){
            var  min= $('#Minutos').text();
           var  seg= $('#Segundos').text();
           var  milseg= $('#Centesimas').text();
           var tiempo=min+":"+seg+":"+milseg;

              if(
                  document.getElementById('i102').parentNode.id=='uno'          
                  &&
                  document.getElementById('i245').parentNode.id=='dos'                
                  &&                  
                  document.getElementById('i297').parentNode.id=='tres'        
                  &&
                  document.getElementById('i320').parentNode.id=='cuatro'         
                  &&
                  document.getElementById('i424').parentNode.id=='cinco'          
                  &&
                  document.getElementById('i465').parentNode.id=='seis'         
                  &&
                  document.getElementById('i500').parentNode.id=='siete'         
                  &&            
                  document.getElementById('i448').parentNode.id=='ocho'         
                  &&
                  document.getElementById('i358').parentNode.id=='nueve'          
                  &&
                  document.getElementById('i264').parentNode.id=='diez'         
                  &&
                  document.getElementById('i244').parentNode.id=='once'          
                  &&
                  document.getElementById('i109').parentNode.id=='doce'
                )        
                {
           
                localStorage.setItem("Nota2-2-1","2");
                localStorage.setItem("Time2-2-1", tiempo);
                   correcto(); 

               }

              else {
                  incorrecto();
                  localStorage.setItem("Nota2-2-1","0");
                  localStorage.setItem("Time2-2-1", tiempo);                 
              }    
      }

</script>

  <?php require('../../tools/botones/botones.php');?>
