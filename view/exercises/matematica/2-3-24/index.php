<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

    $numeros = array('120','410','400', '254');

?>
<div class="container-two">
    <div class="filaUno">
        <div class="columna">
            <h5>• ¿Cuántos objetos hay en total?</h5>
            <img src="img/17/image.png" alt="">
        </div>
        <div class="column fila Tabla">
            <div class="minifila">
                <div class="c">C</div>
                <div class="d">D</div>
                <div class="u">U</div>
                <div></div>
            </div>
            <div class="minifila2">
                <div class="box droppable" data-value="1"></div>
                <div class="box droppable" data-value="8"></div>
                <div class="box droppable" data-value="3"></div>
                <div class="d">+</div>
            </div>
            <div class="minifila3">
                <div class="box droppable" data-value="3"></div>
                <div class="box droppable" data-value="1"></div>
                <div class="box droppable" data-value="4"></div>
            </div>
            <hr>
            <div class="minifila4">
                <div class="box droppable" data-value="4"></div>
                <div class="box droppable" data-value="9"></div>
                <div class="box droppable" data-value="7"></div>
            </div>
        </div>
        <div class="pregunta">
            <br>
            <h6> <b>Respuesta:</b> En total hay <span class="rpta droppable" data-value="497"></span> objetos.</h6>
        </div>
        <div class="options aleatorio">
            <div class="obj blue" data-value="183">183</div>
            <div class="obj blue" data-value="314">314</div>
            <div class="obj blue" data-value="1">1</div>
            <div class="obj blue" data-value="8">8</div>
            <div class="obj blue" data-value="3">3</div>
            <div class="obj blue" data-value="3">3</div>
            <div class="obj blue" data-value="1">1</div>
            <div class="obj blue" data-value="4">4</div>
            <div class="obj blue" data-value="497">497</div>
            <div class="obj blue" data-value="9">9</div>
            <div class="obj blue" data-value="4">4</div>
            <div class="obj blue" data-value="7">7</div>
        </div>
    </div>
    
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/17/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript">
$('select').formSelect();


var rpta = 0, otros = 0, element, element2;

    $(".obj").draggable({
        revert: false,
        start: function() {
            element=$(this).attr("data-value"); 
        },
        // finish: function(){
        //     $(this).css("box-shadow","none");
        // }
        
    });
    $( ".droppable" ).droppable({
      classes: {
        "ui-droppable-active": "",
        "ui-droppable-hover": "hover"
      },
      drop: function( event, ui ) {
        element2 = $(this).attr("data-value");
        item = $(this).attr("alt");
        $(this).css("background-color", "rgb(33, 150, 243)");
        

        if(element == element2 || element == item ){
          rpta++;
          console.log(element2)
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });

function result_tipo_2_3_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 10) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-24", "2");
        localStorage.setItem("Time2-3-24", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-24", "0");
        localStorage.setItem("Time2-3-24", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>