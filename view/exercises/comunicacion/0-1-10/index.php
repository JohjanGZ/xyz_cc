<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/0-1-10/css/styles.css">
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
    margin-bottom: 5px;
    text-align: center;
}
#palabras li > img {
    border: 3px solid silver;
    border-radius: 10px;
    padding: 25px;
}
#palabras li > span {
    font-size: 22px;
    letter-spacing: 10px;
    padding-left: 8px;
    border: 3px solid transparent;
    cursor: pointer;
}
#palabras li > span:hover {
    border: 3px solid #37D3F7;
    border-radius: 5px;
}

@media (min-width: 600px) {
#palabras li {
    width: 200PX;
    margin: auto;
    margin-bottom: 2vh;
}
}
          </style>
  <?=$titulo?>
    <div class="container">
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <img src="../../../exercises/comunicacion/0-1-10/img/2.png" class="responsive-img">
                        <span class="a" alt="">o</span>
                        <span class="a" alt="">r</span>
                        <span class="a" alt="n">u</span>
                        <span class="a" alt="">g</span>
                        <span class="a" alt="">a</span>
                    </li>
                    <li>
                        <img src="../../../exercises/comunicacion/0-1-10/img/4.png" class="responsive-img">
                        <span class="a" alt="n">u</span>
                        <span class="a" alt="">v</span>
                        <span class="a" alt="">a</span>
                    </li>
                    <li>
                        <img src="../../../exercises/comunicacion/0-1-10/img/3.png" class="responsive-img">
                        <span class="a" alt="n">u</span>
                        <span class="a" alt="">ñ</span>
                        <span class="a" alt="">a</span>
                    </li>
                    <li>
                        <img src="../../../exercises/comunicacion/0-1-10/img/1.png" class="responsive-img">
                        <span class="a" alt="">n</span>
                        <span class="a" alt="n">u</span>
                        <span class="a" alt="">b</span>
                        <span class="a" alt="">e</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
                "border": "3px solid",
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

        // Formulario - Registrados

          function result_tipo_2_1_10(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;
 


                          if(r==4){                  
                              localStorage.setItem("Nota2-1-10",nota);
                              localStorage.setItem("Time2-1-9", tiempo);
                              correcto(); 
                          }
                          else{
                              incorrecto();
                              localStorage.setItem("Nota2-1-10","0");
                              localStorage.setItem("Time2-1-10", tiempo);
                          }    
                  
                      }
     
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/0-1-9/js/validate.js"></script>