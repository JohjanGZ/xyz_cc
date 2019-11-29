<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
    <div class="col s12 card-panel blue imagenesPrincipales" >
        <ul class="coleLineal" id="principal">
            <li><img src="img/1-6/uvas.gif" alt=""></li>
            <li><img src="img/1-6/uvas.gif" alt=""></li>
            <li><img src="img/1-6/uvas.gif" alt=""></li>
            <li><img src="img/1-6/uvas.gif" alt=""></li>
            <li><img src="img/1-6/uvas.gif" alt=""></li>
        </ul>
    </div>
    <div class="col s6 cajas">
            <div class="row center">
            <div class="col s3">

            </div>
            <div class="col s6 center-align card-caja card-panel blue cnetro">
                <ul class="collect collection2" id="unitario">
                    <li><img src="img/1-6/uvas.gif" alt=""></li>
                    <li><img src="img/1-6/uvas.gif" alt=""></li>
                    <li><img src="img/1-6/uvas.gif" alt=""></li>
                </ul>
            </div>
            <div class="col s3">

            </div>
            </div>
        </div>
        <div class="col s6 cajas">  
            <div class="row center">
            <div class="col s3">

            </div>
            <div class="col s6 center-align card-caja card-panel blue cnetro">
                <ul class="collect collection2" id="vacio">
                    <li><img src="img/1-6/uvas.gif" alt=""></li>
                    <li><img src="img/1-6/uvas.gif" alt=""></li>
                    <li><img src="img/1-6/uvas.gif" alt=""></li>
                </ul>
            </div>
            <div class="col s3">

            </div>
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

    $(".coleLineal").sortable({
        connectWith: "#unitario,#vacio"
    });
    $(".collection1").sortable({
        connectWith: "#principal,#unitario"
    });
    $(".collection2").sortable({
        connectWith: "#principal,#vacio"
    });


    // Formulario - Registrados

    // function result_tipo_2_0_8() {
    //     var min = $('#Minutos').text();
    //     var seg = $('#Segundos').text();
    //     var milseg = $('#Centesimas').text();
    //     var tiempo = min + ":" + seg + ":" + milseg;

    //     if ($('input:checkbox[id=extencionUno]:checked').val() == null &&
    //         $('input:checkbox[id=extencionDos]:checked').val() == "on" &&
    //         $('input:checkbox[id=extencionTres]:checked').val() == "on" &&
    //         $('input:checkbox[id=extencionCuatro]:checked').val() == null &&
    //         $('input:checkbox[id=extencionCinco]:checked').val() == null &&
    //         $('input:checkbox[id=extencionSeis]:checked').val() == "on" &&
    //         $('input:checkbox[id=extencionSiete]:checked').val() == "on" &&
    //         $('input:checkbox[id=extencionOcho]:checked').val() == null) {

    //         console.log(opc1, opc2, opc3);
    //         localStorage.setItem("Nota2-0-8", "2");
    //         localStorage.setItem("Time2-0-8", tiempo);
    //         correcto();

    //     }

    //     else {
    //         incorrecto();
    //         localStorage.setItem("Nota2-0-8", "0");
    //         localStorage.setItem("Time2-0-8", tiempo);

    //     }
    // }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>