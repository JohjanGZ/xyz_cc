<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>

    .boxInfo{
        padding: 10px 150px;
        margin: 10px;
        border-radius: 20px;
        border: 2px solid #ffd54f;
        box-shadow: 1px 2px 1px #ffd64f44;
    }
    .llaveRoja{
        color: #dd2c00;
        font-weight: bold;
    }
    .contentObjt{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        justify-items: center;
    }
    .contentObjt .objeto{
        background: #f9a825;
        padding: 4px 20px;
        border-radius: 20px;
        color: #fff;
        font-size:18px;
    }
    .conjuntoPrin{
        border-radius: 24px;
        background: #7e57c2 ; 
        color: #fff;
        margin: 10px;
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
        <div class="col s1"></div>
        <div class="cajas conjuntoPrin col s5">
            <h4>• A = <span class="llaveRoja">{</span>pera, uva, plátano, manzana<span class="llaveRoja">}</span></h4>
        </div>
        <div class="cajas conjuntoPrin col s5">
            <h4>• B = <span class="llaveRoja">{</span>manzana, sandía, piña, pera<span class="llaveRoja">}</span></h4>
        </div>
        <div class="col s1"></div>
    </div>
    <div class="row boxCheck white">
        <div class="cajas col s12">
            <h4>A ∩ B = <span class="llaveRoja">{</span> <span class="boxInfo"> </span> <span class="llaveRoja">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="cajas contentObjt col s12">
           <div class="objeto" data-value="pera">pera</div>
           <div class="objeto" data-value="pera">manzana</div>
           <div class="objeto" data-value="pera">plátano</div>
           <div class="objeto" data-value="pera">sandía</div>
           <div class="objeto" data-value="pera">uva</div>
           <div class="objeto" data-value="pera">piña</div>
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

    var frutas = 0, otros = 0, element;


    $(".objeto").draggable({
        
         start: function() {
          element=$(this).attr("data-value"); 
      }
   });
   $( ".boxInfo" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="pera" || element=="manzana"){
         frutas++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });

    console.log(frutas, otros);
    // Formulario - Registrados

    function result_tipo_2_0_14() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (frutas == 2 && otros == 0) {

            console.log(frutas, otros);
            localStorage.setItem("Nota2-0-14", "2");
            localStorage.setItem("Time2-0-14", tiempo);
            correcto();

        }

        else {
            console.log(frutas, otros);
            incorrecto();
            localStorage.setItem("Nota2-0-14", "0");
            localStorage.setItem("Time2-0-14", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>