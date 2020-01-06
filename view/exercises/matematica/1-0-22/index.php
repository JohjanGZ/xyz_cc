<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<div class="container">
    <div class="row">
       <div class="contenedor-ejercicios">
           <div class="ejercicio">
               <div class="item">
                   <img src="<?= $dir ?>/img/1.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/2.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/3.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/4.png" alt="">
               </div>
               <div class="item">
                   <ul>
                       <li class="seleccion">Forma</li>
                       <li class="seleccion" alt="n">Color</li>
                       <li class="seleccion">Tamaño</li>
                   </ul>
               </div>
           </div>
           <div class="ejercicio">
               <div class="item" style="border-right:none;">
                   <img src="<?= $dir ?>/img/5.png" alt="">
               </div>
               <div class="item" style="border-left:none;">
                   <img src="<?= $dir ?>/img/6.png" alt="">
               </div>
               <div class="item" style="width:150px;">
                   <img src="<?= $dir ?>/img/7.png" alt="">
               </div>
               <div class="item">
                   <ul>
                       <li class="seleccion">Forma</li>
                       <li class="seleccion">Color</li>
                       <li class="seleccion" alt="n">Tamaño</li>
                   </ul>
               </div>
           </div>
           <div class="ejercicio">
               <div class="item">
                   <img src="<?= $dir ?>/img/8.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/9.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/10.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/11.png" alt="">
               </div>
               <div class="item">
                   <ul>
                       <li class="seleccion" alt="n">Forma</li>
                       <li class="seleccion">Color</li>
                       <li class="seleccion">Tamaño</li>
                   </ul>
               </div>
           </div>
           <div class="ejercicio">
               <div class="item">
                   <img src="<?= $dir ?>/img/12.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/13.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/14.png" alt="">
               </div>
               <div class="item">
                   <img src="<?= $dir ?>/img/15.png" alt="">
               </div>
               <div class="item">
                   <ul>
                       <li class="seleccion" alt="n">Forma</li>
                       <li class="seleccion">Color</li>
                       <li class="seleccion">Tamaño</li>
                   </ul>
               </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_1_0_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (r == 4) {
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