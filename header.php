<?php include('head.php'); ?>
  <title>Arca de Papel</title>
 
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