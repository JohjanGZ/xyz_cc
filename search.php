<style type="text/css">
ul li {
    width: 180px;
}

/*-------------------------------------------------------Portadas----------------------------------------------------------------- */
.iconview {
    top: 300px;
}
</style>
<!--<script type="text/javascript" src="js/data.js"></script>-->

<div id="fullscreen" class="section no-pad-bot" id="index-banner">
    <div class="container contenedor-libros">
        <br>
        <br>
        <div class="card-panel grey lighten-5 z-depth-1">
            <br>
            <div class="row valign-wrapper">
                <div class="items cursos">
                    <center>
                        <?php $libros=$_POST['data'];?>
                        <script>
                          var  datos= <?=json_encode($libros);?>;
                        </script>
                        <div class="container" style="padding:50px 250px;">
	<form role="form">
        <div class="form-group">
          <input type="input" class="form-control input-lg" id="txt-search" placeholder="Type your search character">
        </div>
	</form>

  </div>
 

                        <ul id="Libros" class="" data-id="2">

                        </ul>
                           
    <script>
        $('#txt-search').keyup(function(){
            var searchField = $(this).val();
                if(searchField === '')  {
                    $('#Libros').html('');
                    return;
                }
                var regex = new RegExp(searchField, "i");
                var output = ' <li class="menu-libros">';
                var count = 0;
               
                $.each(datos, function(key, val){ 
                    console.log(key);
                    if((val[count].titulo.search(regex) != -1) || (val[count].titulo.search(regex) != -1)){
                    if(val[count].activo=='1'){ output +='<a onclick="abrir(,)>';     
                    output += '<img class="img-responsive" width="50px" src="img/portadas/'+val[count].portada+'" alt="'+ val[count].titulo +'" />';
                    output += '<h5>' + val[count].titulo + '</h5>';
                    output += '<p>' + val[count].grado + '</p>';
                    if(val[count].activo=='1'){ output +='</a>';    
                    count++; 
                    }
                    
                });
                output += '</li>';
            $('#Libros').html(output);
        });
                            function abrir(Curso, Grado){
                               
                                $("#portada").css("display", "block");
                                $('#cuerpo').load('unidades.php', {
                                    curso: Curso,
                                    grado: Grado
                                });

                            };
    </script>
                          
                </div>
            </div>
        </div>
    </div>