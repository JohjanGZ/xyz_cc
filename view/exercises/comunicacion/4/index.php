<?php require('../../../tools/var/variables.php'); ?>
      <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
              #contenedorpuzzle{
              width: 80%;
              margin: 10vh auto;
              }
              .item img{
                width: 100px ;
                margin: 3 20px 0;
                float: left;
                border:solid transparent;
              }  
              .item{
                width: 100px;
                float:left;
                height: 100px;
                margin: 0 5%;
              }
              h5 {
                font-size: 200%;
              }
              .img-principal{
                margin: 5vh auto 0;
              }
             .recibidor{
                background-color: #c3c3c3;
                height: 50px;
                width: 120px;
                margin-top: 30px;
              }
              .pieza{
                font-size: 20px;
                color: purple;
                font-weight: 900;
                float: left;
                margin: 10vh 5% 0;
                background: #e4e4e4;
                border:solid;
                width: 100px;
              }
              .fila{
                margin: 0 auto;
                width: 70%;
              }
@media (max-width: 1200px){
      .fila{
        
        width: 80%;
      }
}

@media (max-height:720px){
  .pieza {
      margin: 3vh 5% 0;
  }
}
          </style>
        <link rel="stylesheet" type="text/css" href="../exercises/comunicacion/4/css/styles.css">
      </head>
  <?=$titulo?>
<div class="container">
  <center>
      	<section id="contenedorpuzzle">
              <div class="row fila">
              <div class="">
                <div class="item" alt="" id="item1">
                <img src="../exercises/comunicacion/4/img/1.png">
                </div>
              </div>
              	<div class=""><div class="item"  id="item2"><img alt="n" src="../exercises/comunicacion/4/img/2.png"></div></div>
              	<div class=""><div class="item" id="item3"><img src="../exercises/comunicacion/4/img/3.png"></div></div>
                <div class=""><div class="item" alt="n" id="item15"><img alt="n" src="../exercises/comunicacion/4/img/4.png"></div></div>
              </div>
              <div class="row fila">
                 <div class="item" alt="" id="item1"><div class="recibidor" id="recibidor1"></div></div>
                 <div class="item" alt="" id="item1"><div class="recibidor" id="recibidor2"></div></div>
                 <div class="item" alt="" id="item1"><div class="recibidor" id="recibidor3"></div></div>
                 <div class="item" alt="" id="item1"><div class="recibidor" id="recibidor4"></div></div>
              </div>
              <div class="row fila">
                <ul id="piezas">
                  <li><div id="mono" class="pieza">Mono</div></li>
                  <li><div id="perro" class="pieza">Perro</div></li>
                  <li><div id="sapo" class="pieza">Sapo</div></li>
                  <li><div id="tortuga" class="pieza">Tortuga</div></li>
                </ul>
              </div>
        </section>
  </center>
</div>
              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <h4>Respuesta correcta</h4>
                  <center>
                  <img class="materialboxed"  width="80%" src="../exercises/comunicacion/4/img/respuesta.png">
                  </center>
                  </div>
                  <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                  </div>
              </div>
<script src="../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="../exercises/comunicacion/4/js/validate.js"></script>




