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

            <div class="contenedor-oraciones">

                <div class="oracion">
                    <h5>
                        <span>•</span> ¿Quién era la panki?
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion" alt="n">
                            <span>Era una serpiente gigantesca.</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Era una anaconda.</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Un guerrero aguaruna.</span>
                        </div>
                    </div>

                </div>
                
                <div class="oracion">
                    <h5>
                        <span>•</span> ¿De qué estaba hecha la armadura que hizo Yacuma?
                    </h5>
                    <div class="contenedor-check">
                        
                        <div class="respuesta seleccion">
                            <span>De arcilla y piedras.</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>De arcilla y ceniza de árbol.</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>De una aleación de oro y titanio.</span>
                        </div>
                       
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>•</span> ¿A qué órgano de la serpiente atacó Yacuma?
                    </h5>
                    <div class="contenedor-check">
                        
                        <div class="respuesta seleccion" alt="n">
                            <span>Al corazón</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Al estómago</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>A los pulmones</span>
                        </div>
                       
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

var r = 0;

function result_tipo_5_0_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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