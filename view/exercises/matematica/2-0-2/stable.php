<?php require('../../tools/var/variables.php'); ?>
    <head>       
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="../exercises/2-1-1/css/styles.css" media="">
        <link rel="stylesheet" type="text/css" href="../exercises/2-1-1/css/r1.css" media="">   
        <link rel="stylesheet" type="text/css" media="(max-width: 2750px)" href="../exercises/2-1-1/css/r1x2750.css">
        <link rel="stylesheet" type="text/css" media="(max-width: 1500px)" href="../exercises/2-1-1/css/r1x1500.css">
        <link rel="stylesheet" type="text/css" media="(max-width: 1100px)" href="../exercises/2-1-1/css/r1x1100.css">
        <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="../exercises/2-1-1/css/r1x800.css">
        <link rel="stylesheet" type="text/css" media="(max-width: 450px)" href="../exercises/2-1-1/css/r1x450.css">     
        <link rel="stylesheet" type="text/css" href=" https://jqueryui.com/resources/demos/style.css" media=""> 


    </head>
 <?=$titulo?>
<div class="container">
    <section id="contenedorpuzzle">
        <div class="row">
            <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
                <ul>                 
                    <li class="contenedorimg">
                    <img class="item" id="draggable" src="img/1/cangrejo.png" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    </li>
                    <li class="contenedorimg">
                    <img class="item" id="juguete1" src="img/1/camion.png" alt="pieza2" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    </li>
                    <li class="contenedorimg">
                    <img class="item" id="dulce1" src="img/1/chupeta.png" alt="pieza3" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    </li>
                    <li class="contenedorimg">
                    <img class="item" id="animal2" src="img/1/estrella.png" alt="pieza4" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    </li>
                    <li class="contenedorimg">
                    <img class="item" id="dulce2" src="img/1/caramelo.png" alt="pieza5" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    </li>
                    <li class="contenedorimg">                  
                    <img class="item" id="juguete2" src="img/1/avion.png" alt="pieza6" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    </li>
                    <li class="contenedorimg">                   
                    <img class="item" id="dulce3" src="img/1/pastel.png" alt="pieza7" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                    </li>
                    <li class="contenedorimg">                   
                    <img class="item" id="animal3" src="img/1/pez.png" alt="pieza8" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                   </li>
                    <li class="contenedorimg">                  
                    <img class="caballo item" id="animal4" src="img/1/caballito.png" alt="pieza9" draggable="true" ondragstart="start(event)" ondragend="end(event)">                   
                    </li>
                  <!--<img id="pieza1" src="https://3.bp.blogspot.com/-gA3KvKhA-8w/USVEdAiWi6I/AAAAAAAAA58/btNKJqIkXHc/s320/pieza1.jpg" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)">-->
                </ul>
            </div>
        </div>
              <div class="row center recibidor" id="recibidor">
                          <div class="col s4">
                              <label>Juguetes</label>
                            <div class="contenedorPieza" id="uno"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                          </div>
                          <div class="col s4">
                              <label>Dulces</label>
                            <div class="contenedorPieza" id="dos"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                          </div>
                          <div class="col s4">
                              <label>Animales Marinos</label>
                            <div class="contenedorPieza" id="tres"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                          </div>
                </div>


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
 </section>
  </div>
 <?php include ('../tools/botones/botones.php'); ?>

