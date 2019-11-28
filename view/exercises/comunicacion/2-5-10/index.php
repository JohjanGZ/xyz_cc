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
           
            <div class="contenedor-oraciones">

               
                <div class="oracion">
                    
                    <div class="contenedor-check">
                       <div class="respuesta">
                            <span>Abeja</span>
                       </div>
                       <div class="respuesta">
                            <span>Mosca</span>
                       </div>
                       <div class="respuesta">
                            <span>Zancudo</span>
                       </div>
                       <div class="respuesta" alt="n">
                            <span>Hormiga</span>
                       </div>
                       <div class="respuesta">
                            <span>Avispa</span>
                       </div>
                    </div>
                   
                </div>
                <div class="oracion">
                    
                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Guitarra</span>
                       </div>
                       <div class="respuesta" alt="n">
                            <span>Quena</span>
                       </div>
                       <div class="respuesta">
                            <span>Charango</span>
                       </div>
                       <div class="respuesta">
                            <span>Violín</span>
                       </div>
                       <div class="respuesta">
                            <span>Arpa</span>
                       </div>
                    </div>
                   
                </div>
                <div class="oracion">
                    
                    <div class="contenedor-check">
                       <div class="respuesta">
                            <span>Banco</span>
                       </div>
                       <div class="respuesta" alt="n">
                            <span>Mesa</span>
                       </div>
                       <div class="respuesta">
                            <span>Silla</span>
                       </div>
                       <div class="respuesta">
                            <span>Sofá</span>
                       </div>
                       <div class="respuesta">
                            <span>Sillón</span>
                       </div>
                    </div>
                   
                </div>
                <div class="oracion">
                    
                    <div class="contenedor-check">
                       <div class="respuesta">
                            <span>Taladro</span>
                       </div>
                       <div class="respuesta">
                            <span>Martillo</span>
                       </div>
                       <div class="respuesta">
                            <span>Serrucho</span>
                       </div>
                       <div class="respuesta" alt="n">
                            <span>Cubierto</span>
                       </div>
                       <div class="respuesta">
                            <span>Destornillador</span>
                       </div>
                    </div>
                   
                </div>
                <div class="oracion">
                    
                    <div class="contenedor-check">
                       <div class="respuesta">
                            <span>Solidaridad</span>
                       </div>
                       <div class="respuesta">
                            <span>Respeto</span>
                       </div>
                       <div class="respuesta">
                            <span>Responsabilidad</span>
                       </div>
                       <div class="respuesta">
                            <span>Puntualidad</span>
                       </div>
                       <div class="respuesta" alt="n">
                            <span>Odio</span>
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

    var r = 0;
    var v = 1;


var cols = document.querySelectorAll('.contenedor-check');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});

    $(".respuesta").click(function(){
        $(this).css({
        "border": "solid",
        "border-color": "#37D3F7",
        "background": "#B6ECFF"
        });
        var element = $(this).attr("alt");
        var select = $(this).attr("value");
        if (select != "seleccionado") {

            if (element == "n") {
                r++;
                $(this).attr("value", "seleccionado");
            } else {
                r--;
                $(this).attr("value", "seleccionado");
            }
        }
    });

    
    

    function result_tipo_2_5_10() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
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