<?php require('../../../tools/var/variables.php'); ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?= $di ?>/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
</head>
<?=$titulo?>
<style>
.container-two {
    margin: 0 auto;
    max-width: 1280px;
    width: 80%;
    padding-top: 6vh;
}

.grid-item {
    border: 1px solid silver;
    width: 40px;
    height: 40px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
.container-grid{
    display: grid;
    grid-template-columns: 4fr 2fr 8fr;
    row-gap: 20px;
}
.imagenPrincipal{
    grid-column: 1/2;
    grid-row: 1/5;
}
.opcUno, .opcDos, .opcTres, .opcCuatro, .opcCinco{
    grid-column: 2/4;
    margin: 10px;
}
.container-grid h6{
    font-size: 24px;
    font-weight: 400;
}
#imagePrincipal{
    width: 500px;
}
.opcSeis{
    width: 100%;
    justify-items: center;
    align-items: center;
    grid-column: 1/8;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
}
.opcSeis .obj{
    padding: 6px 20px;
    background-color: rgb(19, 160, 241);
    border-radius: 12px;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
}

.boContainer{
    padding: 10px 40px;
    height: 100%;
    margin: 10px;
    width: 200px;
    border: 1px solid rgb(230, 230, 230);
    border-radius: 12px;
    background: rgb(253, 253, 249);
}
.img {
    width: auto;
    height: 110px;
}
.bn {
    border: none;
}
.br {
    border-right: 0px solid transparent;
}
.bl {
    border-left: 1px solid transparent;
}
.mr {
    margin-right: 4vh;
}
.ml {
    margin-left: 12vh;
}
.row{
    margin: 0px;
    text-align: center;
}
.row .col{
    margin: 10px 0px;
}

@media screen and (max-width: 1300px){
    center h5{
        font-size: 18px!important;
    }
    .container-two {
        margin: 0 auto;
        max-width: 1280px;
        width: 80%;
        padding-top: 6vh;
    }
    
    .grid-item {
        border: 1px solid silver;
        width: 40px;
        height: 40px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .container-grid{
        display: grid;
        grid-template-columns: 4fr 2fr 8fr;
        row-gap: 0px;
    }
    .imagenPrincipal{
        grid-column: 1/2;
        grid-row: 1/5;
    }
    .opcUno, .opcDos, .opcTres, .opcCuatro, .opcCinco{
        grid-column: 2/4;
        margin: 10px;
    }
    .container-two {
        margin: 0 auto;
        max-width: 1280px;
        width: 85%;
        padding-top: 6vh;
    }
    #imagenPrincipal {
        width: 100px!important;
    }
    .container-grid h6{
        font-size: 16px;
        font-weight: 400;
    }
}
@media screen and (max-height:750px){
    .container-two {
        margin: 0 auto;
        max-width: 1280px;
        width: 85%;
        padding-top: 2vh;
    }
    #imagenPrincipal {
        width: 100px!important;
    }
    .container-grid h6{
        font-size: 16px;
        font-weight: 400;
    }
    .grid-item {
        border: 1px solid silver;
        width: 30px;
        height: 30px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
}
@media screen and (max-width: 1250px){
    .container-two {
        margin: 0 auto;
        max-width: 1280px;
        width: 80%;
        padding-top: 2vh;
    }
    
}
@media screen and (max-height: 650px){
    .container-two {
        margin: 0 auto;
        max-width: 1280px;
        width: 85%;
        padding-top: 2vh;
    }
    #imagenPrincipal {
        width: 100px!important;
    }
    .container-grid h6{
        font-size: 16px;
        font-weight: 400;
    }
    .grid-item {
        border: 1px solid silver;
        width: 25px;
        height: 25px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .opcSeis .obj {
        padding: 2px 19px!important;
    }
    .row .container-grid{
        justify-items: center;
        align-items: center;
    }
    .opcUno, .opcDos, .opcTres, .opcCuatro, .opcCinco {
        grid-column: 2 / 4;
        margin: 0px!important;
    }
}

</style>
<body>
    <div class="container-two">
        <div class="row container-grid">
            <div class="imagenPrincipal">
                <img  class="imageContainer" id="imagePrincipal" src="<?= $dir ?>/img/image.gif" alt="">
            </div>
            <div class="opcUno">
                <h6>La resbaladera está en ( <span class="boContainer" data-value="a"> </span> ; <span class="boContainer" data-value="2"></span> )</h6>
            </div>
            <div class="opcDos">
                <h6>El auto está en	( <span class="boContainer" data-value="f"> </span> ; <span class="boContainer" data-value="2"></span> )</h6>
            </div>
            <div class="opcTres">
                <h6>La casa está en ( <span class="boContainer" data-value="i"> </span> ; <span class="boContainer" data-value="4"></span> )</h6>
            </div>
            <div class="opcCuatro">
                <h6>El semáforo está en ( <span class="boContainer" data-value="d"> </span> ; <span class="boContainer" data-value="1"></span> )</h6>
            </div>
            <div class="opcCinco">
                <h6>La banca está en ( <span class="boContainer" data-value="c"> </span> ; <span class="boContainer" data-value="4"></span> )</h6>
            </div>
            <div class="opcSeis">
                <p class="obj" data-value="a">A</p>
                <p class="obj" data-value="2">2</p>
                <p class="obj" data-value="f">F</p>
                <p class="obj" data-value="2">2</p>
                <p class="obj" data-value="i">I</p>
                <p class="obj" data-value="4">4</p>
                <p class="obj" data-value="d">D</p>
                <p class="obj" data-value="1">1</p>
                <p class="obj" data-value="c">C</p>
                <p class="obj" data-value="4">4</p>
            </div>
        </div>
        
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

// Validar
var rpts = 0, otros = 0, element43, element2;

$(".obj").draggable({
    
    start: function() {
      element43=$(this).attr("data-value"); 
 }
});
$( ".boContainer" ).droppable({
  classes: {
    "ui-droppable-active": ".blue",
    "ui-droppable-hover": "ui-state-hover"
  },
  drop: function( event, ui ) {
    $(this).css("background-color", "rgb(19, 160, 241)");
  //  $( this ).target.append(event.target);
      element2=$(this).attr("data-value");
    if(element43==element2){
      rpts++;
    }else{
      otros++;
    }
    element43.removeClass("pieza");
  }
});

console.log(rpts, otros);
    // Formulario - Registrados
function result_tipo_2_0_10() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rpts == 10 && otros == 0) {

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