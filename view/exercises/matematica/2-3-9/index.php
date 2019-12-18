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
        <div class="obj" data-value="7435">7435</div>
        <div class="obj" data-value="8218">8218</div>
        <div class="obj" data-value="5955">5955</div>
        <div class="obj" data-value="6712">6712</div>
        <div class="obj" data-value="9588">9588</div>
    </div>
    <div class="middle aleatorio">
        <div class="item ">
            <div class="droppable" data-value="7435"></div>
            <div class="numero card-pa">
                <h5>  7 436  </h5>
            </div>
            <div class="droppable" data-value="7437"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="8218"></div>
            <div class="numero card-pa">
                <h5>  8 219  </h5>
            </div>
            <div class="droppable" data-value="8220"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="5955"></div>
            <div class="numero card-pa">
                <h5> 5 956 </h5>
            </div>
            <div class="droppable" data-value="5957"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="6712"></div>
            <div class="numero card-pa">
                <h5> 6 713 </h5>
            </div>
            <div class="droppable" data-value="6714"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="9588"></div>
            <div class="numero card-pa">
                <h5> 9 589 </h5>
            </div>
            <div class="droppable" data-value="9590"></div>
        </div>
    </div>
    <div class="options aleatorio">
        <div class="obj" data-value="7437">7437</div>
        <div class="obj" data-value="8220">8220</div>
        <div class="obj" data-value="5957">5957</div>
        <div class="obj" data-value="6714">6714</div>
        <div class="obj" data-value="9590">9590</div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
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

function result_tipo_2_3_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 10) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-9", "2");
        localStorage.setItem("Time2-3-9", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-9", "0");
        localStorage.setItem("Time2-3-9", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>