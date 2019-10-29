<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/1-1-15/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    <div class="caja-principal">
        <div class="center">
            <div class="row recibidor" id="recibidor">
                <div class="col s12 m6 l2 xl2">
                    <label class="title">A</label>
                    <div class="contenedorPieza" id="uA"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">E</label>
                    <div class="contenedorPieza" id="dE"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">I</label>
                    <div class="contenedorPieza" id="tI"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">O</label>
                    <div class="contenedorPieza" id="cO"></div>
                </div>
                <div class="col s12 m6 l2 xl2">
                    <label class="title">U</label>
                    <div class="contenedorPieza" id="cU"></div>
                </div>
            </div>
            <div id="contenedorPiezas">
                <ul id="listA">
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vA" src="../../../exercises/comunicacion/1-1-15/img/2.png" alt="pieza1">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vE" src="../../../exercises/comunicacion/1-1-15/img/3.png" alt="pieza2">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vO" src="../../../exercises/comunicacion/1-1-15/img/4.png" alt="pieza3">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vO" src="../../../exercises/comunicacion/1-1-15/img/5.png" alt="pieza4">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vU" src="../../../exercises/comunicacion/1-1-15/img/6.png" alt="pieza5">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vA" src="../../../exercises/comunicacion/1-1-15/img/7.png" alt="pieza6">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vO" src="../../../exercises/comunicacion/1-1-15/img/8.png" alt="pieza7">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="vA" src="../../../exercises/comunicacion/1-1-15/img/9.png" alt="pieza8">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="caballo pieza responsive-img" id="vE" src="../../../exercises/comunicacion/1-1-15/img/10.png" alt="pieza9">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="caballo pieza responsive-img" id="vI" src="../../../exercises/comunicacion/1-1-15/img/11.png" alt="pieza10">
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
  </body>
  
<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">

</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1-1-15/js/validate.js"></script>