<style type="text/css">
.pizarra{
    min-height:83vh;
    min-width:75vw;
}
.contenedor-libros{
    max-width:100%;
    width: 100%;
}
#cuadriculado{
    background-size:50px 50px;
    background-image:linear-gradient(#78baff73 1px, rgba(200, 0, 0, 0) 1px, rgba(187, 224, 255, 0)), linear-gradient(90deg, #78baff73 1px, rgba(200, 0, 0, 0) 1px, rgba(200, 0, 0, 0)) !important;
}
#linea{
    background-size: 100% 3.2em;
    background-image: -webkit-linear-gradient(0deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px), -webkit-linear-gradient(#eee .05em, transparent .05em);
    background-image: -moz-linear-gradient(0deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px), -moz-linear-gradient(#eee .05em, transparent .05em);
    background-image: linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px), linear-gradient(#eee .05em, transparent .05em);
    -pie-background: linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px) 0 0 / 100% 1.2em, linear-gradient(#eee .05em, transparent .05em) 0 0 / 100% 1.2em #fff;
}
.tabs .indicator {
    background-color: transparent;
}
.tabs .tab a{
    color: #536dfe;
}
.tabs li {
    width: 165px;
}
</style>
<!--<script type="text/javascript" src="js/data.js"></script>-->

        <div id="fullscreen" class="section no-pad-bot" id="index-banner">
            <div class="container contenedor-libros">
            
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s3"><a href="#blanco">Blanco</a></li>
                    <li class="tab col s3"><a  href="#linea">Rayado</a></li>
                    <li class="tab col s3"><a  href="#cuadriculado">Cuadriculado</a></li>
                </ul>
                    <div id="blanco" class=" pizarra col s12 z-depth-1"></div>
                    <div id="linea" class="pizarra col s12 z-depth-1"></div>
                    <div id="cuadriculado" class=" pizarra col s12 z-depth-1"></div>
            </div>
            <script>
                $(document).ready(function(){
                    $('.tabs').tabs();
                });                                
            </script>
        </div>
                                