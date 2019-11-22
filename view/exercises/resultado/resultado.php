<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.5" />

<div class="container">
    <!-- <link rel="stylesheet" type="text/css" href="responsive/r1.css">-->
    <style type="text/css">
        .contenedor-principal {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: absolute;
            top: -100px;
            width: 100%;
            z-index: 1;
        }
        
        .aprobado {
            background-color: #76e144;
            background-image: url(../../../../4);
            background-size: 65vh auto;
        }
        
        .desaprobado {
            background-color: #ff981c;
        }
        
        .contenedor-mensaje {
            text-align: center;
        }
        
        .display-1 {
            font-size: 60px;
            font-weight: 900;
            text-shadow: 2px 2px #acaaaa;
            font-family: sans-serif;
            color: white;
        }
        
        .display-2 {
            font-size: 40px;
            font-weight: 700;
            font-family: sans-serif;
            color: white;
        }
        
        .btn-success {
            padding: 12px 25px;
            font-weight: bold;
            background-color: #4decec;
            color: white;
            font-size: 25px;
            border: 3px solid white;
            border-radius: 12px;
            margin: 0 3px;
        }
        
        .btn-success:hover {
            background-color: #ffc107 !important;
        }
        
        .btn-success a {
            color: inherit !important;
        }
    </style>


    <div id="contenedor-principal" class="contenedor-principal">
        <div class="contenedor-mensaje">
            <h1 class="display-1"></h1>
            <h2 class="display-2"></h2>

        </div>
    </div>

    <!-- <a style="transform: translate(93vw, 73vh);" href="javascript:pruebaDivAPdf()" class="tooltipped btn btn-floating pulse" data-position="left" data-tooltip="Ver en PDF"><i class="material-icons">picture_as_pdf</i></a> -->

    <script>
        $(document).ready(function() {

            $('#btn-flotante').addClass('pulse');

            var aprobado = false;
            var data = JSON.parse(localStorage.getItem("data")); 
            var grado = localStorage.getItem("grado");
            var ruta = window.location.pathname;
            var tema = ruta.substr(-2, 1);
            var unidad = ruta.substr(-4, 1);


            var n = parseInt($("#nota").val());

            if (n > (cant / 2)) {

                $("#contenedor-principal").addClass("aprobado");
                $(".display-1").text("¡Felicitaciones!");
                $(".display-2").text("Completaste el tema");


                if (tema == (data[unidad].temas.length)) {
                    $(".contenedor-mensaje").append(
                        '<button class="btn-success"><a href="../../../../../">Salir</a></button>');
                } else {
                    $(".contenedor-mensaje").append(
                        '<button class="btn-success"><a href="../../../../../">Salir</a></button><button class="btn-success"><a href="../' +
                        (parseInt(tema) + 1) + '">Siguiente</a></button>');
                }





            } else {
                $("#contenedor-principal").addClass("desaprobado");
                $(".display-1").text("Sigue intentando");
                $(".contenedor-mensaje").append('<button class="btn-success reiniciar-tema"><a href="javascript:location.reload()">Reiniciar tema</a></button>');

            }


        });

        // $(".reiniciar-tema").click(function(){

        // });
    </script>