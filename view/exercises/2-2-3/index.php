  
  <?php

 include ('item/variables.php');
  include('../../php/config.php');
   ?>

    <?php $_SESSION['alumno']= $_POST['alumno']; ?>
          <head>
         
              <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
                 <style type="text/css">

                 </style>
          </head>
<?=$titulo?>
                      <div class="container">
                            <section id="contenedorpuzzle">
                                  <table class="centered">
                                    <tr>

                                      <td class="n1">428</td>
                                      <td>-</td>
                                      <td class="n1">221</td>
                                      <td >+</td>
                                      <td class="n1">104</td>
                                      <td>-</td>
                                      <td class="n1">215</td>

                                    </tr>
                                    <tr>

                                      <td class="n1">428</td>
                                      <td>-</td>
                                      <td class="n1">221</td>
                                      <td >+</td>
                                      <td class="n1">104</td>
                                      <td>-</td>
                                      <td class="n1">215</td>

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
                                        <div class="contenedorPieza" id="dos"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"> 
                                        </div>
                                      </td>
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
                                    </tr>                                 
                       </table>
                  <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                          <ul>
                              <li class="contenedorimg">
                              <img src="img/item508.png"  ondragstart="start(event)" ondragend="end(event)" id="A"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item407.png"  ondragstart="start(event)" ondragend="end(event)" id="B"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item390.png"  ondragstart="start(event)" ondragend="end(event)" id="C"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="D"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="F"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="G"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="H"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="I"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="J"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="K"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="L"/>
                              </li>
                              <li class="contenedorimg">
                                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="M"/>
                              </li>
                          </ul>
                    </div>
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
 <?php include ('item/botones.php'); ?>