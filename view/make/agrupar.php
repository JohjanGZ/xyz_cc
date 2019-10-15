          
<?php include('titulo.php'); ?>
         

             <form class="" enctype="multipart/form-data" id="uploadForm" method="POST" action="../../php/insert-ejercicio.php">
             	<input name="id_ejercicio"  type="hidden" value="<?=$id?>">
            <h6>Recibidor 1</h6>
          <div class="card-panel grey lighten-5 z-depth-1 row">
          <!--<img class="tooltipped" data-position="right" data-tooltip="Imagenes de Muestra" width="80%" src="../../img/muestra-2-1-1.png">-->
          <div class="row">
             <label>Titulo del conjunto</label>
           <input name="titulo1" placeholder="Titulo recibidor (EJEMPLO: Animales, Frutas, objetos )" id="boton_ejercicio" type="text" class="validate">
           </div>

                        <div class="field row" align="left"> 
                          <span> 
                           <label>Carga aqui las imagenes que corresponderan al  recibidor</label> 
                           <input type="file" id="files" name="files[]" multiple /> 
                          </span> 
                         </div> 

          </div>
               <h6>Recibidor 2</h6>
          <div class="card-panel grey lighten-5 z-depth-1 row">
          <!--<img class="tooltipped" data-position="right" data-tooltip="Imagenes de Muestra" width="80%" src="../../img/muestra-2-1-1.png">-->
          <div class="row">
             <label>Titulo del conjunto</label>
           <input name="titulo2" placeholder="Titulo recibidor (EJEMPLO: Animales, Frutas, objetos )" id="first_name" type="text" class="validate">
           </div>

                        <div class="field row" align="left"> 
                          <label>Carga aqui las imagenes que corresponderan al  recibidor</label> 
                          <span> 
                           
                           <input type="file" id="files2" name="files2[]" multiple /> 

                          </span> 
                         </div> 

          </div>
               <h6>Recibidor 3</h6>
          <div class="card-panel grey lighten-5 z-depth-1 row">
          <!--<img class="tooltipped" data-position="right" data-tooltip="Imagenes de Muestra" width="80%" src="../../img/muestra-2-1-1.png">-->
          <div class="row">
             <label>Titulo del conjunto</label>
           <input name="titulo3" placeholder="Titulo recibidor (EJEMPLO: Animales, Frutas, objetos )" id="first_name" type="text" class="validate">
           </div>

                        <div class="field row" align="left"> 
                          <span> 
                           <label>Carga aqui las imagenes que corresponderan al recibidor</label> 
                           <input type="file" id="files3" name="files3[]" multiple /> 
                          </span> 
                         </div> 
               
          </div>

                        <div id="modal1" class="modal">
                          <div class="modal-content">
                            <h4>Ayuda</h4>
                            <p>Para crear este ejercicio debes agregar cada imagen correspondiente segun el resultado en cada recibidor</p>
                       
                            <img class="materialboxed"  width="50%" src="../../img/tipos/agrupa.png">
                       
                          </div>
                          <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">- Ok -</a>
                          </div>
                        </div>
                                       <button class="btn tooltipped pink accent-4" type="submit" data-position="right" data-tooltip="Guardar Datos" id=""> <i class="material-icons">save</i></button>
              </form>  

            <script type="text/javascript">


                    $(document).ready(function(){
                    $('select').formSelect();
                    });


                //------------------------  TOOLTIP COMENTARIOS DE AYUDA ---------------

                    $(document).ready(function(){
                    $('.tooltipped').tooltip();
                    });


                //------------------------  MODAL COMENTARIOS DE AYUDA ---------------

                    $(document).ready(function(){
                    $('.modal').modal();
                    });

               //------------------------ materialboxed Ampliar imagen con click ---------------

                    $(document).ready(function(){
                    $('.materialboxed').materialbox();
                    });
                                                      	
                 $(document).ready(function() { 

                    if(window.File && window.FileList && window.FileReader) { 
                     $("#files").on("change",function(e) { 
                      var files = e.target.files , 
                      filesLength = files.length ; 
                      for (var i = 0; i < filesLength ; i++) { 
                       var f = files[i] 
                       var fileReader = new FileReader(); 
                       fileReader.onload = (function(e) { 
                        var file = e.target; 
                        $("<img></img>",{ 
                         class : "imageThumb", 
                         src : e.target.result, 
                         title : file.name 
                        }).insertAfter("#files"); 
                       }); 
                       fileReader.readAsDataURL(f); 
                      } 
                     }); 
                    } else { alert("Your browser doesn't support to File API") } 
                  }); 

                  $(document).ready(function() { 

                    if(window.File && window.FileList && window.FileReader) { 
                     $("#files2").on("change",function(e) { 
                      var files = e.target.files , 
                      filesLength = files.length ; 
                      for (var i = 0; i < filesLength ; i++) { 
                       var f = files[i] 
                       var fileReader = new FileReader(); 
                       fileReader.onload = (function(e) { 
                        var file = e.target; 
                        $("<img></img>",{ 
                         class : "imageThumb", 
                         src : e.target.result, 
                         title : file.name 
                        }).insertAfter("#files2"); 
                       }); 
                       fileReader.readAsDataURL(f); 
                      } 
                     }); 
                    } else { alert("Your browser doesn't support to File API") } 
                    }); 

                            $(document).ready(function() { 

                    if(window.File && window.FileList && window.FileReader) { 
                     $("#files3").on("change",function(e) { 
                      var files = e.target.files , 
                      filesLength = files.length ; 
                      for (var i = 0; i < filesLength ; i++) { 
                       var f = files[i] 
                       var fileReader = new FileReader(); 
                       fileReader.onload = (function(e) { 
                        var file = e.target; 
                        $("<img></img>",{ 
                         class : "imageThumb", 
                         src : e.target.result, 
                         title : file.name 
                        }).insertAfter("#files3"); 
                       }); 
                       fileReader.readAsDataURL(f); 
                      } 
                     }); 
                    } else { alert("Your browser doesn't support to File API") } 
                    }); 
  
            </script>