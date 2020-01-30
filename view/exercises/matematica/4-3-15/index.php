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


                 <table class="tabla">


                     <tr>
                         <td>
                             7 metros
                         </td>
                         <td>
                             <span class="flecha"></span>
                         </td>
                         <td>

                             <span class="select">
                                 <select class="browser-default seleccion" alt="n">
                                     <option value="" disabled selected></option>
                                     <option value="n">700</option>
                                     <option value="x">7000</option>
                                     <option value="x">70</option>
                                 </select>
                             </span>
                             centímetros
                         </td>
                         <td>
                             <span class="flecha"></span>

                         </td>
                         <td>

                             <span class="select">
                                 <select class="browser-default seleccion" alt="n">
                                     <option value="" disabled selected></option>
                                     <option value="x">700</option>
                                     <option value="x">7000</option>
                                     <option value="n">70</option>
                                 </select>
                             </span>
                             decímetros
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <span class="select">
                                 <select class="browser-default seleccion" alt="n">
                                     <option value="" disabled selected></option>
                                     <option value="x">100</option>
                                     <option value="n">1</option>
                                     <option value="x">10</option>
                                 </select>
                             </span>
                             metros
                         </td>
                         <td>
                             <span class="flecha"></span>
                         </td>
                         <td>


                             100 centímetros
                         </td>
                         <td>
                             <span class="flecha"></span>

                         </td>
                         <td>

                             <span class="select">
                                 <select class="browser-default seleccion" alt="n">
                                     <option value="" disabled selected></option>
                                     <option value="n">10</option>
                                     <option value="x">1000</option>
                                     <option value="x">100</option>
                                 </select>
                             </span>
                             decímetros
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <span class="select">
                                 <select class="browser-default seleccion" alt="n">
                                     <option value="" disabled selected></option>
                                     <option value="n">9</option>
                                     <option value="x">900</option>
                                     <option value="x">90</option>
                                 </select>
                             </span>
                             metros
                         </td>
                         <td>
                             <span class="flecha"></span>
                         </td>
                         <td>


                             <span class="select">
                                 <select class="browser-default seleccion" alt="n">
                                     <option value="" disabled selected></option>
                                     <option value="x">90</option>
                                     <option value="x">9000</option>
                                     <option value="n">900</option>
                                 </select>
                             </span> centímetros
                         </td>
                         <td>
                             <span class="flecha"></span>

                         </td>
                         <td>

                             90 decímetros
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
function result_tipo_4_3_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 6) {
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