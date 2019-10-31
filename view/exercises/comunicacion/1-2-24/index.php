<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
  <div class="container-two">
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li id="obj1" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="n">Si</div><span>/</span>
                            <div class="box a" alt="">No</div>
                        </div>
                    </li>
                    <li id="obj2" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="">Si</div><span>/</span>
                            <div class="box a" alt="n">No</div>
                        </div>
                    </li>
                    <li id="obj3" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="">Si</div><span>/</span>
                            <div class="box a" alt="n">No</div>
                        </div>
                    </li>
                    <li id="obj4" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="">Si</div><span>/</span>
                            <div class="box a" alt="n">No</div>
                        </div>
                    </li>
                    <li id="obj5" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="n">Si</div><span>/</span>
                            <div class="box a" alt="">No</div>
                        </div>
                    </li>
                    <li id="obj6" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="n">Si</div><span>/</span>
                            <div class="box a" alt="">No</div>
                        </div>
                    </li>
                    <li id="obj4" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/7.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="n">Si</div><span>/</span>
                            <div class="box a" alt="">No</div>
                        </div>
                    </li>
                    <li id="obj5" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/8.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="">Si</div><span>/</span>
                            <div class="box a" alt="n">No</div>
                        </div>
                    </li>
                    <li id="obj6" >
                        <div class="box-img">
                            <img src="<?= $dir ?>/img/9.png" class="responsive-img">
                        </div>
                        <div class="respuesta">
                            <div class="box a" alt="n">Si</div><span>/</span>
                            <div class="box a" alt="">No</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.jpg">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_2_24() {
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