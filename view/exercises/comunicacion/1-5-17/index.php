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
            <div class="col l6">
                <table class="crucigrama2 mt80">
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><span class="span">5</span></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><span class="span">2</span></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" alt="m"></div></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="m"></div></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="a"></div></td>
                            <td></td>
                            <td><span class="span">4</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="a"></div></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="c"></div></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="m"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="n"></div></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="e"></div></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="a"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="z"></div></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="t"></div></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="z"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><span class="span">1</span></td>
                            <td><div class="palabra" maxlength="1" alt="z"></div></td>
                            <td><div class="palabra" maxlength="1" alt="a"></div></td>
                            <td><div class="palabra" maxlength="1" alt="p"></div></td>
                            <td><div class="palabra" maxlength="1" alt="a"></div></td>
                            <td><div class="palabra" maxlength="1" alt="t"></div></td>
                            <td><div class="palabra" maxlength="1" alt="o"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" alt="n"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><span class="span">3</span></td>
                            <td><div class="palabra" maxlength="1" alt="t"></div></td>
                            <td><div class="palabra" maxlength="1" alt="e"></div></td>
                            <td><div class="palabra" maxlength="1" alt="n"></div></td>
                            <td><div class="palabra" maxlength="1" alt="a"></div></td>
                            <td><div class="palabra" maxlength="1" alt="z"></div></td>
                            <td><div class="palabra" maxlength="1" alt="a"></div></td>
                            <td><div class="palabra" maxlength="1" alt="s"></div></td>
                            <td></td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
            <div class="col l6 r-crucigrama">
                <div class="campo">
                    <div class="campo-img">
                        <span>1.</span>
                        <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                    </div>
                    <div class="campo-img">
                        <span>2.</span>
                        <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                    </div>
                    <div class="campo-img">
                        <span>3.</span>
                        <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                    </div>
                    <div class="campo-img">
                        <span>4.</span>
                        <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                    </div>
                    <div class="campo-img">
                        <span>5.</span>
                        <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                    </div>
                </div>
                <div class="abecedario"></div>

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
    function result_tipo_1_5_17() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 26) {
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