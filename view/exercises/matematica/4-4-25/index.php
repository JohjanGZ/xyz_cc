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

                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">

                <div class="contenedor">
                    <p>
                        <span>
                            •
                        </span>
                        ¿Cuántos jugos de fresa se venden en un día?

                    </p>
                    <span class="select">
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected></option>
                            <option value="n">275</option>
                            <option value="x">300</option>
                            <option value="X">124</option>
                            <option value="X">245</option>
                        </select>
                    </span>
                    <p>
                        <span>
                            •
                        </span>
                        ¿Cuál es el jugo que se
                        vende más en un día?

                    </p>
                    <span class="select">
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected></option>
                            <option value="x">jugo de papaya</option>
                            <option value="X">jugo surtido</option>
                            <option value="n">jugo de naranja</option>
                            <option value="X">jugo de fresa</option>
                        </select>
                    </span>
                    <p>
                        <span>
                            •
                        </span>
                        ¿Cuál es el jugo que se
vende menos en un día?

                    </p>
                    <span class="select">
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected></option>
                            <option value="x">jugo surtido</option>
                            <option value="n">jugo de papaya</option>
                            <option value="x">jugo de naranja</option>
                            <option value="X">jugo de fresa</option>
                        </select>
                    </span>
                    <p>
                        <span>
                            •
                        </span>
                        ¿Cuántos jugos de piña se
venden en un día?
                    </p>
                    <span class="select">
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected></option>
                            <option value="x">350</option>
                            <option value="x">300</option>
                            <option value="X">125</option>
                            <option value="n">250</option>
                        </select>
                    </span>
                    
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
function result_tipo_4_4_25() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 4) {
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