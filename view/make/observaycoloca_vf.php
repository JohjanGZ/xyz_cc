          
<?php include('titulo.php'); ?>
         

             <form class="" enctype="multipart/form-data" id="uploadForm" method="POST" action="../../php/insert-ejercicio.php">
                          <input name="id_ejercicio"  type="hidden" value="<?=$id?>">
            <h6>Imagen Grafica</h6>
          <div class="card-panel grey lighten-5 z-depth-1 row">
          <!--<img class="tooltipped" data-position="right" data-tooltip="Imagenes de Muestra" width="80%" src="../../img/muestra-2-1-1.png">-->

                        <div class="field row" align="left"> 
                          <span> 
                           <label>Carga aqui la imagen grafica</label> 
                           <input type="file" id="files" name="files[]" /> 
                          </span> 
                         </div> 
                                <!-- <div class="row">
                                 <div id="divFileUpload">
                                  <input id="file-upload" value="$('#file-preview-zone').value();" type="file" name="files[]" accept="image/*" multiple/>
                                 </div>                             
                                 </div>
                                  <ul>
                                      <li id="file-preview-zone" name="imgzone"></li>
                                      <li><i class="large grey-text material-icons">add_box</i></li>
                                  </ul>-->
          </div>
               <h6>Nombre del Conjunto</h6>
          <div class="card-panel grey lighten-5 z-depth-1 row">
          <!--<img class="tooltipped" data-position="right" data-tooltip="Imagenes de Muestra" width="80%" src="../../img/muestra-2-1-1.png">-->
          <div class="row">

           <input name="conjunto" placeholder="Nombre del conjunto (EJEMPLO: Frutas, A, Z )" id="first_name" type="text" class="validate">
           </div>

                                <!-- <div class="row">
                                 <div id="divFileUpload">
                                  <input id="file-upload" value="$('#file-preview-zone').value();" type="file" name="files[]" accept="image/*" multiple/>
                                 </div>                             
                                 </div>
                                  <ul>
                                      <li id="file-preview-zone" name="imgzone"></li>
                                      <li><i class="large grey-text material-icons">add_box</i></li>
                                  </ul>-->
          </div>
          <div id="apendice">

            <h6>Iteracion</h6>
          <div class="card-panel grey lighten-5 z-depth-1 row" id="iteracion">
          <!--<img class="tooltipped" data-position="right" data-tooltip="Imagenes de Muestra" width="80%" src="../../img/muestra-2-1-1.png">-->
          <div class="row">
           <input name="titulo3" placeholder="Titulo recibidor (EJEMPLO: Animales, Frutas, objetos )" id="first_name" type="text" class="validate">
           </div>

                        <div class="field row" align="left"> 
                          <span> 
                           <label>Carga aqui la imagen del item</label> 
                           <input type="file" id="files3" name="files3[]" /> 
                          </span> 
                         </div> 
               
          </div>
          </div>
  <div id="divTxt" ></div>
          <p><a href="#" onClick="addFormField(); return false;">[+] Agregar Iteracion</a></p>

                                               <!-- Modal Trigger -->
                                     

                                      <!-- Modal Structure -->
                                      <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Ayuda</h4>
                                          <p>Para crear este ejercicio, seleccione una imagen grafica que sirva para la interpretacion de resultados del mismo, luego agregue las imagenes items que corresponda en cada conjunto lo cual tambien debera porporcionarle el titulo correspondiente. </p>
                                     
                                          <img class="materialboxed"  width="50%" src="../../img/tipos/observaycoloca.png">
                                     
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">- Ok -</a>
                                        </div>
                                      </div>
        <button class="btn tooltipped  pink accent-4" type="submit" data-position="right" data-tooltip="Guardar Datos" id=""> <i class="material-icons">save</i></button>
                      </form>  

                <script type="text/javascript">
    

function addFormField() {
var id = document.getElementById("iteracion").value;
$("#apendice").append("<p id='row" + id + "'><h6>Iteracion" + id + "</h6><div class='card-panel grey lighten-5 z-depth-1 row' id='iteracion'><div class='row'><input name='titulo3' placeholder='Titulo recibidor (EJEMPLO: Animales, Frutas, objetos )'' id='first_name' type='text' class='validate'></div><div class='field row' align='left'><span><label>Carga aqui la imagen del item</label><input type='file' id='files3' name='files3[]' /></span></div> </div><p id='row" + id + "'>&nbsp;&nbsp<a href='#' onClick='removeFormField(\"#row" + id + "\"); return false;'>Quitar</a></p>");

id = (id - 1) + 2;
document.getElementById("id").value = id;
}

function removeFormField(id) {

$(id).remove();

}














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