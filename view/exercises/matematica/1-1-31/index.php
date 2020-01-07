<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">

        <!-- <span>
            <select id="select2" class="seleccion" alt="n">
                <option value="" disabled selected>Elige</option>
                <option value=""> 5</option>
                <option value="n">3</option>
                <option value="">4</option>
                <option value="">2</option>
            </select>
        </span> -->
       
        <div class="contenedor-ejercicio">
            <div class="contenedor-piramides">
                <div class="piramide">
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="15"></div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            9
                        </div>
                        <div class="piramide-item resolver total" alt="6">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            4
                        </div>
                        <div class="piramide-item">
                            5
                        </div>
                        <div class="piramide-item">
                            1
                        </div>
                    </div>

                </div>
                <div class="piramide">
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="16">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            7
                        </div>
                        <div class="piramide-item resolver total" alt="9">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            3
                        </div>
                        <div class="piramide-item">
                            4
                        </div>
                        <div class="piramide-item">
                            5
                        </div>
                    </div>

                </div>
                <div class="piramide">
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="11"></div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            7
                        </div>
                        <div class="piramide-item">
                            4
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            5
                        </div>
                        <div class="piramide-item resolver total" alt="2">
                            
                        </div>
                        <div class="piramide-item resolver total" alt="2">
                            
                        </div>
                    </div>

                </div>
               
                <div class="piramide">
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="8">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            3
                        </div>
                        <div class="piramide-item resolver total" alt="5">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="2">
                            
                        </div>
                        <div class="piramide-item">
                            1
                        </div>
                        <div class="piramide-item resolver total" alt="4">
                            
                        </div>
                    </div>

                </div>
                <div class="piramide">
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="14">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="6">
                            
                        </div>
                        <div class="piramide-item">
                            8
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            4
                        </div>
                        <div class="piramide-item">
                            2
                        </div>
                        <div class="piramide-item resolver total" alt="6">
                            
                        </div>
                    </div>

                </div>
                <div class="piramide">
                    <div class="piramide-row">
                        <div class="piramide-item resolver total" alt="9">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            6
                        </div>
                        <div class="piramide-item resolver total" alt="3">
                            
                        </div>
                    </div>
                    <div class="piramide-row">
                        <div class="piramide-item">
                            5
                        </div>
                        <div class="piramide-item resolver total" alt="1">
                            
                        </div>
                        <div class="piramide-item">
                            2
                        </div>
                    </div>

                </div>
               
               
            </div>
            <div id="numeros">
                    
            </div>

        </div>

    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
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
// Formulario - Registrados

function result_tipo_1_1_31() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    comprobar_operacion_numeros();

    if (r == 17) {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>