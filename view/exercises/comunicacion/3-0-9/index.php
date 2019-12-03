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
                <div class="ejercicio">
                   
                    <div class="contenedor-texto">
                        <p>
                            Pardo: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>

                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-texto">
                        <p>
                            Canela: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-texto">
                        <p>
                            Rosa: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-texto">
                        <p>
                            Violeta: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-texto">
                        <p>
                            Azul: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-texto">
                        <p>
                            Malva: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-texto">
                        <p>
                            Morado: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-texto">
                        <p>
                            Gris: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-texto">
                        <p>
                            Amarillo: 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="n">4</option>
                                </select>
                            </span>
                            
                        </p>
                    </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_0_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });

    if (r == 9) {
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