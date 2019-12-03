<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
.imagenesPrincipales{
    border: 1px solid #333;
    margin: 0px;
}
.classMain {
    margin-top: 30px;
}
#principal{
    min-height: 40px;
    min-width: 800px;
    display: grid;
    padding: 10px 5px;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
}
.cajas{
    margin-top: 30px;
}
#principal img{
    width: 120px;
    height: auto;
    border-radius: 20px;
    justify-self: center;
}
#principal img{
    border: 1px solid #ddd;
    border-radius: 20px;
    margin: 2px;
    background: #fff;
}
.ui-sortable-handle{
    background: white; 
}
#grupoUnitario, #grupoVacio{
    min-height: 120px;
}
#unitario img, #vacio img{
    width: 100px;
}
.row .col .s6 {
  min-height: 200px!important;
}

</style>
<?=$titulo?>
<div class="container-two">
    <div class="row classMain">
        <div class="col s1"></div>
        <div class="col s10 card-panel white" >
            <div id="principal">
                <img id="unitario" class="objeto" src="img/1-9/a.png" alt="">
                <img id="vacio" class="objeto" src="img/1-9/b.png" alt="">
                <img id="unitario" class="objeto" src="img/1-9/c.png" alt="">
                <img id="unitario" class="objeto" src="img/1-9/d.png" alt="">
                <img id="vacio"  class="objeto" src="img/1-9/e.png" alt="">
            </div>
        </div>
        <div class="col s1"></div>
    <div class="col s6 cajas">
            <div class="row center">
                <div class="col s1">

                </div>
                    <div class="col s10 card-panel card-caja" id="prin">
                        <h4 class="blue-text">Unitario</h4>
                        <div class="collect collection1 card-panel blue" id="grupoUnitario">
                            
                        </div>
                    </div>
                <div class="col s1">

                </div>
                </div>
            </div>
        <div class="col s6 cajas">  
            <div class="row center">
                <div class="col s1">

                </div>
                <div class="col s10 card-panel card-caja">
                    <h4 class="blue-text">Vacio</h4>
                    <div class="collect collection2 card-panel blue" id="grupoVacio">

                    </div>
                </div>
            <div class="col s1">

            </div>
            </div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-9/respuesta.png">
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
var contUnitario209 = 0;
var contVacio209 = 0;

        $(".objeto").draggable({
            start: function() {
                element=$(this).attr("id");
            }
        });

        $("#grupoUnitario").droppable({
        classes: {
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            $(this).css("border", "#333");
        //$( this ).target.append(event.target);

        if(element=="unitario"){
            contUnitario209++;
        }
            element.removeClass("pieza");
        }

    });


    $("#grupoVacio").droppable({
        classes: {
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function( event, ui ) {
            $(this).css("border", "#333");
        //$( this ).target.append(event.target);

        if(element=="vacio"){
            contVacio209++;
        }
            element.removeClass("pieza");
        }

    });




    function result_tipo_2_0_10() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if ( contVacio209 == 2 && contUnitario209 == 3) {

            console.log(contVacio209, contUnitario209);
            localStorage.setItem("Nota2-0-10", "2");
            localStorage.setItem("Time2-0-10", tiempo);
            correcto();

        }

        else {
            console.log(contVacio209, contUnitario209);
            incorrecto();
            localStorage.setItem("Nota2-0-10", "0");
            localStorage.setItem("Time2-0-10", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>