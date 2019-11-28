  
  <?php
 include ('item/variables.php');
  include('../../php/config.php');
  $id=2;
   ?>
    <script>
        var count = <?=$intentos?>  
    </script>
<head>
         
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="responsive/r1.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 2750px)" href="responsive/r1x2750.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 1500px)" href="responsive/r1x1500.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 1100px)" href="responsive/r1x1100.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="responsive/r1x800.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 450px)" href="responsive/r1x450.css">
        </head>
 
 <?=$titulo?>
<div class="container">
    <section id="contenedorpuzzle">
        <div class="row">




          <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
             <center>
              <ul>
                <?php   
                      $SQLagrupar="select * from tipo_agrupa where id_ejercicio like '$id' and tipo like 'img'";
                      $result = $db->query($SQLagrupar);
                      while($img = $result->fetch_array(MYSQLI_ASSOC)){ 

                           echo "<li class='contenedorimg'><img  id='".$img['grupo']."' src='../../img/2/agrupar/".$img['item']."'  draggable='true' ondragstart='start(event)' ondragend='end(event)'></li>";                     
                          //echo "<option>".$miembro["descripcion"].' - '.$miembro["tipo"]."</option>";                 
                      }

                        $sql1="select * from tipo_agrupa where id_ejercicio like '$id' and tipo like 'titulo1'";
                        $sql2="select * from tipo_agrupa where id_ejercicio like '$id' and tipo like 'titulo2'";
                        $sql3="select * from tipo_agrupa where id_ejercicio like '$id' and tipo like 'titulo3'";

                          $result1 = $db->query($sql1);
                          $result2 = $db->query($sql2);
                          $result3 = $db->query($sql3);

                            $titulo1=$result1->fetch_array(MYSQLI_ASSOC);
                            $titulo2=$result2->fetch_array(MYSQLI_ASSOC);
                            $titulo3=$result3->fetch_array(MYSQLI_ASSOC);

                              $title1=$titulo1['item'];
                              $title2=$titulo2['item'];
                              $title3=$titulo3['item'];


                  ?>
    
              </ul>
            </center>
        </div>
     
          </div>
    <div class="row center recibidor" id="recibidor">

                <div class="col s4">
                    <label><?=$title1?></label>
                    <div class="contenedorPieza" id="uno"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                </div>

                <div class="col s4">
                    <label><?=$title2?></label>
                    <div class="contenedorPieza" id="dos"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                </div>

                <div class="col s4">
                    <label><?=$title3?></label>
                    <div class="contenedorPieza" id="tres"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
                </div>
               
      </div>
  
 </div>
<div id="ver"></div>
</section>
 
<?php 

include ('item/botones.php'); 

                      $SQLuno="select * from tipo_agrupa where id_ejercicio like '$id' and tipo like 'img' and grupo like '$title1'";
                      $SQLdos="select * from tipo_agrupa where id_ejercicio like '$id' and tipo like 'img' and grupo like '$title2'";
                      $SQLtres="select * from tipo_agrupa where id_ejercicio like '$id' and tipo like 'img' and grupo like '$title3'";
                      $resultuno = $db->query($SQLuno);
                      $resultdos = $db->query($SQLdos);
                      $resulttres = $db->query($SQLtres);

                      $i=0;
           
            while($item1 = $resultuno->fetch_array(MYSQLI_ASSOC))
                  {          
                    
                  $pieza=utf8_encode($item1['id_agrupa']); 
                  
                  $trArray[$i] = ($pieza);
               
                     $i++;
    
                  }


                    // print_r($trArray);
                       $uno=json_encode($trArray);
        
        
                    // print_r($uno);
?>
<script src="../../js/noreload.js"></script>

<script type="text/javascript">
         
        var cajauno  = Array.prototype.slice.call( document.getElementById( "uno").children);
        var cajados  = Array.prototype.slice.call( document.getElementById( "dos").children);
        var cajatres = Array.prototype.slice.call( document.getElementById("tres").children);
        var correcto = true;
          console.log(cajauno);

        var tipos    = ['<??>', '<??>', '<??>'];

        [cajauno, cajados, cajatres].forEach( function(caja, cajaindex) {
            caja.forEach( function(element, itemindex) {
                if (element.id!=tipos[cajaindex]) correcto=false;
            });
        });

        var restantes = document.querySelectorAll("#contenedorPiezas > ul > li > img").length
        if (restantes==0 || !correcto)
            if(correcto) alert('si');
            else  alert('NO');
    
 

</script>
