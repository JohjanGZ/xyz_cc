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
        <div class="obj" alt="4 722">4 722</div>
        <div class="obj" alt="4 610">4 610</div>
        <div class="obj" alt="4 609">4 609</div>
        <div class="obj" alt="3 285">3 285</div>
        <div class="obj" alt="7 908">7 908</div>
        <div class="obj" alt="7 908">9 908</div>
    </div>
    <div class="middle aleatori">
        <div class="item ">
            <div class="numero card-pa">
                <h5>  4 721  </h5>
            </div>
            <div class="droppable" alt="4 722"></div>
            <div class="numero card-pa">
                <h5>  4 723 </h5>
            </div>
        </div>
        <div class="item">
            <div class="numero card-pa droppable" alt="4 609">
                
            </div>
            <div class="droppable" alt="4 610"></div>
            <div class="numero card-pa">
                <h5>  4 611  </h5>
            </div>
        </div>
        <div class="item ">
            <div class="numero card-pa">
                <h5>  3 284  </h5>
            </div>
            <div class="droppable" alt="3 285"></div>
            <div class="numero card-pa droppable" alt="3 286"></div>
        </div>
        <div class="item ">
            <div class="numero card-pa droppable" alt="7 906">
                
            </div>
            <div class="numero card-pa">
                <h5>7 907</h5>
            </div>
            <div class="numero card-pa droppable" alt="7 908">
                
            </div>
        </div>
        <div class="item ">
            <div class="numero card-pa">
                <h5>  8 047  </h5>
            </div>
            <div class="droppable" alt="8 048"></div>
            <div class="numero card-pa droppable" alt="8 049">
                
            </div>
        </div>
    </div>
    <div class="options aleatorio">
        <div class="obj" alt="7 906">7 906</div>
        <div class="obj" alt="8 048">8 048</div>
        <div class="obj" alt="8 049">8 049</div>
        <div class="obj" alt="9 026">9 026</div>
        <div class="obj" alt="9 024">9 024</div>
        <div class="obj" alt="3 286">3 286</div>
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
        revert:true,
        start: function() {
            element=$(this).attr("alt"); 
            
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
        element2 = $(this).attr("alt");
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

function result_tipo_4_1_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 9) {
        console.log(rpta);
        localStorage.setItem("Nota4-1-8", "2");
        localStorage.setItem("Time4-1-8", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota4-1-8", "0");
        localStorage.setItem("Time4-1-8", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>