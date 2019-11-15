<?php require('../../../tools/var/variables.php'); ?>
          <head>     

          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
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
    border: 3px solid silver;
    margin-bottom: 5px;
    border-radius: 10px;
    text-align: center;
    font-size: 24px;
    cursor: pointer;
}

@media (min-width: 600px) {
    #palabras li {
        width: 25%;
        margin: auto;
       margin-bottom: 15vh;
        margin-right: 1px;
    }
}

#palabras li:hover {
    border: 3px solid #37D3F7;
}

/* Color de obj */

#obj1 {
    color: red;
}

#obj2 {
    color: greenyellow;
}

#obj3 {
    color: blue;
}

#obj4 {
    color: mediumorchid;
}

#obj5 {
    color: orange;
}

#obj6 {
    color: maroon;
}

#obj7 {
    color: green;
}

#obj8 {
    color: red;
}

#obj9 {
    color: skyblue;
}
          </style>
  <?=$titulo?>
<body>
    <div class="container">
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li alt="n" class="a" id="obj1">
                        Nube
                    </li>
                    <li alt="" class="a" id="obj2">
                        Pelota
                    </li>
                    <li alt="" class="a" id="obj3">
                        Sala
                    </li>
                    <li alt="" class="a" id="obj4">
                        Escalera
                    </li>
                    <li alt="n" class="a" id="obj5">
                        Hueso
                    </li>
                    <li alt="" class="a" id="obj6">
                        Avión
                    </li>
                    <li alt="n" class="a" id="obj7">
                        Raúl
                    </li>
                    <li alt="" class="a" id="obj8">
                        Pala
                    </li>
                    <li alt="" class="a" id="obj9">
                        Peso
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="80%" src="img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>
<script src="../../../../../js/core.js"></script>
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


          function result_tipo_1_0_9(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;
 


                          if(r==3){                  
                              localStorage.setItem("Nota<?=$cod?>",nota);
                              localStorage.setItem("Time<?=$cod?>", tiempo);
                              correcto(); 
                          }
                          else{
                              incorrecto();
                              localStorage.setItem("Nota<?=$cod?>","0");
                              localStorage.setItem("Time<?=$cod?>", tiempo);
                          }    
                  
                      }
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>