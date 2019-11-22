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
</style>
</head>

<body>

    <nav class="indigo accent-2" role="navigation">

        <ul>
            <li id="logo-header">
                <div class="nav-wrapper container"><a id="logo-container" href="./" class="brand-logo "><img
                            class="logoArca" src="LOGO.png"></a>
            </li>
            <li title="Apagar" id="off">
                <a href="php/cerrar.php"><i class="material-icons">power_settings_new</i> </a>
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
        <a href="#!" data-target="nav-mobile" class="sidenav-trigger">
            <i class="material-icons logoUser">sentiment_satisfied_alt</i>
        </a>
        </div>
    </nav>
    <a class="btn-floating amber notas"><i class="material-icons">create</i></a>

    <div id="notaciones">
        <?php include('../paint/paint.php');?>
    </div>