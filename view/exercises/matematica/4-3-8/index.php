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

                <div class="contenedor">

                    <div class="uno">

                    </div>

                    <p>
                        1 108 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">554</option>
                                <option value="x">251</option>
                                <option value="x">428</option>
                                <option value="X">898</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        6 242 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">3548</option>
                                <option value="x">3212</option>
                                <option value="X">3685</option>
                                <option value="n">3121</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        840 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">482</option>
                                <option value="n">420</option>
                                <option value="x">423</option>
                                <option value="X">456</option>
                            </select>
                        </span>
                    </p>


                </div>
                <div class="contenedor">

                    <div class="dos">

                    </div>

                    <p>
                        96 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">32</option>
                                <option value="x">50</option>
                                <option value="x">23</option>
                                <option value="X">48</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        150 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">15</option>
                                <option value="x">30</option>
                                <option value="X">49</option>
                                <option value="n">50</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        228 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">73</option>
                                <option value="n">76</option>
                                <option value="x">67</option>
                                <option value="X">45</option>
                            </select>
                        </span>
                    </p>


                </div>
                <div class="contenedor">

                    <div class="tres">

                    </div>

                    <p>
                        80 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">20</option>
                                <option value="x">12</option>
                                <option value="x">24</option>
                                <option value="X">40</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        248 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">42</option>
                                <option value="x">52</option>
                                <option value="X">61</option>
                                <option value="n">62</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        316 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">76</option>
                                <option value="x">87</option>
                                <option value="n">79</option>
                                <option value="X">16</option>
                            </select>
                        </span>
                    </p>


                </div>
                <div class="contenedor">

                    <div class="cuatro">

                    </div>

                    <p>
                        750 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">33</option>
                                <option value="n">150</option>
                                <option value="x">250</option>
                                <option value="X">125</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        165 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">41</option>
                                <option value="x">23</option>
                                <option value="X">25</option>
                                <option value="n">33</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        130 es
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">56</option>
                                <option value="x">32</option>
                                <option value="n">26</option>
                                <option value="X">31</option>
                            </select>
                        </span>
                    </p>


                </div>
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
function result_tipo_4_3_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 12) {
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