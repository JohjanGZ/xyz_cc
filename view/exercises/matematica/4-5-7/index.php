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

                    <div class="uno">

                    </div>
                 
                    <p>
                        Base =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">5 cm</option>
                                <option value="x">3 cm</option>
                                <option value="x">2 cm</option>
                                <option value="X">4 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        Altura =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2 cm</option>
                                <option value="X">4 cm</option>
                                <option value="n">3 cm</option>
                                <option value="x">1 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        Área =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="X">20 cm²</option>
                                <option value="x">12 cm²</option>
                                <option value="x">17 cm²</option>
                                <option value="n">15 cm²</option>
                            </select>
                        </span>
                    </p>

                </div>
                <div class="contenedor">

                    <div class="dos">

                    </div>

                    <p>
                        Base =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">7 cm</option>
                                <option value="x">5 cm</option>
                                <option value="x">9 cm</option>
                                <option value="X">4 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        Altura =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">7 cm</option>
                                <option value="x">5 cm</option>
                                <option value="X">4 cm</option>
                                <option value="n">9 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        Área =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">17 cm²</option>
                                <option value="n">27 cm²</option>
                                <option value="x">37 cm²</option>
                                <option value="x">42 cm²</option>
                            </select>
                        </span>
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
function result_tipo_4_5_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 6) {
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