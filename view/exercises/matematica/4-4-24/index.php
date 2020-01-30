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

                <img src="<?= $dir ?>/img/1.png" alt="">

                <table>
                   <tr>
                       <th>Día de la semana</th>
                       <th>N° de computadoras vendidas</th>
                   </tr>
                    <tr>
                        <td>
                            Lunes
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="X">3</option>
                                    <option value="X">4</option>
                                    <option value="X">5</option>
                                    <option value="X">6</option>
                                    <option value="X">7</option>
                                    <option value="X">8</option>
                                    <option value="x">9</option>
                                    <option value="x">10</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Martes
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="X">3</option>
                                    <option value="X">4</option>
                                    <option value="X">5</option>
                                    <option value="X">6</option>
                                    <option value="X">7</option>
                                    <option value="X">8</option>
                                    <option value="x">9</option>
                                    <option value="x">10</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Miércoles
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="X">3</option>
                                    <option value="n">4</option>
                                    <option value="X">5</option>
                                    <option value="X">6</option>
                                    <option value="X">7</option>
                                    <option value="X">8</option>
                                    <option value="x">9</option>
                                    <option value="x">10</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Jueves
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="X">3</option>
                                    <option value="X">4</option>
                                    <option value="X">5</option>
                                    <option value="X">6</option>
                                    <option value="n">7</option>
                                    <option value="X">8</option>
                                    <option value="x">9</option>
                                    <option value="x">10</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Viernes
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="X">3</option>
                                    <option value="X">4</option>
                                    <option value="X">5</option>
                                    <option value="X">6</option>
                                    <option value="X">7</option>
                                    <option value="n">8</option>
                                    <option value="x">9</option>
                                    <option value="x">10</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Sábado
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                 
                           
                                    <option value="X">7</option>
                                    <option value="X">8</option>
                                    <option value="x">9</option>
                                    <option value="x">10</option>
                                    <option value="n">15</option>
                                    <option value="x">20</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Domingo
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                 
                           
                                    <option value="X">7</option>
                                    <option value="X">8</option>
                                    <option value="x">9</option>
                                    <option value="n">10</option>
                                    <option value="x">15</option>
                                    <option value="x">20</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                   
                </table>

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
function result_tipo_4_4_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 7) {
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