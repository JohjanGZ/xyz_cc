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
    <div class="options aleatorio">
        <div class="obj" data-value="324">324</div>
        <div class="obj" data-value="105">105</div>
        <div class="obj" data-value="551">551</div>
        <div class="obj" data-value="219">219</div>
        <div class="obj" data-value="447">447</div>
        <div class="obj" data-value="387">387</div>
    </div>
    <div class="middle aleatorio">
        <div class="item ">
            <div class="droppable" data-value="324" alt="325"></div>
            <div class="numero card-panel blue darken-1">
                <h5> > 323 < </h5>
            </div>
            <div class="droppable" data-value="325" alt="324"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="105" alt="104"></div>
            <div class="numero card-panel blue darken-1">
                <h5> < 106 > </h5>
            </div>
            <div class="droppable" data-value="104" alt="105"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="551"></div>
            <div class="numero card-panel blue darken-1">
                <h5> = 551 < </h5>
            </div>
            <div class="droppable" data-value="552"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="219" alt="218"></div>
            <div class="numero card-panel blue darken-1">
                <h5> < 220 > </h5>
            </div>
            <div class="droppable" data-value="218" alt="219"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="447"></div>
            <div class="numero card-panel blue darken-1">
                <h5> < 448 < </h5>
            </div>
            <div class="droppable" data-value="449"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="387"></div>
            <div class="numero card-panel blue darken-1">
                <h5> = 387 > </h5>
            </div>
            <div class="droppable" data-value="386"></div>
        </div>
    </div>
    <div class="options aleatorio">
        <div class="obj" data-value="325">325</div>
        <div class="obj" data-value="104">104</div>
        <div class="obj" data-value="552">552</div>
        <div class="obj" data-value="218">218</div>
        <div class="obj" data-value="449">449</div>
        <div class="obj" data-value="386">386</div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/14/respuesta.png">
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
        item = $(this).attr("alt");
        $(this).css("background-color", "rgb(30, 136, 229)");
      //  $( this ).target.append(event.target);    
        

        if(element == element2 || element == item ){
          rpta++;
          console.log(element2)
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });

function result_tipo_2_3_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 12) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-19", "2");
        localStorage.setItem("Time2-3-19", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-19", "0");
        localStorage.setItem("Time2-3-19", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>