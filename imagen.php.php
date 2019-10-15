<?php
  session_start();
  if( !(isset($_SESSION['login_user'])) && !($_SESSION['login_user']==true)){
    header('location: login.php');
        
  }  
echo "<div id='fullscreen' >";   
include('carga.php');
include('header.php');

if(isset($_SESSION['alumno'])){
$_SESSION['alumno'];
}
$_SESSION['main'];
$_SESSION['identificador'];

?>
<script type="text/javascript" src="fullscreen/release/jquery.fullscreen.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/blink/blink.min.css">
<style type="text/css">
.bg-fullscreen{

  background:#eee !important;
  overflow: auto !important;
}

</style>


  <div id="cuerpo"></div>
<div class="fixed-action-btn">
<a class="btn-floating btn-small orange">
<i class="requestfullscreen large material-icons">fullscreen</i><i class="exitfullscreen large material-icons" style="display: none">fullscreen_exit</i>
  </a>
</div>
  <!--  Scripts-->
<script src="js/materialize.min.js"></script>

<script type="text/javascript">
   $('#cuerpo').load('libros.php');

      $( document ).ready(function(){

        $('.sidenav').sidenav();
        $('select').formSelect();
      });
</script>


  </body>
</html>
              <script type='text/javascript'>

                function AddUnidad(){

                  $('#cuerpo').load('form_unidad.php')


                } 

                function BackHome() {
                 $('#cuerpo').load('libros.php');
                 $("#portada").css("display", "block"); 
                }


              </script>
</div>
      <script type="text/javascript">


        $(function() {
          // check native support
          $('#support').text($.fullscreen.isNativelySupported() ? 'supports' : 'doesn\'t support');

          // open in fullscreen
          $('#fullscreen .requestfullscreen').click(function(){
            $('#fullscreen').fullscreen();
            return false;
          });

          // exit fullscreen
          $('#fullscreen .exitfullscreen').click(function() {
            $.fullscreen.exit();
            return false;
          });

          // document's event
          $(document).bind('fscreenchange', function(e, state, elem) {
            // if we currently in fullscreen mode
            if ($.fullscreen.isFullScreen()) {
              $('#fullscreen .requestfullscreen').hide();
              $('#fullscreen .exitfullscreen').show();
            } else {
              $('#fullscreen .requestfullscreen').show();
              $('#fullscreen .exitfullscreen').hide();
            }

            $( "#fullscreen" ).addClass( "bg-fullscreen" );

            $('#state').text($.fullscreen.isFullScreen() ? '' : 'not');
          });
        });

      </script>