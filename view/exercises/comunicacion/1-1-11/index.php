<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/1-1-11/css/styles.css">
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
    height: 60%;
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
                <img src="../../../exercises/comunicacion/1-1-11/img/principal.png" class="responsive-img">
            </div>
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li id="obj1" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-11/img/2.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj2" >
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-1-11/img/3.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj3" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-11/img/4.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj4" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-11/img/5.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj5" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-11/img/6.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj6" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-11/img/7.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj7" >
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-11/img/8.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj8">
                        <div class="box a" alt="n">
                            <img src="../../../exercises/comunicacion/1-1-11/img/9.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj9">
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-1-11/img/10.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj9" >
                        <div class="box a" alt="">
                            <img src="../../../exercises/comunicacion/1-1-11/img/11.png" class="responsive-img">
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
        var r = 0;
        var ul = document.querySelector('#listA');
        for (var i = ul.children.length; i >= 0; i--) {
            ul.appendChild(ul.children[Math.random() * i | 0]);
        }
   
        $('.a').click(function () {

            $(this).css({
                "border": "solid",
                "border-color": "#37D3F7",
                "background": "#B6ECFF"
            });
            var element = $(this).attr("alt");
            var select = $(this).attr("value");
            if (select != "seleccionado") {

                if (element == "n") {
                    r++;
                    $(this).attr("value", "seleccionado");
                } else {
                    r--;
                    $(this).attr("value", "seleccionado");
                }
                console.log(r);
            }
        })


          function result_tipo_1_1_11(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;
 


                          if(r==7){                  
                              localStorage.setItem("Nota2-1-11",nota);
                              localStorage.setItem("Time2-1-11", tiempo);
                              correcto(); 
                          }
                          else{
                              incorrecto();
                              localStorage.setItem("Nota2-1-9","0");
                              localStorage.setItem("Time2-1-9", tiempo);
                          }    
                  
                      }
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1-1-9/js/validate.js"></script>