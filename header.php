<?php include('head.php'); ?>
<title>Arca de Papel</title>

<style type="text/css">
#indice .units ul li a .title {
    font-size: 14px !important;

}

.btn-digitales {
    margin: 5px auto;
    padding: 8px 35px;
}

.btn-digitales:hover {
    background-color: #ffc107 !important;
}

#cuerpo {
    padding-top: 85px;
}

#off {
    transform: translate(80vw, 0vh);
    width: 55px;
}

#off:hover {
    color: purple;
}

#logo-header {
    transform: translate(10vw, 0vh);
}

#nav-mobile {
    display: block;
}

.notas {
    transform: translate(95vw, 90px);
    z-index: 9999;
    position: fixed !important;
}

.btn-back {
    position: fixed;
}

@media only screen and (min-width: 601px) {

    nav,
    nav .nav-wrapper i,
    nav a.sidenav-trigger,
    nav a.sidenav-trigger i {
        height: 84px;
        line-height: 64px;
        padding: 10px;
        position: fixed;
        z-index: 55;
    }
}
.fixed-action-btn li{
width: 40px;

}
#btn-tool{
    position: fixed; 
    
    transform: translate(-45px, -92vh);
}
.btn-floating i {
    font-weight: 600;
}
@media only screen and ( max-height: 601px){
    #btn-tool{

    transform: translate(-45px, -86vh);
}
}

</style>
</head>

<body>
<div id="insert-php"></div>
    <nav class="indigo accent-2" role="navigation">

        <ul>
            <li id="logo-header">
                <div class="nav-wrapper container"><a id="logo-container" href="./" class="brand-logo "><img
                            class="logoArca" src="LOGO.png"></a>
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
 
            </ul>
          </div>
        </ul>

    </nav>

    <!--<a class="btn-floating amber notas"><i class="material-icons">create</i></a>-->

    <div id="notaciones">
        <?php include('paint/paint.php');?>
    </div>
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