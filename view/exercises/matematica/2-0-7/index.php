<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <center>
            <img src="img/1-6/detalles.png" class="img-principal uno">
        </center>
        <div class="cajas">
            <div class="caja col s6">
                <div class="letraConjunto">V =</div>
                <div class="grupoV card-panel green">

                </div>
                <div></div>
            </div>
            <div class="caja col s6">
                <div class="letraConjunto">F =</div>
                <div class="grupoF card-panel green">

                </div>
                <div></div>
            </div>
            <div class="col s12 lighten-3 palabras aleatorio">
                <p class="palabra white lighten-1 fruta" id="grupoF"><img src="img/1-6/uvas.gif" alt=""></p>
                <h4 class="palabra white lighten-1 red-text letra" id="grupoV">a</h4>
                <p class="palabra white lighten-1 fruta" id="grupoF"><img src="img/1-6/pera.gif" alt=""></p>
                <h4 class="palabra white lighten-1 green-text letra" id="grupoV">i</h4>
                <h4 class="palabra white lighten-1 blue-text letra" id="grupoV">e</h4>
                <p class="palabra white lighten-1 fruta pina" id="grupoF"><img src="img/1-6/pina.gif" alt=""></p>
            </div>
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

    var objeto;
    var conGrupoF = 0;
    var conGrupoV = 0;

    $(".palabra").draggable({
        start: function () {
            objeto = $(this).attr("id");
        }

    });

    $(".grupoF").droppable({
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function (event, ui) {
            $(this).css("border", "#333");
            //$( this ).target.append(event.target);

            if (objeto == "grupoF") {
                conGrupoF++;
            }
            element.removeClass("pieza");
        }

    });

    $(".grupoV").droppable({
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function (event, ui) {
            $(this).css("border", "#333");
            //$( this ).target.append(event.target);

            if (objeto == "grupoV") {
                conGrupoV++;
            }
            element.removeClass("pieza");
        }

    });



    // Formulario - Registrados

    function result_tipo_2_0_6() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (conGrupoF == 3 && conGrupoV == 3) {

            localStorage.setItem("Nota2-0-6", "2");
            localStorage.setItem("Time2-0-6", tiempo);
            correcto();

        }

        else {
            console.log(conGrupoV);
            console.log(conGrupoF);
            incorrecto();
            localStorage.setItem("Nota2-0-6", "0");
            localStorage.setItem("Time2-0-6", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>