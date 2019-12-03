<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
    @media only screen and (max-width: 1200px){
        .container-two {
            padding-top: 10vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
    }
    @media only screen and (max-width: 1100px){
        .container-two {
            padding-top: 10vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 90%;
        }
    }
    .cajas span{
        border: 1px solid #333;
        padding: 6px 120px;
        margin: 0px 4px;
        border-radius: 20px;
    }
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas col s5">
            <h4>• M = {nombres de insectos}</h4>
        </div>
        <div class="cajas col s7">
            <h4>• M = { <span class="droppable" data-value="insecto"> </span> }</h4>
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s5">
            <h4>• V = {las vocales}</h4>
        </div>
        <div class="cajas col s7">
            <h4>• V = { <span class="droppable" data-value="vocales"> </span> }</h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="cajas col s5">
            <h4>• L = {letras de la palabra "cuaderno"}</h4>
        </div>
        <div class="cajas col s7">
            <h4>• L = { <span class="droppable" data-value="cuaderno"> </span> }</h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="cajas col s5">
            <h4>• R = {números del 0 al 5}</h4>
        </div>
        <div class="cajas col s7">
            <h4>• R = { <span class="droppable" data-value="numeros"> </span> }</h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="cajas chooserBox col s12 aleatorio">
            <p class="obj" data-value="insecto">hormiga</p>
            <p class="obj" data-value="insecto">Mosca</p>
            <p class="obj" data-value="cuaderno">c,u,a,d,e,r,n,o</p>
            <p class="obj" data-value="numeros">0;1;2;3;4;5</p>
            <p class="obj" data-value="insecto">escarabajo</p>
            <p class="obj" data-value="vocales">a,e,i,o,u</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-13/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript">

var rpts = 0, otros = 0, element, element2;

$(".obj").draggable({
    
    start: function() {
     element=$(this).attr("data-value"); 
 }
});
$( ".droppable" ).droppable({
  classes: {
    "ui-droppable-active": ".blue",
    "ui-droppable-hover": "ui-state-hover"
  },
  drop: function( event, ui ) {
    $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
  //  $( this ).target.append(event.target);
      element2=$(this).attr("data-value");
    if(element==element2){
      rpts++;
    }else{
      otros++;
    }
    element.removeClass("pieza");
  }
});
console.log(rpts, otros);
    // Formulario - Registrados

    function result_tipo_2_0_13() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rpts == 6 && otros == 0) {

            console.log(rpts, otros);
            localStorage.setItem("Nota2-0-13", "2");
            localStorage.setItem("Time2-0-13", tiempo);
            correcto();

        }

        else {
            console.log(rpts, otros);
            incorrecto();
            localStorage.setItem("Nota2-0-13", "0");
            localStorage.setItem("Time2-0-13", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>