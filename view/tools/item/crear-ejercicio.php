  
<?php
  session_start();
  if( !(isset($_SESSION['login_user'])) && !($_SESSION['login_user']==true)){
    header('location: ../../login.php');
  } 
 ?>
 <head>
    <title>Arca de Papel</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

  <div class="row">
    <form class="col s12">
        <label>Browser Select</label>
        <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2">button</a>
        </div>
        <div class="carousel-item red white-text" href="#one!">
          <h2>First Panel</h2>
          <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
          <h2>Second Panel</h2>
          <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
          <h2>Third Panel</h2>
          <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
          <h2>Fourth Panel</h2>
          <p class="white-text">This is your fourth panel</p>
        </div>
        </div>
    </form>
  </div>


  <script type="text/javascript">

     $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
     });

  </script>

