<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
  #boxCheck{
    text-align: center;
    padding-bottom: 10px;
  }
  #boxCheck h6{
    font-weight: bold;
  }
  #boxCheck h6 .blueColor{
    color: blue;
  }
  .infoContainer{
    border: 1px solid #333;
    padding: 10px 80px;
    border-radius: 10px;
    margin: 0px 10px;
  }
  .conjuntosOpciones{
    display: grid;
    grid-template-columns: 2fr 2fr 2fr;
    justify-items: center;
    align-items: center;
  }
  .conjuntosOpciones p{
    background: #ffd54f ;
    padding: 8px 20px;
    text-align: center;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;
  }
    @media only screen and (max-width: 1200px){
        .container-two {
            padding-top: 10vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
    }
    @media screen and (max-width: 1300px){
      #boxCheck h6 {
        font-size: 14px;
      }
      .infoContainer{
        border: 1px solid #333;
        padding: 6px 60px;
        border-radius: 10px;
        margin: 0px 10px;
      }
      .conjuntosOpciones p{
        background: #ffd54f ;
        padding: 4px 12px;
        text-align: center;
        border-radius: 10px;
        font-size: 18px;
        font-weight: bold;
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
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class=" col s12">
            <h6>• <span class="blueColor">A = {</span> rectángulos azules pequeños <span class="blueColor">}</span> <span class="spaceStyle"> </span> • <span class="blueColor">B = { </span>círculos verdes grandes y pequeños <span class="blueColor">}</span>  <span class="spaceStyle"> </span>  • <span class="blueColor">C = { </span>cuadrado, círculo, triángulo de color rojo <span class="blueColor">}</span></h6>
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s12">
            <h4>• ​En el conjunto A,  <span class="infoContainer todos"> </span> los elementos tienen el mismo color.</h4>
        </div>
        <div class="cajas col s12">
            <h4>• ​En el conjunto B, <span class="infoContainer tamanio"> </span> elementos son del mismo tamaño. </h4>
        </div>
        <div class="cajas col s12">
            <h4>• ​En el conjunto C, <span class="infoContainer forma"> </span> de los elementos tiene la misma forma.</h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="uno">todos</p>
            <p class="obj" data-value="dos">algunos</p>
            <p class="obj" data-value="tres">ninguno</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-6/respuesta.png">
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

    var todos = 0, tamanio = 0, forma = 0, otros = 0, element;

    $(".obj").draggable({
        
        start: function() {
         element=$(this).attr("data-value"); 
     }
    });
    $( ".todos" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="uno"){
          todos++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    $( ".tamanio" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="dos"){
          tamanio++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    $( ".forma" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="tres"){
          forma++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(forma, tamanio, todos);
    // Formulario - Registrados

    function result_tipo_2_0_20() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (todos == 1 && tamanio == 1 && forma == 1 && otros == 0) {

            console.log(grupoJK, grupoKL);
            localStorage.setItem("Nota2-0-20", "2");
            localStorage.setItem("Time2-0-20", tiempo);
            correcto();

        }

        else {
          console.log(grupoJK, grupoKL);
            incorrecto();
            localStorage.setItem("Nota2-0-20", "0");
            localStorage.setItem("Time2-0-20", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>