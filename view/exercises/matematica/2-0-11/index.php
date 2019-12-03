<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
    @media only screen and (max-width: 1300px){
        .container-two {
            padding-top: 5vh;
            margin: 0 auto;
            width: 99%;
            display: grid;
            grid-template-columns: 1fr 11fr;
        }
        .imagenPrincipal img{
            width: 380px;
            height: auto;
        }
        #uno{
            grid-column: 1/2;
            grid-row: 1/4;
            width: 100%;
        }
        #dos, #tres, #cuatro{
            grid-column: 1/12;
            width: 100%;
        }
        #cinco{
            grid-column: 2/12;
            grid-row: 1/3;
            width: 80%;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }
        .filaUno{
            display: grid;
            grid-template-columns: 1fr 8fr 1fr;
            text-align: center;
            width: 100%;
        }
        .card-panel{
            padding: 20px 10px;
            margin: 10px 4px;
        }
        .filaTres{
            grid-template-columns: 1fr 1fr 1fr;
            font-size: 16px;
        }
        .letStyle{
            font-size: 20px;
            color: #4527a0;
            font-weight: bold;
        }

    }
     @media only screen and (max-width: 1100px){
        .container-two {
            padding-top: 8vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 90%;
        }
        .imagenPrincipal img{
            width: 340px;
            height: auto;
        }
    } 
</style>
<?=$titulo?>
<div class="container-two">
        <div class="row" id="uno">
            <div class="col s4"></div>
            <div class="imagenPrincipal col s4 cajas">
                <img src="img/1-10/conjunto.png" alt="">
            </div>
            <div class="col s4"></div>
        </div>
        <div class="row" id="dos">
            <div class="col s2"></div>
            <div class="filaUno col s8 caja">
                <div class="letStyle">· G={ </div>
                <div class="card-panel light-blue lighten-5 dropUno" style="margin-top: 20px;"></div>
                <div class="letStyle"> } </div>
            </div>
            <div class="col s2"></div>
        </div>
        <div class="row" id="tres">
            <div class="col s2"></div>
            <div class="filaUno col s8 caja">
                <div class="letStyle">· M={ </div>
                <div class="card-panel light-blue lighten-5 dropDos" style="margin-top: 10px;"></div>
                <div class="letStyle"> } </div>
            </div>
            <div class="col s2"></div>
        </div>
        <div class="row" id="cuatro">
            <div class="col s2"></div>
            <div class="filaDos col s8 caja">
                <div class="letStyle">·</div>
                <div class="card-panel light-blue lighten-5 dropTres" style="margin-top: 10px;"></div>
                <div class="letStyle">es</div>
                <div class="card-panel light-blue lighten-5 dropCuatro" style="margin-top: 10px;"></div>
                <div class="letStyle">de</div>
                <div class="card-panel light-blue lighten-5 dropCinco" style="margin-top: 10px;"></div>
            </div>
            <div class="col s2"></div>
        </div>
        <div class="row tresFila" id="cinco">
            <div class="col s2 m2"></div>
            <div class="filaTres col s8 m8 aleatorio">
                <div class="card-panel objeto blue white-text" data-value="gallina">gallina</div>
                <div class="card-panel objeto blue white-text" data-value="pato">pato</div>
                <div class="card-panel objeto blue white-text" data-value="gallo">gallo</div>
                <div class="card-panel objeto blue white-text" data-value="m">M</div>
                <div class="card-panel objeto blue white-text" data-value="vaca">vaca</div>
                <div class="card-panel objeto blue white-text" data-value="gato">gato</div>
                <div class="card-panel objeto blue white-text" data-value="g">G</div>
                <div class="card-panel objeto blue white-text" data-value="subconjunto">subconjunto</div>
                <div class="card-panel objeto blue white-text" data-value="oveja">oveja</div>
            </div>
            <div class="col s2 m2"></div>
        </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-10/respuesta.png">
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

var element;
var grupo1 = 0;
var grupo2 = 0;
var grupo3 = 0;
var grupo4 = 0;
var grupo5 = 0;

$(".objeto").draggable({
    revert: false,
    start: function() {
        element=$(this).attr("data-value");
        $(this).css("background", "none");
    }
});


$(".dropUno").droppable({
    
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("background", "none");
    //$( this ).target.append(event.target);
        
    if(element=="pato"){
        grupo1++;
    }else if(element=="gallina"){
        grupo1++;
    }else if(element == "gallo"){
        grupo1++;
    }
        element.removeClass("pieza");
    }

});

$(".dropDos").droppable({
    
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("background", "none");
    //$( this ).target.append(event.target);
        
    if(element=="vaca"){
        grupo2++;
    }else if(element=="oveja"){
        grupo2++;
    }
        element.removeClass("pieza");
    }

});

$(".dropTres").droppable({
    
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("background", "none");
    //$( this ).target.append(event.target);
        
    if(element=="m"){
        grupo3++;
    }
        element.removeClass("pieza");
    }

});


$(".dropCuatro").droppable({
    
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("background", "none");
    //$( this ).target.append(event.target);
        
    if(element=="subconjunto"){
        grupo4++;
    }
        element.removeClass("pieza");
    }

});

$(".dropCinco").droppable({
    
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("background", "none");
    //$( this ).target.append(event.target);
        
    if(element=="g"){
        grupo5++;
    }
        element.removeClass("pieza");
    }

});

    // Formulario - Registrados

    function result_tipo_2_0_10() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (grupo1 == 3 && grupo2 == 2 && grupo3 == 1 && grupo4 ==1 && grupo5 == 1 ) {
            localStorage.setItem("Nota2-0-8", "2");
            localStorage.setItem("Time2-0-8", tiempo);
            correcto();

        }

        else {
            incorrecto();
            localStorage.setItem("Nota2-0-8", "0");
            localStorage.setItem("Time2-0-8", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>