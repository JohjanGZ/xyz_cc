<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.5" />
<script type="text/javascript" src="../../../js/jspdf.js"></script>

<div class="container">
    <!-- <link rel="stylesheet" type="text/css" href="responsive/r1.css">-->
    <style type="text/css">
        .contenedor-principal {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: absolute;
            background-color: #76e144;
            top: -100px;
            width: 100%;
            z-index: 1;
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
        }
    </style>


    <div class="contenedor-principal">
        <div class="contenedor-mensaje">
            <h1 class="display-1">¡Felicitaciones!</h1>
            <h2 class="display-2">Completaste la unidad</h2>
            <button class="btn-success">Regresar</button>
        </div>
    </div>

    <a style="transform: translate(93vw, 73vh);" href="javascript:pruebaDivAPdf()" class="tooltipped btn btn-floating pulse" data-position="left" data-tooltip="Ver en PDF"><i class="material-icons">picture_as_pdf</i></a>