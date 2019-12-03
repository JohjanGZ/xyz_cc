<?php require('../../../tools/var/variables.php'); ?>

<style>
.fila{
  width: 900px;
  display: grid;
  margin: auto;
  grid-template-columns: 2fr 10fr;
  align-items: center;
  justify-items:center;
  padding-top: 10vh;
}
.image img{
  width: 600px;
}
.preguntas{
  margin: 30px;
  width: 100%;
  font-weight: 500;
  font-size: 18px;
}

.switch label .lever {
    content: "";
    display: inline-block;
    position: relative;
    width: 36px;
    height: 14px;
    background-color: rgba(128, 28, 92, 0.65);
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background 0.3s ease;
    transition: background 0.3s ease;
    vertical-align: middle;
    margin: 0 16px;
}

.switch label .lever:after {
    background-color: #861b5f;
    -webkit-box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
    box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
}

.switch label input[type=checkbox]:checked + .lever {
    background-color: #fdcc5359;
}

.switch label input[type=checkbox]:checked + .lever:after {
    background-color: #ffd768;
}

.switch, .switch * {
    -webkit-tap-highlight-color: transparent;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-bottom: -14px;
    padding-bottom: -21px;
}

</style>

<div class="container">
  <?=$titulo?>
  <section id="contenedorPuzzle">
    <div class="fila">
      <div class="image">
        <div class="imgvf"><img src="img/1-28/image.gif" alt=""></div>
      </div>

      <form class="preguntas seleccion aleatorio" method="POST" id="seleccion">
        <!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->
        <div class="row">
          <div class="col s12">
            <b> - Todas las sillas son iguales</b>
            <div class="item3">
              <!-- Switch -->
              <div class="switch">
                <label>
                  F
                  <input name="1" type="checkbox" checked="checked">
                  <span class="lever"></span>
                  V
                </label>
              </div>
            </div>
          </div>
        </div>
        <!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->
        <div class="row">
          <div class="col s12">
            <b> - Algunas sillas son de 4 patas</b>
            <div class="item3">
              <!-- Switch -->
              <div class="switch">
                <label>
                  F
                  <input name="2" type="checkbox" checked="checked">
                  <span class="lever"></span>
                  V
                </label>
              </div>
            </div>
          </div>
        </div>
        <!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->
        <div class="row">
          <div class="col s12">
            <b> - Solo dos sillas tienen 5 ruedas</b>
            <div class="item3">
              <!-- Switch -->
              <div class="switch">
                <label>
                  F
                  <input name="3" type="checkbox" checked="checked">
                  <span class="lever"></span>
                  V
                </label>
              </div>
            </div>
          </div>
        </div>
        <!--////////////////////////////////////////////////////////////////FILA///////////////////////////////////////////////////////////////////////  -->
        <div class="row">
          <div class="col s12">
            <b> - Ninguna silla tiene dos ruedas</b>
            <div class="item3">
              <!-- Switch -->
              <div class="switch">
                <label>
                  F
                  <input name="4" type="checkbox" checked="checked">
                  <span class="lever"></span>
                  V
                </label>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Respuesta correcta</h4>
      <center>
        <img class="materialboxed" width="100%" src="img/1-28/respuesta.png">
      </center>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
  </div>
</div>
<script src="../../../../../js/core.js"></script>
<?php require_once('../../../tools/botones/botones.php'); ?>
<script type="text/javascript">
  function result_tipo_2_0_28() {

    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (
      $('input:checkbox[name=1]:checked').val() == null
      &&
      $('input:checkbox[name=2]:checked').val() == "on"
      &&
      $('input:checkbox[name=3]:checked').val() == "on"
      &&
      $('input:checkbox[name=4]:checked').val() == null
    ) {
      localStorage.setItem("Nota2-0-28", "2");
      localStorage.setItem("Time2-0-28", tiempo);

      correcto();
    }

    else {

      incorrecto();

      localStorage.setItem("Nota2-0-28", "0");
      localStorage.setItem("Time2-0-28", tiempo);

    }
  }

  var cols = document.querySelectorAll('.aleatorio');

  [].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
      e.appendChild(e.children[Math.random() * i | 0]);
    }

  });
</script>
</body>