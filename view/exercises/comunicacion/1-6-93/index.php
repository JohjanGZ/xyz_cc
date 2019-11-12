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
                            <td><div class="palabra" maxlength="1" id="5"></div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="6"></div></td>
                            <td><div class="palabra" maxlength="e" id="7"></div></td>
                            <td><div class="palabra" maxlength="1" id="8"></div></td>
                            <td><div class="palabra" maxlength="1" id="9"></div></td>
                            <td><div class="palabra" maxlength="1" id="10"></div></td>
                            <td><div class="palabra" maxlength="1" id="11"></div></td>
                            <td><div class="palabra" maxlength="1" id="12"></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div class="palabra" maxlength="1" id="13"></div></td>
                            <td><div class="palabra" maxlength="1" id="14"></div></td>
                            <td><div class="palabra" maxlength="1" id="15"></div></td>
                            <td><div class="palabra" maxlength="1" id="16"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><div class="palabra" maxlength="1" id="17"></div></td>
                            <td><div class="palabra" maxlength="1" id="18"></div></td>
                            <td><div class="palabra" maxlength="1" id="19"></div></td>
                            <td><div class="palabra" maxlength="1" id="20"></div></td>
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
                            <td><div class="palabra" maxlength="1" id="21"></div></td>
                            <td><div class="palabra" maxlength="1" id="22"></div></td>
                            <td><div class="palabra" maxlength="1" id="23"></div></td>
                            <td><div class="palabra" maxlength="1" id="24"></div></td>
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

        if ($('#1').text() == 's' && $('#2').text() == 'u' && $('#3').text() == 'e' && $('#4').text() == 'ñ' && $('#5').text() == 'o' && 
        $('#6').text() == 'p' && $('#7').text() == 'e' && $('#8').text() == 's' && $('#9').text() == 't' && $('#10').text() == 'a' && $('#11').text() == 'ñ' &&
        $('#12').text() == 'a' && $('#13').text() == 'p' && $('#14').text() == 'a' && $('#15').text() == 'ñ' && $('#16').text() == 'o' &&
        $('#17').text() == 'n' && $('#18').text() == 'i' && $('#19').text() == 'ñ' && $('#20').text() == 'a' && $('#21').text() == 'l' &&
        $('#22').text() == 'e' && $('#23').text() == 'ñ' && $('#24').text() == 'a') {
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