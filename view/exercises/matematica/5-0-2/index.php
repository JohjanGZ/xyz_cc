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
                 
                   
                    <p>
                    M = { 3; 5; 7: 9; 11; 13 }
                    </p>
                   
                 
                    <p class="pt" >
                        <span class="simbolos">

                        </span>
                   
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">es un decimal</option>
                                <option value="X">es par</option>
                                <option value="n">es impar</option>
                            </select>
                        </span> 
                        / x ≥ 
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">1</option>
                                <option value="x">2</option>
                                <option value="n">3</option>
                                <option value="X">4</option>
                            </select>
                        </span> 
                        ; x ≤
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">13</option>
                                <option value="x">11</option>
                                <option value="x">12</option>
                                <option value="x">14</option>
                            </select>
                        </span> 
                    </p>
                    <p class="pt">
                    M = { 1; 2; 3: 4; 5; 6 }
                    </p>
                    <p class="pt" >
                        <span class="simbolos d">

                        </span>
                        /
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">3</option>
                                <option value="n">1</option>
                                <option value="x">5</option>
                                <option value="X">7</option>
                            </select>
                        </span> 
                        ≤ x ≤
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">4</option>
                                <option value="x">2</option>
                                <option value="X">8</option>
                                <option value="n">6</option>
                            </select>
                        </span> }
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
function result_tipo_5_0_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 5) {
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
