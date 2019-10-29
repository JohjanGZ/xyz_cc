<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/1-0-11/css/styles.css">
          </head>
          <style type="text/css">
h4 {
    text-align: center;
}

#listA {
    display: flex;
    flex-wrap: wrap;
}

#palabras {
    padding: 50px;
}

#palabras li {
    width: 100%;
    margin: auto;
    margin-bottom: 2vh;
    margin-right: 1px;
}

@media (min-width: 600px) {
    #palabras li {
        width: 40%;
    }
}

@media (min-width: 1024px) {
    #palabras li {
        width: 18%;
    }
}
.muestra {
    width: 100px;
    margin: auto;
    margin-top: 30px;
}
.box {
    height: 200px;
    width: 200px;
    border: 3px solid silver;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.box img {
    width: 50%;
    height: auto;
}

.box:hover {
    border: 3px solid #37D3F7;
}
          </style>
  <?=$titulo?>
<body>
    <div class="container">
        <div class="row">
            <div class="muestra">
                <img src="../../../exercises/comunicacion/1-0-11/img/principal.png" class="responsive-img">
            </div>
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li id="obj1" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-0-11/img/2.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj2" >
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-0-11/img/3.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj3" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-0-11/img/4.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj4" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-0-11/img/5.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj5" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-0-11/img/6.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj6" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-0-11/img/7.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj7" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-0-11/img/8.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj8">
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-0-11/img/9.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj9">
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-0-11/img/10.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj9" >
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-0-11/img/11.png" class="responsive-img">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="../../../exercises/comunicacion/1-0-11/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-11/js/validate.js"></script>