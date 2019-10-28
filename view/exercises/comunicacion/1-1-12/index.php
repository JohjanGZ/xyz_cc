<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/1-1-12/css/styles.css">
          </head>
          <style type="text/css">
4 {
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
        width: 20%;
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
                <img src="../../../exercises/comunicacion/1-1-12/img/principal.png" class="responsive-img">
            </div>
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-12/img/2.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-1-12/img/3.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-12/img/4.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-12/img/5.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-12/img/6.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-12/img/7.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-12/img/8.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-1-12/img/9.png" class="responsive-img">
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-1-12/js/validate.js"></script>