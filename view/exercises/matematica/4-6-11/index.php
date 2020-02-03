<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('>','=','<');
?>

<body>
    <div class="container-two">
        <div class="two-grid">
            <span class="title">Elena coloca en una caja las siguientes monedas:</span>
            <div class="grid">
                <div class="eje-item">
                    <span class="s">•</span> 1 de S/ 0,50
                </div>
                <div class="eje-item">
                    <span class="s">•</span> 1 de S/ 2,00
                </div>
                <div class="eje-item">
                    <span class="s">•</span> 1 de S/ 1,00
                </div>
                <div class="eje-item">
                    <span class="s">•</span> 1 de S/ 5,00
                </div>
            </div>
            <span class="title">Luego llama a su hermano Renzo, le venda los ojos y le pide que saque una moneda. Y le pide que responda:</span>
            <!--  -->
            <span class="parrafo"><span class="s">a.</span> El espacio muestral.</span>
            <div class="grid">
                <div class="eje-item">
                    <span>Espacio muestral</span><span class="s">=</span>
                </div>
                <div class="eje-item">
                    {
                    <select class="browser-default seleccion" alt="S/ 0,50">
                        <option value="" disabled selected></option>
                        <option value="S/ 0,50">S/ 0,50</option>
                        <option value="S/ 0,80">S/ 0,80</option>
                        <option value="S/ 0,40">S/ 0,40</option>
                        <option value="S/ 0,20">S/ 0,20</option>
                    </select>
                    ;
                    <select class="browser-default seleccion" alt="S/ 1">
                        <option value="" disabled selected></option>
                        <option value="S/ 1">S/ 1</option>
                        <option value="S/ 4">S/ 4</option>
                        <option value="S/ 2">S/ 2</option>
                        <option value="S/ 3">S/ 3</option>
                    </select>
                    ;
                    <select class="browser-default seleccion" alt="S/ 2">
                        <option value="" disabled selected></option>
                        <option value="S/ 8">S/ 8</option>
                        <option value="S/ 2">S/ 2</option>
                        <option value="S/ 4">S/ 4</option>
                        <option value="S/ 1">S/ 1</option>
                    </select>
                    ;
                    <select class="browser-default seleccion" alt="S/ 5">
                        <option value="" disabled selected></option>
                        <option value="S/ 1">S/ 1</option>
                        <option value="S/ 5">S/ 5</option>
                        <option value="S/ 6">S/ 6</option>
                        <option value="S/ 7">S/ 7</option>
                    </select>
                    }
                </div>
            </div>
            <!--  -->
            <span class="parrafo"><span class="s">b.</span> El suceso A por extensión, si saca una moneda mayor a S/ 0,50.</span>
            <div class="grid">
                <div class="eje-item">
                    <span>A</span><span class="s">=</span>
                </div>
                <div class="eje-item">
                    {
                    <select class="browser-default seleccion" alt="S/ 1">
                        <option value="" disabled selected></option>
                        <option value="S/ 1">S/ 1</option>
                        <option value="S/ 4">S/ 4</option>
                        <option value="S/ 2">S/ 2</option>
                        <option value="S/ 3">S/ 3</option>
                    </select>
                    ;
                    <select class="browser-default seleccion" alt="S/ 2">
                        <option value="" disabled selected></option>
                        <option value="S/ 8">S/ 8</option>
                        <option value="S/ 2">S/ 2</option>
                        <option value="S/ 4">S/ 4</option>
                        <option value="S/ 1">S/ 1</option>
                    </select>
                    ;
                    <select class="browser-default seleccion" alt="S/ 5">
                        <option value="" disabled selected></option>
                        <option value="S/ 1">S/ 1</option>
                        <option value="S/ 5">S/ 5</option>
                        <option value="S/ 6">S/ 6</option>
                        <option value="S/ 7">S/ 7</option>
                    </select>
                    }
                </div>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?=$dir?>/img/respuesta.png">
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
function result_tipo_4_6_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 7) {
        // console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        // console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>