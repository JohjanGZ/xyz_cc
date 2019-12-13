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
    <div><h5>Antecesor</h5></div>
    <div><h5>Número</h5></div>
    <div><h5>Sucesor</h5></div>
    <div class="options aleatorio">
        <div class="obj" data-value="735">735</div>
        <div class="obj" data-value="818">818</div>
        <div class="obj" data-value="955">955</div>
        <div class="obj" data-value="670">670</div>
        <div class="obj" data-value="598">598</div>
    </div>
    <div class="middle aleatorio">
        <div class="item ">
            <div class="droppable" data-value="735"></div>
            <div class="numero card-pa">
                <h5>  736  </h5>
            </div>
            <div class="droppable" data-value="737"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="818"></div>
            <div class="numero card-pa">
                <h5>  819  </h5>
            </div>
            <div class="droppable" data-value="820"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="955"></div>
            <div class="numero card-pa">
                <h5> 956 </h5>
            </div>
            <div class="droppable" data-value="957"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="670"></div>
            <div class="numero card-pa">
                <h5> 671 </h5>
            </div>
            <div class="droppable" data-value="672"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="598"></div>
            <div class="numero card-pa">
                <h5> 599 </h5>
            </div>
            <div class="droppable" data-value="600"></div>
        </div>
    </div>
    <div class="options aleatorio">
        <div class="obj" data-value="737">737</div>
        <div class="obj" data-value="820">820</div>
        <div class="obj" data-value="957">957</div>
        <div class="obj" data-value="672">672</div>
        <div class="obj" data-value="600">600</div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/9/respuesta.png">
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
        revert:false,
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
        "ui-droppable-hover": "dropable-hover"
      },
      drop: function( event, ui ) {
        element2 = $(this).attr("data-value");
        $(this).css("background-color", "rgb(30, 136, 229)");
      //  $( this ).target.append(event.target);    
        

        if(element == element2 ){
          rpta++;
          console.log(element2)
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });

function result_tipo_2_2_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 10) {
        console.log(rpta);
        localStorage.setItem("Nota2-2-9", "2");
        localStorage.setItem("Time2-2-9", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-2-9", "0");
        localStorage.setItem("Time2-2-9", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>