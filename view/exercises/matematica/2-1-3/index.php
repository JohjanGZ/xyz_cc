<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
    #boxCheck{
      text-align: center;
    }
    td, th {
        padding: 18px 5px;
        display: table-cell;
        text-align: left;
        vertical-align: middle;
        border-radius: 2px;
    }
    .infoContainer{
      border: 1px solid #333;
      padding:  12px 40px;
      border-radius: 10px;
      margin: 2px 6px;
      background: #B6ECFF;
      border: 1px solid #ccc !important;
      color: #333;
    }
    #boxCheck img{
      width: 300px;
    }
    .conjuntosOpciones{
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
      justify-items: center;
      align-items: center;
    }
    .conjuntosOpciones p{
      background: #eceff1;
      border: 1px solid #607d8b;
      padding: 6px 15px;
      text-align: center;
      border-radius: 10px;
      font-weight: bold;
    }
    .rojoBox{
      background: rgb(255, 102, 102);
    }
    .amarilloBox{
      background: rgb(255, 204, 0);
    }
    .azulBox{
      background: rgb(0, 153, 255);
    }
      @media only screen and (max-width: 1200px){
          .container-two {
              padding-top: 2vh;
              margin: 0 auto;
              max-width: 1100px;
              width: 81%;
          }
      }
      @media screen and (max-height: 700px) {
          center h5{
            font-size: 20px;
          }
          .row{
            margin: 0px !important;
          }
          .cajas{
            height: auto;
          }
          .droppable{
            padding: 6px 40px;
            margin: 0px 10px;
            background: rgb(243, 243, 243);
            border-radius: 10px;
            border: 1px solid rgb(212, 212, 212);
          }
          .conjuntosOpciones{
            grid-gap: 0px;
            grid-row: 0px;
          }
          .conjuntosOpciones p{
            background: #eceff1;
            border: 1px solid #607d8b;
            padding: 4px 15px;
            text-align: center;
            border-radius: 10px;
            font-weight: bold;
    }
  }
  
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class="col s1"></div>
        <div class="cajas col s10">
            <table>
              <thead>
                <tr>
                    <th>Número</th>
                    <th>Centenas</th>
                    <th>Decenas</th>
                    <th>Unidades</th>
                    <th>Descomposición</th>
                </tr>
              </thead>
              <tbody class="aleatorio">
                <tr>
                  <td>79</td>
                  <td>0</td>
                  <td>7</td>
                  <td>9</td>
                  <td><span class="droppable" data-value="70"> </span> <span class="droppable" data-value="+"> </span> <span class="droppable" data-value="9"> </span></td>
                </tr>
                <tr>
                  <td><span class="droppable" data-value="283"> </span></td>
                  <td>2</td>
                  <td>8</td>
                  <td>3</td>
                  <td>200 + 80 + 3</td>
                </tr>
                <tr>
                  <td>405</td>
                  <td><span class="droppable" data-value="4"> </span></td>
                  <td><span class="droppable" data-value="0"> </span></td>
                  <td><span class="droppable" data-value="5"> </span></td>
                  <td><span class="droppable" data-value="400"> </span> <span class="droppable" data-value="+"> </span> <span class="droppable" data-value="0"> </span> <span class="droppable" data-value="+"> </span> <span class="droppable" data-value="5"> </span></td>
                </tr>
                <tr>
                  <td><span class="droppable" data-value="562"> </span></td>
                  <td><span class="droppable" data-value="5"> </span></td>
                  <td><span class="droppable" data-value="6"> </span></td>
                  <td><span class="droppable" data-value="2"> </span></td>
                  <td>500 + 60 + 2</td>
                </tr>
                <tr>
                  <td>386</td>
                  <td><span class="droppable" data-value="3"> </span></td>
                  <td><span class="droppable" data-value="8"> </span></td>
                  <td><span class="droppable" data-value="6"> </span></td>
                  <td><span class="droppable" data-value="300"> </span> <span class="droppable" data-value="+"> </span> <span class="droppable" data-value="80"> </span> <span class="droppable" data-value="+"> </span> <span class="droppable" data-value="6"> </span> </td>
                </tr>
              </tbody>
            </table>  
        </div>
        <div class="col s1"></div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="70">70</p>
            <p class="obj" data-value="9">9</p>
            <p class="obj" data-value="+">+</p>
            <p class="obj" data-value="283">283</p>
            <p class="obj" data-value="4">4</p>
            <p class="obj" data-value="5">5</p>
            <p class="obj" data-value="0">0</p>
            <p class="obj" data-value="400">400</p>
            <p class="obj" data-value="+">+</p>
            <p class="obj" data-value="0">0</p>
            <p class="obj" data-value="5">5</p>
            <p class="obj" data-value="+">+</p>
            <p class="obj" data-value="562">562</p>
            <p class="obj" data-value="5">5</p>
            <p class="obj" data-value="6">6</p>
            <p class="obj" data-value="2">2</p>
            <p class="obj" data-value="3">3</p>
            <p class="obj" data-value="8">8</p>
            <p class="obj" data-value="6">6</p>
            <p class="obj" data-value="300">300</p>
            <p class="obj" data-value="+">+</p>
            <p class="obj" data-value="80">80</p>
            <p class="obj" data-value="+">+</p>
            <p class="obj" data-value="6">6</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/2-1-3/respuesta.png">
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

    var rpta = 0, otros = 0, element;

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
        $(this).css("background-color", "#eceff1");
        $(".obj").css("border", "none");
      //  $( this ).target.append(event.target);
        element2 = $(this).attr("data-value");
        if(element==element2){
          rpta++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(rpta, otros);
    // Formulario - Registrados

    function result_tipo_2_1_3() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rpta == 24 && otros == 0) {
            console.log(rpta, otros);
            localStorage.setItem("Nota2-1-1", "2");
            localStorage.setItem("Time2-1-1", tiempo);
            correcto();

        }

        else {
            console.log(rpta, otros);
            incorrecto();
            localStorage.setItem("Nota2-1-1", "0");
            localStorage.setItem("Time2-1-1", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>