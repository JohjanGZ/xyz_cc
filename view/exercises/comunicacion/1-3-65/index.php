<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>

  <div class="container">
      <div class="row">
        <div class="contenedor-ejercicio"> 
            
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="a" alt="">abuelo</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="n">familia</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">mamá</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">papá</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">primo</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">tío</h4>
                </li>
            </ul>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="a" alt="">ala</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="n">ave</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">pata</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">pico</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">pluma</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">uña</h4>
                </li>
            </ul>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="a" alt="n">animal</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">perro</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">cuy</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">pavo</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">pato</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">conejo</h4>
                </li>
            </ul>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="a" alt="n">fruta</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">uva</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">mango</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">sandía</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">melón</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">pera</h4>
                </li>
            </ul>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="a" alt="">venus</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">marte</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">saturno</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="n">planeta</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">tierra</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">jupiter</h4>
                </li>
            </ul>
        </div>
 
      </div>
</div>

    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.jpg">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_3_65() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
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