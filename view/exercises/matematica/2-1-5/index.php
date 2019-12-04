<?php require('../../../tools/var/variables.php'); ?>

<head>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    
</head>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="row container-grid">
            <div class="imagenPrincipal">
                <img id="imagePrincipal" src="img/2-1-5/image.gif" alt="">
            </div>
            <div class="opcUno">
                <h5>La resbaladera está en ( <span class="boContainer" data-value="a"> </span> ; <span class="boContainer" data-value="2"></span> )</h5>
            </div>
            <div class="opcDos">
                <h5>El auto está en	( <span class="boContainer" data-value="f"> </span> ; <span class="boContainer" data-value="2"></span> )</h5>
            </div>
            <div class="opcTres">
                <h5>La casa está en ( <span class="boContainer" data-value="i"> </span> ; <span class="boContainer" data-value="4"></span> )</h5>
            </div>
            <div class="opcCuatro">
                <h5>El semáforo está en ( <span class="boContainer" data-value="d"> </span> ; <span class="boContainer" data-value="1"></span> )</h5>
            </div>
            <div class="opcCinco">
                <h5>La banca está en ( <span class="boContainer" data-value="c"> </span> ; <span class="boContainer" data-value="4"></span> )</h5>
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
                <img class="materialboxed" width="80%" src="img/2-1-5/respuesta.png">
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

function result_tipo_2_1_5() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rpts == 10 && otros == 0) {

            console.log(rpts, otros);
            localStorage.setItem("Nota2-1-5", "2");
            localStorage.setItem("Time2-1-5", tiempo);
            correcto();

        }

        else {
            console.log(rpts, otros);
            incorrecto();
            localStorage.setItem("Nota2-1-5", "0");
            localStorage.setItem("Time2-1-5", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>