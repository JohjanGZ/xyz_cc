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
                    
                    <div class="contenedor-check">
                        
                        
                        <div class="respuesta seleccion" alt="n">
                            <span>Teléfono</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Sílaba</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Página</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Lágrima</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Rápido</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Ortopédico</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Mandil</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Día</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Lápiz</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Casa</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Vaso</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Botella</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Cocina</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Árbol</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Perro</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Zapato</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Libro</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Mochila</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Adorno</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Papel</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Panetón</span>
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


function result_tipo_4_1_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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