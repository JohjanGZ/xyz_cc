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
                    
                    <div class="contenedor-respuesta">

                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b</option>
                                <option value="x">v</option>
                            </select>
                        </span>
                        <span>risa</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>lom</span>
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b</option>
                                <option value="x">v</option>
                            </select>
                        </span>
                        <span>riz</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span>li</span>
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b</option>
                                <option value="x">v</option>
                            </select>
                        </span>
                        <span>ro</span>
                    </div>
                </div>
                <div class="ejercicio">
                  
                    <div class="contenedor-respuesta">
                        <span>tim</span>
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b</option>
                                <option value="x">v</option>
                            </select>
                        </span>
                        <span>re</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b</option>
                                <option value="x">v</option>
                            </select>
                        </span>
                        <span>razo</span>
                    </div>
                </div>
                <div class="ejercicio">
              
                    <div class="contenedor-respuesta">
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b</option>
                                <option value="n">v</option>
                            </select>
                        </span>
                        <span>erano</span>
                    </div>
                </div>
                <div class="ejercicio">
              
                    <div class="contenedor-respuesta">
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b</option>
                                <option value="n">v</option>
                            </select>
                        </span>
                        <span>ista</span>
                    </div>
                </div>
                <div class="ejercicio">
              
                    <div class="contenedor-respuesta">
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b</option>
                                <option value="n">v</option>
                            </select>
                        </span>
                        <span>estido</span>
                    </div>
                </div>
                <div class="ejercicio">
              
                    <div class="contenedor-respuesta">
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b</option>
                                <option value="n">v</option>
                            </select>
                        </span>
                        <span>aso</span>
                    </div>
                </div>
                <div class="ejercicio">
              
                    <div class="contenedor-respuesta">
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">b</option>
                                <option value="n">v</option>
                            </select>
                        </span>
                        <span>uela</span>
                    </div>
                </div>
                <div class="ejercicio">
              
                    <div class="contenedor-respuesta">
                        <span>ta</span>
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b</option>
                                <option value="x">v</option>
                            </select>
                        </span>
                        <span>la</span>
                    </div>
                </div>
                <div class="ejercicio">
              
                    <div class="contenedor-respuesta">
                        <span>ca</span>
                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">b</option>
                                <option value="x">v</option>
                            </select>
                        </span>
                        <span>le</span>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_5_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
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