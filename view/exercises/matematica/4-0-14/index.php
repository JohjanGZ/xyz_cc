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

               
                <div class="ejercicio imagen">
                    <div class="conjunto">
                       
                    </div>

                </div>
                <div class="ejercicio combinar">
                    
                    <p>
                        <span>P - Q = </span> {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">q, a, e, a, i</option>
                                <option value="x">q, p</option>
                                <option value="x">a, e, i</option>
                                <option value="n">o, u, q, p</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        <span>n(P - Q) = </span> 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">6</option>
                                <option value="x">8</option>
                                <option value="n">4</option>
                                <option value="x">7</option>
                            </select>
                        </span>
                        
                    </p>
                    <p>
                        <span>Q - R = </span> {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">a, e, i</option>
                                <option value="x">r</option>
                                <option value="x">q, p</option>
                                <option value="x">a, e, i, r</option>
                            </select>
                        </span>
                        }
                    </p>
                </div>
                <div class="ejercicio combinar">
                    
                    <p>
                        <span>n(Q - R) = </span> 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2</option>
                                <option value="n">3</option>
                                <option value="x">1</option>
                                <option value="x">8</option>
                            </select>
                        </span>
                        
                    </p>
                    <p>
                        <span>P - R = </span> {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">r, o, u</option>
                                <option value="x">q, r</option>
                                <option value="x">a, e, i, o, u, r</option>
                                <option value="n">a, e, i, q, p</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        <span>n(P - R) = </span> 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">6</option>
                                <option value="x">7</option>
                                <option value="n">5</option>
                                <option value="x">1</option>
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
function result_tipo_4_0_14() {
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
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>