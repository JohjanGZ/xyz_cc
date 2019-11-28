<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <center>
            <img src="img/1-4/conjuntoUno.png" class="img-principal uno">
            <img src="img/1-4/conjuntoDos.png" class="img-principal dos">
        </center>
        <div class="cajas">
            <div class="caja col s6">
                <div>T={</div>
                <div class="letraT card-panel green">

                </div>
                <div>}</div>
            </div>
            <div class="caja col s6">
                <div>K={</div>
                <div class="letraK card-panel green">

                </div>
                <div>}</div>
            </div>
            <div class="col s12 card-panel  light-blue lighten-3 palabras aleatorio">
                <p class="pieza palabra transporte blue lighten-1" id="transporte">Cruzero</p>
                <p class="pieza palabra transporte blue lighten-1" id="transporte">Avión</p>
                <p class="pieza palabra transporte blue lighten-1" id="transporte">Tren</p>
                <p class="pieza palabra animal blue lighten-1" id="animal">Pulpo</p>
                <p class="pieza palabra animal blue lighten-1" id="animal">Ballena</p>
                <p class="pieza palabra animal blue lighten-1" id="animal">Tortuga</p>
                <p class="pieza palabra animal blue lighten-1" id="animal">Cangrejo</p>
            </div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-4/respuesta.png">
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
    var conLetraT = 0;
    var conLetraK = 0;

    $(".palabra").draggable({
        start: function () {
            objeto = $(this).attr("id");

        }
    });

    $(".letraT").droppable({
        classes: {
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function (event, ui) {
            $(this).css("border", "#333");
            //$( this ).target.append(event.target);

            if (objeto == "transporte") {
                conLetraT++
            }
            objeto.removeClass("pieza");
        }

    });

    $(".letraK").droppable({
        classes: {
            "ui-droppable-hover": "ui-state-hover"
        },
        drop: function (event, ui) {
            $(this).css("border", "#333");
            //$( this ).target.append(event.target);

            if (objeto == "animal") {
                conLetraK++
            }
            objeto.removeClass("pieza");
        }

    });



    // Formulario - Registrados

    function result_tipo_2_0_4() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (conLetraT == 3 && conLetraK == 4) {

            localStorage.setItem("Nota2-0-4", "2");
            localStorage.setItem("Time2-0-4", tiempo);
            correcto();

        }

        else {

            incorrecto();
            localStorage.setItem("Nota2-0-4", "0");
            localStorage.setItem("Time2-0-4", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });
</script>
