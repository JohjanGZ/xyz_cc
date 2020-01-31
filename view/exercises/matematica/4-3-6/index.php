<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">

            <div class="contenedor-ejercicios">
            
                <div class="contenedor">

                    <h4 style="color: tomato;font-weight: 600;width: 100%;">
                        Todos los divisores de 52.
                    </h4>

                    <p>
                        Divisores de 52 = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2; 5; 50</option>
                                <option value="n">1; 2; 13; 26; 52</option>
                                <option value="x">1; 3; 10; 52</option>
                                <option value="X">10; 20; 30; 40; 50</option>
                            </select>
                        </span>
                        }
                    </p>

                </div>
                <div class="contenedor">

                    <h4 style="color: tomato;font-weight: 600;width: 100%;">
                    Todos los divisores de 38.
                    </h4>

                    <p>
                        Divisores de 38 = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">1; 2; 17; 38</option>
                                <option value="x">1; 2; 14; 19</option>
                                <option value="X">1; 2; 16; 30</option>
                                <option value="n">1; 2; 19; 38</option>
                            </select>
                        </span>
                        }
                    </p>

                </div>
          

            </div>
        </div>
    </div>


    <!-- Respuesta -->
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
// Validar
function result_tipo_4_3_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 2) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r);

        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>