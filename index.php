<?php
require('head.php'); 
include('header.php');
include('carga.php');
echo "<div id='fullscreen' >";   

?>
</head>
<div id='fullscreen' >
<body>
<div id="insert-php"></div>
    <nav class="indigo accent-2" role="navigation">
        <ul>
            <li id="logo-header">
                <div class="nav-wrapper container"><a id="logo-container" href="./" class="brand-logo "><img class="logoArca" src="LOGO.png"></a>
            </li>
        </div>
        <div id="btn-tool" class="fixed-action-btn click-to-toggle direction-top direction-left" >
            <a class="btn-floating  pink darken-2">
              <i class="material-icons">menu</i>
            </a>
            <ul>
              <li>
                <a href="php/cerrar.php" class="btn-floating red" style="opacity: 1; transform: scale(1) translateY(0px) translateX(0px);">
                    <i class="material-icons">power_settings_new</i> 
                </a>
              </li>
              <li>
                <a id="btn-paint" class="btn-floating blue darken-1" style="opacity: 1; transform: scale(1) translateY(0px) translateX(0px);">
                  <i class="material-icons">edit</i>
                </a>
              </li>
              <li>
                <a id="btn-pizarra" class="btn-floating green" style="opacity: 1; transform: scale(1) translateY(0px) translateX(0px);">
                  <i class="material-icons">video_label</i>
                </a>
              </li>
              <li>
                <a id="btn-home" class="btn-floating  red accent-4" style="opacity: 1; transform: scale(1) translateY(0px) translateX(0px);">
                  <i class="material-icons">home</i>
                </a>
              </li>
 
 
            </ul>
          </div>
        </ul>

    </nav>

    <!--<a class="btn-floating amber notas"><i class="material-icons">create</i></a>-->
    <script>
    
      $(document).ready(function(){
        
        $('#btn-paint').click( function (){
            $('#insert-php').load('php/opentool.php');
        });

        $('.fixed-action-btn').floatingActionButton({
            hoverEnabled: false,
            direction: 'left',
            toolbarEnabled:false
        });
      });
        
  </script>
<script type="text/javascript" src="js/fullscreen/release/jquery.fullscreen.min.js"></script>
<style type="text/css">
.bg-fullscreen {
    background: #eee !important;
    overflow: auto !important;
}

#indice .actividades ul {
    min-height: 54px;
    margin-top: -92px;
}

html {
    cursor: url(./asset/cursor/cursor_pointer.png), auto;
}

a div:hover,
button:hover,
.btn:hover,
.btn-floating:hover,
.material-icons:hover,
a:hover {
    cursor: url(./asset/cursor/cursor.png), pointer !important;
}

.js-tema {
    cursor: url(./asset/cursor/cursor.png), pointer !important;
}

.titulo {
    font-size: 100%;
    text-align: center;
    line-height: 2;
    font-weight: bold;
    font-family: cursive;
    color: #bf3185;
}

.notas {
    position: absolute;
}
</style>
<script>
var datos = (function(){
    var datos = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "js/data.json",
        'dataType': "json",
        'success': function(data){
            datos = data;
        }
    });
    return datos;
})();  

</script>
<div id="main-nav" class="text-center no_modo_standalone no_popup open">
		<ul class="container" role="menu">
		        <li class="li_m_cursos <?php if ($_GET['n']=='i'){echo 'active';}?> " id="list-inicial" >
					<a href="./index.php?n=i" title="Inicial" >
						INICIAL
					</a>
				</li>
				<li class="li_m_misalumnos <?php if ($_GET['n']=='p'){echo 'active';}?>" id="list-primaria" >
					<a  href="./index.php?n=p" title="Primaria" >
						PRIMARIA
					</a>
				</li>
				<li class="li_m_calificaciones <?php if ($_GET['n']=='s'){echo 'active';}?>" id="list-secundaria">
					<a  href="./index.php?n=s" title="Secundaria" >
						SECUNDARIA
					</a>
				</li>		
		</ul>
</div>
<div id="cuerpo"></div>
<div class="fixed-action-btn">
    <a class="btn-floating btn-small orange">
        <i class="requestfullscreen large material-icons">fullscreen</i><i class="exitfullscreen large material-icons"
            style="display: none">fullscreen_exit</i>
    </a>
</div>
<!--  Scripts-->
<script src="js/materialize.min.js"></script>
<?php $_GET['n']; ?>
<script type="text/javascript">
var nivel='<?=$_GET['n']?>';

 if(nivel=='i' ){
    var libros=datos.Inicial;
 }
 else if(nivel=='p'){
    var libros=datos.Primaria;
 }
 else if(nivel=='s'){
    var libros=datos.Secundaria;
 }
else{
    var libros=datos.Primaria;
    var nivel ='p';
 }

$('#cuerpo').load('libros.php',{ 
    data: libros,
    g:'todo',
    nivel:nivel
});
function grado(grado){
    $('#cuerpo').load('libros.php',{
        data: datos.Primaria,
        g:grado,
        nivel:nivel   
    });
}
function anio_inicial(grado){
    $('#cuerpo').load('libros.php',{
        data: datos.Inicial,
        g:grado,
        nivel:nivel 
    });
}
function anio_secundaria(grado){
    $('#cuerpo').load('libros.php',{
        data: datos.Secundaria,
        g:grado,
        nivel:nivel 
    });
}

$('#btn-home').click(function() {
    location.reload();
});
$('#btn-pizarra').click(function() {
    $('#cuerpo').load('pizarra.php');
});
$(document).ready(function(){
    $('.sidenav').sidenav();
    $('select').formSelect();
});
</script>
</body>
</html>
</div>
<audio id="click" src="asset/cursor/sound/click.mp3"></audio>
<script type="text/javascript">
$(document).ready(function(){
    $("html").mouseup(function(){
        $(this).css({
            "cursor": "url(../asset/cursor/cursor_pointer.png),auto"
        });
    });
    $("html").mousedown(function(){
        $(this).css({
            "cursor": "url(../asset/cursor/cursor.png),pointer !important"
        });
    });
});
$("html").click(function(){
    document.getElementById('click').play();
});
$("#portada").css("display", "none");
</script>
<script src="js/fullscreen.js"></script>