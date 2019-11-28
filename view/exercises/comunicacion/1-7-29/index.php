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
            <div class="col l5">
                <table class="crucigrama2 mt80">
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><span class="span">4</span></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" alt="p"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><span class="span">1</span></td>
                            <td><div class="palabra" maxlength="1" alt="s"></div></td>
                            <td><div class="palabra" maxlength="1" alt="p"></div></td>
                            <td><div class="palabra" maxlength="1" alt="r"></div></td>
                            <td><div class="palabra" maxlength="1" alt="a"></div></td>
                            <td><div class="palabra" maxlength="1" alt="y"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="a"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="d"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><span class="span">3</span></td>
                            <td><div class="palabra" maxlength="1" alt="p"></div></td>
                            <td><div class="palabra" maxlength="1" alt="r"></div></td>
                            <td><div class="palabra" maxlength="1" alt="e"></div></td>
                            <td><div class="palabra" maxlength="1" alt="c"></div></td>
                            <td><div class="palabra" maxlength="1" alt="i"></div></td>
                            <td><div class="palabra" maxlength="1" alt="o"></div></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><span class="span">2</span></td>
                            <td><div class="palabra" maxlength="1" alt="p"></div></td>
                            <td><div class="palabra" maxlength="1" alt="r"></div></td>
                            <td><div class="palabra" maxlength="1" alt="o"></div></td>
                            <td><div class="palabra" maxlength="1" alt="b"></div></td>
                            <td><div class="palabra" maxlength="1" alt="e"></div></td>
                            <td><div class="palabra" maxlength="1" alt="t"></div></td>
                            <td><div class="palabra" maxlength="1" alt="a"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="a"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
            <div class="col l7 r-crucigrama">
                <div class="contenedor-derecha">
                
                    <div class="campo">
                        
                        <div class="contenedor-preguntas">
                            <div class="pregunta">
                                <span>1- Cuando deseo perfumar mi casa, utilizo un aromático..</span>
                            </div>
                            <div class="pregunta">
                                <span>2- Para mi examen de química utilicé una..</span>
                                    
                            </div>
                            <div class="pregunta">
                                <span>3- Al hacer compras es importante conocer el..</span>
                                    
                            </div>
                            <div class="pregunta">
                                <span>4- El mejor lugar para descansar y respirar aire puro es la..</span>
                                    
                            </div>
                        </div>

                    </div>
                    <div class="abecedario"></div>
                        
                </div>

                <div class="contenedor-img">
                    <div class="imagen">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </div>
                    <div class="imagen">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>
                    <div class="imagen">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                    </div>
                    <div class="imagen">
                        <img src="<?= $dir ?>/img/5.png" alt="">
                    </div>

                </div>

            </div>
        </div>
    </div>



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


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_7_29() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 22) {
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