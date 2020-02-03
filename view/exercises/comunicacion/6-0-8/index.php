<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
  <div class="container">
        <div class="row">
           <div class="contenedor-ejercicios">
                <div class="seleccion letra letrax" alt="oo">
                    <span>
                    a. Como decía 
                    </span>
                    <div class="guion">
                        <span>:</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                     Cervantes 
                    </span>
                    <div class="guion">
                        <span>:</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="o">
                    <span>
                    «Llaneza, 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                    que toda afectación es mala»
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
           </div>
           <div class="contenedor-ejercicios">
                <div class="seleccion letra letrax" alt="oo">
                    <span>
                    b. Aquello es
                    </span>
                    <div class="guion">
                        <span>:</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="oo">
                    <span>
                    el fundamento 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                    verdadero de la felicidad
                    </span>
                    <div class="guion">
                        <span>:</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                     la educación
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
           </div>
           <div class="contenedor-ejercicios">
                <div class="seleccion letra letrax" alt="oo">
                    <span>
                    c. No me 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                    digas más 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="">
                    <span>
                    Fue suficiente 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                    con lo que ya has hecho
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
           </div>
           <div class="contenedor-ejercicios">
                <div class="seleccion letra letrax" alt="oo">
                    <span>
                    d. Mi estimado 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                    amigo 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="">
                    <span>
                    Me dirijo a usted 
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="">
                    <span>
                    en esta ocasión…
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
           </div>
           <div class="contenedor-ejercicios">
                <div class="seleccion letra letrax" alt="n">
                    <span>
                    e. Compramos muchísimas cosas
                    </span>
                    <div class="guion">
                        <span>:</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="">
                    <span>
                     un armario, una mesita,
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="">
                    <span>
                     una alfombra y
                    </span>
                    <div class="guion">
                        <span>.</span>    
                    </div>
                </div>
                <div class="seleccion letra letrax" alt="n">
                    <span>
                    hasta un perchero 
                    </span>
                    <div class="guion">
                        <span>.</span>    
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
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.png">
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
    // Validar
    function result_tipo_6_0_8() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 9) {
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