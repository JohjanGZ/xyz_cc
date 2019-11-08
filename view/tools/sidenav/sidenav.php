<ul style="width:auto" id="slide-out" class="sidenav">
  

      <ul id="menu">
        
        <li><div class="tooltipped " data-position="top" data-tooltip="Unidades"><i class="material-icons small icon-contenido">chrome_reader_mode</i></div>
          <ul class="box-s">
            <li class="menu-item-p unidad-p"><div>Unidad 0</div>
              <ul class="ul-right">
                
              </ul>
            </li>
            <li class="menu-item-p unidad-p"><div>Unidad 1</div>
              <ul class="ul-right">
                
              </ul>
            </li>
            <li class="menu-item-p unidad-p"><div>Unidad 2</div>
              <ul class="ul-right">
                
              </ul>
            </li>

            <li class="menu-item-p unidad-p"><div>Unidad 3</div>
              <ul class="ul-right">
                
              </ul>
            </li>
            <li class="menu-item-p unidad-p"><div>Unidad 4</div>
              <ul class="ul-right">
                
              </ul>
            </li>
            <li class="menu-item-p unidad-p"><div>Unidad 5</div>
              <ul class="ul-right">
                
              </ul>
            </li>
            <li class="menu-item-p unidad-p"><div>Unidad 6</div>
              <ul class="ul-right">
                
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      
      <center>
         <li>
            <a href="../../" class="tooltipped " data-position="right" data-tooltip="Ir a Inicio"><i class="material-icons small  icon-modulo">view_module</i>
            </a>
        </li>
      </center>
      <li>
        <a href="../../php/cerrar.php" class="tooltipped" data-position="right" data-tooltip="Cerrar Plataforma"><i class="material-icons small icon-contenido">power_settings_new</i>
        </a>
      </li>
  </ul>

  
<a href="#" data-target="slide-out"   class="tooltipped sidenav-trigger pink-text text-accent-4 btn-menu" data-tooltip="Menu" data-position="right"><i class="small material-icons ">menu</i></a>

<script>
 
  $( document ).ready(function() {
   
    var data = JSON.parse(localStorage.getItem("data"));
    var color = localStorage.getItem("color");
    

    var i = 0;
    $('.unidad-p').each(function() {
      console.log("hola soy inicio: "+i);

  
      $(this).children('div').html(data[i].nombre);
      console.log(color);

      for (let index = 0; index < data[i].temas.length; index++) {
        $(this).children('ul').append('<li class="menu-item-p"><div><a href="../../../'+data[i].ruta+'/'+(index+1)+'">'+data[i].temas[index]+'</a></div></li>');
      }
      i++;
      if(i==4){
        $( "#menu" ).menu({
           classes: {
             "ui-menu": "green"
           }
         });
      }
    });


    // $('.unidad-p').each(function() {
    //   $('.unidad-p div').html(data[i].nombre);
    //   i++;
    // });
    //
  });
</script>