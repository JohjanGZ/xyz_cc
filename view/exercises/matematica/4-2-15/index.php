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
                        <td>
                            A 
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">( 7; 2 )</option>
                                    <option value="x">( 7; 3 )</option>
                                    <option value="x">( 6; 2 )</option>
                                    <option value="X">( 6; 3 )</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            B 
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 3; 3 )</option>
                                    <option value="x">( 4; 3 )</option>
                                    <option value="n">( 3; 4 )</option>
                                    <option value="X">( 2; 4 )</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            C
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 8; 4 )</option>
                                    <option value="x">( 7; 6 )</option>
                                    <option value="X">( 9; 8 )</option>
                                    <option value="n">( 8; 5 )</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            D
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">( 7; 3 )</option>
                                    <option value="x">( 7; 4 )</option>
                                    <option value="x">( 7; 5 )</option>
                                    <option value="X">( 6; 3 )</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 6; 3 )</option>
                                    <option value="x">( 7; 2 )</option>
                                    <option value="X">( 5; 2 )</option>
                                    <option value="n">( 6; 2 )</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            F
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 1; 8 )</option>
                                    <option value="n">( 0; 8 )</option>
                                    <option value="x">( 2; 7 )</option>
                                    <option value="X">( -1; 8 )</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            G
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 4; 2 )</option>
                                    <option value="x">( 4; 4 )</option>
                                    <option value="n">( 4; 3 )</option>
                                    <option value="X">( 5; 3 )</option>
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
function result_tipo_4_2_15() {
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