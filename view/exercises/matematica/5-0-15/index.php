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
                 
                    <p>Sean los conjuntos: </p>
                    <p>
                        N = { t; u } y P = { u; w; y }
                    </p>
                   
                    <p>
                    P x N = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">( u; t )</option>
                                <option value="x">( t; u )</option>
                                <option value="x">( u; w )</option>
                                <option value="x">( u; y )</option>
                            </select>
                        </span>,
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( u; x )</option>
                                <option value="x">( u; w )</option>
                                <option value="n">( u; u )</option>
                                <option value="x">( u; y )</option>
                            </select>
                        </span>,
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( u; w )</option>
                                <option value="n">( w; t )</option>
                                <option value="x">( t; w )</option>
                                <option value="x">( w; y )</option>
                            </select>
                        </span>,
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( u; w )</option>
                                <option value="x">( w; w )</option>
                                <option value="x">( t; w )</option>
                                <option value="n">( w; u )</option>
                            </select>
                        </span>,
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( u; y )</option>
                                <option value="n">( y; t )</option>
                                <option value="x">( t; y )</option>
                                <option value="x">( y; w )</option>
                            </select>
                        </span>,
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( t; y )</option>
                                <option value="x">( y; w )</option>
                                <option value="n">( y; u )</option>
                                <option value="x">( u; y )</option>
                            </select>
                        </span>
                     }
                    </p>
                   
                    <p class="pt">
                        N x P = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">( t; u )</option>
                                <option value="x">( u; t )</option>
                                <option value="x">( y; y )</option>
                                <option value="X">( t; t )</option>
                            </select>
                        </span>,
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( u; t )</option>
                                <option value="x">( y; y )</option>
                                <option value="n">( t; w )</option>
                                <option value="X">( t; t )</option>
                            </select>
                        </span>, 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( u; t )</option>
                                <option value="n">( t; y )</option>
                                <option value="x">( y; y )</option>
                                <option value="X">( t; t )</option>
                            </select>
                        </span>, 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( t; u )</option>
                                <option value="x">( y; u )</option>
                                <option value="n">( u; u )</option>
                                <option value="X">( u; x )</option>
                            </select>
                        </span>, 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">( u; w )</option>
                                <option value="x">( t; u )</option>
                                <option value="x">( y; u )</option>
                                <option value="X">( u; x )</option>
                            </select>
                        </span>, 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">( y; u )</option>
                                <option value="x">( t; u )</option>
                                <option value="X">( u; x )</option>
                                <option value="n">( u; y )</option>
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
function result_tipo_5_0_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
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
