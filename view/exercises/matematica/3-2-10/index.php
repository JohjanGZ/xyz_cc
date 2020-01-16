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
        <div class="obj" data-value="4762">4762</div>
        <div class="obj" data-value="2221">2221</div>
        <div class="obj" data-value="7859">7859</div>
        <div class="obj" data-value="5303">5303</div>
        <div class="obj" data-value="8636">8636</div>
    </div>
    <div class="middle aleatorio">
        <div class="item ">
            <div class="droppable" data-value="4762"></div>
            <div class="numero card-pa">
                <h5>  4 763 </h5>
            </div>
            <div class="droppable" data-value="4764"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="2221"></div>
            <div class="numero card-pa">
                <h5> 2 222 </h5>
            </div>
            <div class="droppable" data-value="2223"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="7859"></div>
            <div class="numero card-pa">
                <h5> 7 860 </h5>
            </div>
            <div class="droppable" data-value="7861"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="5303"></div>
            <div class="numero card-pa">
                <h5>5 304	 </h5>
            </div>
            <div class="droppable" data-value="5305"></div>
        </div>
        <div class="item">
            <div class="droppable" data-value="8636"></div>
            <div class="numero card-pa">
                <h5> 8 637	 </h5>
            </div>
            <div class="droppable" data-value="8638"></div>
        </div>
    </div>
    <div class="options aleatorio">
        <div class="obj" data-value="4764">4764</div>
        <div class="obj" data-value="2223">2223</div>
        <div class="obj" data-value="7861">7861</div>
        <div class="obj" data-value="5305">5305</div>
        <div class="obj" data-value="8638">8638</div>
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
        $(this).css("background-color", "rgb(253, 168, 57");
      //  $( this ).target.append(event.target);    
        

        if(element == element2 ){
          rpta++;
          console.log(rpta)
        }else{
          otros++;
          console.log(rpta)
        }
        ui.draggable.draggable("disable", 1);
      }
    });

function result_tipo_3_2_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 10) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-10", "2");
        localStorage.setItem("Time2-3-10", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-10", "0");
        localStorage.setItem("Time2-3-10", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>