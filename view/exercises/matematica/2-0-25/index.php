<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
  #boxCheck{
    text-align: center;
    padding-bottom: 50px;
  }
  .infoContainer{
    border: 1px solid #333;
    padding: 15px 160px;
    border-radius: 10px;
    margin: 0px 10px;
  }
  .conjuntosOpciones{
    display: grid;
    grid-template-columns: 2fr 2fr 2fr 2fr;
    justify-items: center;
    align-items: center;
  }
  .conjuntosOpciones p{
    background: #ffd54f ;
    padding: 4px 20px;
    text-align: center;
    border-radius: 10px;
  }
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
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class=" col s12">
            <h4>• J = {p, q, r, s, t} <span class="spaceStyle"> </span> • K = {m, n, o, p, q, r}  <span class="spaceStyle"> </span>  • L = {m, o, p}</h4>
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s6">
            <h4>• J ∪ K = <span class="llavesContainer ">{</span> <span class="infoContainer groupJK"> </span> <span class="llavesContainer">}</span></h4>
        </div>
        <div class="cajas col s6">
            <h4>• K ∪ L = <span class="llavesContainer ">{</span> <span class="infoContainer groupKL"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="uno">m, n, o, p, q, r, s, t</p>
            <p class="obj" data-value="dos">m, n, o, p, q, r</p>
            <p class="obj" data-value="tres">n,o,p,q,r,s</p>
            <p class="obj" data-value="cuatro">o,p,q,r,s,t</p>
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

    var grupoJK = 0, grupoKL = 0, otros = 0, element;

    $(".obj").draggable({
        
        start: function() {
         element=$(this).attr("data-value"); 
     }
    });
    $( ".groupJK" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="uno"){
          grupoJK++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    $( ".groupKL" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="dos"){
          grupoKL++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(grupoJK, grupoKL);
    // Formulario - Registrados

    function result_tipo_2_0_19() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (grupoJK == 1 && grupoKL == 1 && otros == 0) {

            console.log(grupoJK, grupoKL);
            localStorage.setItem("Nota2-0-19", "2");
            localStorage.setItem("Time2-0-19", tiempo);
            correcto();

        }

        else {
          console.log(grupoJK, grupoKL);
            incorrecto();
            localStorage.setItem("Nota2-0-19", "0");
            localStorage.setItem("Time2-0-19", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>