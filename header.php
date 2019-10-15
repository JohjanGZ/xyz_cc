<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link rel="icon" type="image/png" href="img/favicon.ico" />
  <title>Arca de Papel</title>

  <!-- CSS  -->
  <link href="icon/icon.CSS?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/vendor/vendor.min.css">

  <link rel="stylesheet" type="text/css" href="css/datatables.min.css">

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/datatables.min.js"></script>    
  <link rel="stylesheet" type="text/css" href="css/index.css">
<style type="text/css">
  #off{
    transform: translate(80vw, 0vh);
    width: 55px;
  }
  #off:hover{
   color:purple;
  }
  #logo-header{
    transform: translate(10vw, 0vh);
  }
  #nav-mobile{
  display: block;
  }

	@media only screen and (min-width: 601px){
nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i{
    height: 84px;
    line-height: 64px;
    padding: 10px;
}
}
</style>
</head>
<body>

  <nav class="indigo accent-2" role="navigation">
    
        <ul>
          <li id="logo-header" ><div class="nav-wrapper container"><a id="logo-container" href="./"  class="brand-logo "><img class="logoArca" src="LOGO.png" ></a></li>
          <li title="Apagar" id="off" >
              <a href="php/cerrar.php" ><i  class="material-icons">power_settings_new</i> </a>
          </li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li>     
                  <div class="card">
                    <div class="card-image">
                    
                    <span class="card-title">Tu Nombre</span>
                    </div>
                    <div class="card-content">
                    <p></p>
                    </div>
                    <div class="card-action">
                    <a href="php/logout.php">Cerrar Sesión</a>
                    </div>
                </div>
            
        </li>
      </ul>
      <a href="#!" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons logoUser">sentiment_satisfied_alt
</i></a>
    </div>
  </nav>