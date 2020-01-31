<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">
.svg {
    width: 1200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.colores img {
    width: 50px;
    margin: 2vh;
    border-radius: 18%;
}

#contenedorpuzzle {
    width: 80%;
    margin: 10vh auto;
}

.item img {
    width: 224px;
    margin: 3 20px 0;
    float: left;
    border: solid transparent;
}

.item img:hover {
    border: solid;
}

h5 {
    font-size: 200%;
}

.img-principal {
    margin: 5vh auto 0;
}

.fila1,
.fila2,
.fila3 {
    margin: 0 auto 2vh;
    width: 1160px;
    box-shadow: 0 0 5px #80808061;
}

.container,
.content-wrapper {
    margin: 10vh auto 0;
}

.fila1 img {
    width: 20vw;
    margin: 0 auto;
}

@media (max-width: 1200px) {

    .container,
    .content-wrapper {
        margin: 42px auto 0;
    }
}

#imgIzquierda li,
#imgDerecha li {
    width: 250px;
    height: 150px;
    border: 1px solid silver;
    position: relative;
    /* padding: 5px 32px; */
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

#imgIzquierda li:hover,
#imgDerecha li:hover {
    background-color: #37d3f7;
}


#imgIzquierda img,
#imgDerecha img {
    max-width: 85%;
    max-height: 80%;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;


}

.campo {
    float: left;
}

ul {
    margin: 0;
}

.a span,
.b span {
    font-size: 30px;
    text-align: center;
    line-height: 34px;
    font-weight: 600;
}

.b span span,
.a span span {
    color: #37D3F7;
}


h4 {
    font-size: 1.9rem;
    margin: 0;
    padding: 0;
}

.fracciones {
    display: flex;
    width: fit-content;
    border-radius: 12px;
}

.fraccion {
    width: max-content;
    text-align: center;
    font-size: 1.4rem;
    font-weight: 600;
    border-radius: 12px;
    padding: 15px;
}

.itemx.bt {
    border-top: 2px solid cornflowerblue;
}

span.select {
    display: inline-flex;
    width: fit-content;
    margin-left: 4px;
}

span.select select {
    color: rgb(47, 196, 230);
    font-size: 1.6rem;
}


@media(max-height: 640px) {

    #imgIzquierda li,
    #imgDerecha li {
        height: 110px;

    }


}
</style>
<?=$titulo?>

<body>
    <div class="container">
        <div class="row svg">

            <div class="campo" id="imgIzquierda">

                <ul id="listA">
                    <li alt="uno" class="a" id="obj1">

                        <div class="fraccion">
                            <div class="itemx">
                                74
                            </div>
                            <div class="itemx bt">
                                111
                            </div>
                        </div>
                        <span>
                            =
                        </span>
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">2 / 3</option>
                                <option value="x">1 / 6</option>
                                <option value="x">3 / 4</option>
                            </select>
                        </span>

                    </li>
                    <li alt="dos" class="a" id="obj2">

                        <div class="fraccion">
                            <div class="itemx">
                                685
                            </div>
                            <div class="itemx bt">
                                411
                            </div>
                        </div>
                        <span>
                            =
                        </span>
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2 / 6</option>
                                <option value="x">3 / 4</option>
                                <option value="n">5 / 3</option>
                            </select>
                        </span>

                    </li>
                    <li alt="tres" class="a" id="obj2">
                    <div class="fraccion">
                            <div class="itemx">
                                135
                            </div>
                            <div class="itemx bt">
                                225
                            </div>
                        </div>
                        <span>
                            =
                        </span>
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">4 / 5</option>
                                <option value="n">3 / 5</option>
                                <option value="x">5 / 3</option>
                            </select>
                        </span>
                    </li>
                    <li alt="cuatro" class="a" id="obj2">
                    <div class="fraccion">
                            <div class="itemx">
                                448
                            </div>
                            <div class="itemx bt">
                                1 008
                            </div>
                        </div>
                        <span>
                            =
                        </span>
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">3 / 5</option>
                                <option value="n">4 / 9</option>
                                <option value="x">5 / 8</option>
                            </select>
                        </span>
                    </li>
                </ul>

            </div>
            <div class="campo" id="centro">
                <canvas height="100px" width="1000px" id="micanvas"></canvas>
            </div>
            <div class="campo" id="imgDerecha">
                <ul id="listB">
                    <li alt="uno" class="b" id="obj6">
                        <span>
                            Dos tercios
                        </span>
                    </li>
                    <li alt="dos" class="b" id="obj7">
                        <span>
                            Cinco tercios
                        </span>
                    </li>
                    <li alt="tres" class="b" id="obj8">
                        <span>
                            Tres quintos
                        </span>
                    </li>
                    <li alt="cuatro" class="b" id="obj9">
                      <span>
                          Cuatro novenos
                      </span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="row fila2">

        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
var r = 0;

var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('#listB');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

$('.a').click(function() {
    var obj1 = null;
    var obj2 = null;
    var valor = $(this).attr("value");
    if (valor != 1) {
        var sitio1 = $(this).index();
        $('.a').css({
            "background-color": "white",
            "border": "solid 1px silver",
            "box-shadow": "none",
            "z-index": "0"
        });

        $(this).css({
            "background-color": "silver",
            "background-color": "rgba(254, 205, 84, 0.65)",
            "border": "solid white",
            "box-shadow": "0 0 3px black",
            "z-index": "1"
        });

        obj1 = $(this).attr("alt");
        console.log(obj1);
        ctx.beginPath();
        switch (sitio1) {
            case 0:
                ctx.moveTo(125, 0);
                break;
            case 1:
                ctx.moveTo(375, 0);
                break;
            case 2:
                ctx.moveTo(625, 0);
                break;
            case 3:
                ctx.moveTo(875, 0);
                break;
            case 4:
                ctx.moveTo(1008, 0);
                break;
        }
        valor = 1;
    }

    $('.b').click(function() {

        var sitio2 = $(this).index();
        $('.b').css({
            "background-color": "white"
        });
        $(this).css({
            "background-color": "silver",
            "background-color": "rgba(254, 205, 84, 0.65)",
            "border": "solid white",
            "box-shadow": "0 0 3px black",
            "z-index": "1"
        });
        var obj2 = $(this).attr("alt");
        console.log(obj2);
        switch (sitio2) {
            case 0:
                ctx.lineTo(125, 100);
                break;
            case 1:
                ctx.lineTo(375, 100);
                break;
            case 2:
                ctx.lineTo(625, 100);
                break;
            case 3:
                ctx.lineTo(875, 100);
                break;
            case 4:
                ctx.lineTo(1008, 100);
                break;
        }
        ctx.strokeStyle = "orange";
        ctx.lineWidth = 5;
        ctx.stroke();




        if (obj1 == obj2) {
            r++;
            console.log(r);
        }
    });
});

function result_tipo_4_4_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    
    $('.seleccion').each(function() {
        if ($(this).attr('alt') == $(this).val()) {
            r++;
        }
    });

    if (r == 12) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>