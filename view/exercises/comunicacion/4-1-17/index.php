<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
          </head>
          <style type="text/css">
            .svg{
                width: 1200px;
                display:flex;
                flex-wrap:wrap;
                justify-content:center;
            }
            .colores img{
              width: 50px;
              margin: 2vh;
              border-radius: 18%;
            }
            #contenedorpuzzle{
            width: 80%;
            margin: 10vh auto;
            }
            .item img{
              width: 250px ;
              margin: 3 20px 0;
              float: left;
              border:solid transparent;           
            }
           .item img:hover{
            border:solid;
            }   
            h5 {
            font-size: 200%;
            }
            .img-principal{
              margin: 5vh auto 0;
            }
            .fila1, .fila2, .fila3{
              margin: 0 auto 2vh;
              width: 1160px;
              box-shadow: 0 0 5px #80808061;
            }
            .container, .content-wrapper{
                margin: 10vh auto 0;
            }
            .fila1 img{
              width: 20vw;
              margin:0 auto;
            }

            @media (max-width: 1200px){
              .container, .content-wrapper{
                margin: 42px auto 0;
            }
            }

            #imgIzquierda li, #imgDerecha li{
                width: 340px;
                height: 125px;
                border: 1px solid silver;
                position: relative;
                /* padding: 5px 32px; */
                float: left;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #imgIzquierda li:hover,  #imgDerecha li:hover{
                background-color: silver;
            }


            #imgIzquierda img, #imgDerecha img{
                 width: 140px;
                  max-height: 95px;
                  position: absolute;
                  top: 0;
                  bottom: 0;
                  margin: auto;
             

            }
            .campo{
              float: left;
            }
            ul{
              margin: 0;
            }
            .a span, .b span{
              font-size: 30px;
              text-align: center;
              line-height: 38px;
              font-weight: 600;
            }
            .b span span, .a span span{
              color: #37D3F7;
            }
            .a span{
              font-size: 20px;
              line-height: 25px;
            }

            h4{
              font-size: 1.9rem;
              margin: 0;
              padding: 0;
            }
          </style>
  <?=$titulo?>
  <body>
  <div class="container">
        <div class="row svg">

            <div class="campo" id="imgIzquierda">

                <ul id="listA">
                    <li alt="uno" class="a" id="obj1"><span>Expresan el mundo subjetivo del autor, sus emociones y sentimientos. Suele escribirse en verso pero también se puede usar la prosa.</span></li>
                    <li alt="dos" class="a" id="obj2"><span>Es la representación de problemas graves con intervención. a veces, de elementos cómicos, y su final suele ser sombrío.</span></li>
                    <li alt="tres" class="a" id="obj3"><span>Narraciones breves de un suceso imaginario y con argumento sencillo</span></li> 
                </ul>

            </div>
            <div class="campo" id="centro">
                <canvas height="100px" width="1020px" id="micanvas"></canvas>
            </div>
            <div class="campo" id="imgDerecha">
                <ul id="listB">
                  <li alt="tres" class="b" id="obj6"><span>Textos narrativos</span></li>
                  <li alt="dos" class="b" id="obj7"><span>Textos dramáticos</span></li>
                  <li alt="uno" class="b" id="obj8"><span>Textos líricos</span></li>
                </ul>
            </div>

        </div>
        <div class="row fila2">

        </div>
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
  </body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

var r=0;

var ul = document.querySelector('#listA');
 for (var i = ul.children.length; i >= 0; i--) {
     ul.appendChild(ul.children[Math.random() * i | 0]);
 }
 var ul = document.querySelector('#listB');
 for (var i = ul.children.length; i >= 0; i--) {
     ul.appendChild(ul.children[Math.random() * i | 0]);
 }

var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

$('.a').click(function(){
var obj1=null;
var obj2=null;
var valor= $(this).attr("value");
if(valor != 1){
    var sitio1=$(this).index();
   $('.a').css({"background-color":"white","border": "solid 1px silver", 
     "box-shadow": "none", "z-index": "0"});

    $(this).css({"background-color":"silver","background-color": "rgba(254, 205, 84, 0.65)","border": "solid white", 
     "box-shadow": "0 0 3px black","z-index": "1"});

     obj1= $(this).attr("alt");
     console.log(obj1);
     ctx.beginPath();
     switch(sitio1){
       case 0:
             ctx.moveTo(170, 0); 
         break;
       case 1:
             ctx.moveTo(510, 0);
         break;
       case 2:
             ctx.moveTo(850, 0);
         break;
       case 3:
             ctx.moveTo(1190, 0);
         break;
       case 4:
             ctx.moveTo(1530, 0);
         break;
}
valor=1;
}

$('.b').click(function(){

var sitio2=$(this).index();
$('.b').css({"background-color":"white"});
$(this).css({"background-color":"silver","background-color": "rgba(254, 205, 84, 0.65)", "border": "solid white","box-shadow": "0 0 3px black","z-index": "1"});
     var obj2= $(this).attr("alt");
       console.log(obj2);
         switch(sitio2){
           case 0:
               ctx.lineTo(170, 100);
             break;
           case 1:
               ctx.lineTo(510, 100);
             break;
           case 2:
               ctx.lineTo(850, 100);
             break;
           case 3:
               ctx.lineTo(1190, 100);
             break;
           case 4:
               ctx.lineTo(1530, 100);
             break;
         }
       ctx.strokeStyle = "orange";
       ctx.lineWidth = 5;
       ctx.stroke();
      



           if(obj1==obj2){
             r++;
             console.log(r);
           }
});
});

    function result_tipo_4_1_17() {
            var min = $('#Minutos').text();
            var seg = $('#Segundos').text();
            var milseg = $('#Centesimas').text();
            var tiempo = min + ":" + seg + ":" + milseg;

            if (r == 3) {
                localStorage.setItem("Nota<?=$cod?>", nota);
                localStorage.setItem("Time<?=$cod?>", tiempo);
                correcto();
            } else {
                incorrecto();
                localStorage.setItem("Nota<?=$cod?>", "0");
                localStorage.setItem("Time<?=$cod?>", tiempo);
            }
    }

</script>