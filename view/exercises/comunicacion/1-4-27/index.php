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
                            <td><div class="palabra" maxlength="1" id="1"></div></td>
                            <td><div class="palabra" maxlength="1" id="2"></div></td>
                            <td><div class="palabra" maxlength="1" id="3"></div></td>
                            <td><div class="palabra" maxlength="1" id="4"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="e" id="5"></div></td>
                            <td></td>
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
                            <td><div class="palabra" maxlength="1" id="6"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="7"></div></td>
                            <td><div class="palabra" maxlength="1" id="8"></div></td>
                            <td><div class="palabra" maxlength="1" id="9"></div></td>
                            <td><div class="palabra" maxlength="1" id="10"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="11"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="12"></div></td>
                            <td><div class="palabra" maxlength="1" id="13"></div></td>
                            <td><div class="palabra" maxlength="1" id="14"></div></td>
                            <td><div class="palabra" maxlength="1" id="15"></div></td>
                            <td><div class="palabra" maxlength="1" id="16"></div></td>
                            <td><div class="palabra" maxlength="1" id="17"></div></td>
                            <td><div class="palabra" maxlength="1" id="18"></div></td>
                            <td><div class="palabra" maxlength="1" id="19"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="20"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="21"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><div class="palabra" maxlength="1" id="22"></div></td>
                            <td><div class="palabra" maxlength="1" id="23"></div></td>
                            <td><div class="palabra" maxlength="1" id="24"></div></td>
                            <td><div class="palabra" maxlength="1" id="25"></div></td>
                            <td><div class="palabra" maxlength="1" id="26"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="27"></div></td>
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
            <div class="col l6">
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
                    <div class="campo-img">
                        <span>6.</span>
                        <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                    </div>
                    <div class="abecedario"></div>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_4_27() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if ($('#1').text() == 'h' && $('#2').text() == 'i' && $('#3').text() == 'l' && $('#4').text() == 'o' && $('#5').text() == 'e' && 
        $('#6').text() == 'l' && $('#7').text() == 'h' && $('#8').text() == 'a' && $('#9').text() == 'd' && $('#10').text() == 'a' && $('#11').text() == 'd' &&
        $('#12').text() == 'h' && $('#13').text() == 'o' && $('#14').text() == 's' && $('#15').text() == 'p' && $('#16').text() == 'i' &&
        $('#17').text() == 't' && $('#18').text() == 'a' && $('#19').text() == 'l' && $('#20').text() == 'o' && $('#21').text() == 't' &&
        $('#22').text() == 'h' && $('#23').text() == 'u' && $('#24').text() == 'e' && $('#25').text() == 's' && $('#26').text() == 'o' && $('#27').text() == 'l') {
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