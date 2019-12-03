<ul style="width:auto" id="slide-out" class="sidenav">


    <center>
        <li>
            <a href="../../../../../" class="tooltipped " data-position="right" data-tooltip="Ir a Inicio"><i
                    class="material-icons small  icon-modulo">view_module</i>
            </a>
        </li>
    </center>
    
    <ul id="menu">

        <li>
            <div class="tooltipped " data-position="top" data-tooltip="Unidades"><i
                    class="material-icons small icon-contenido">chrome_reader_mode</i></div>
            <ul class="box-s">

            </ul>
        </li>
    </ul>
    <center>
        <li id="tool" >
            <a id="" class="tooltipped " data-position="right" data-tooltip="Herramienta de dibujo"><i
                    class="material-icons small  icon-modulo">edit</i>
            </a>
            
        </li>

        <li>
            <a id="next" onclick ="<?=$next?>" class="tooltipped " data-position="right" data-tooltip="Siguiente"><i
                    class="material-icons small  icon-modulo">keyboard_arrow_right</i>
            </a>
        </li>
    </center>

    <li>
        <a href="../../../../../php/cerrar.php" class="tooltipped" data-position="right" data-tooltip="Cerrar Plataforma"><i
                class="material-icons small icon-contenido">power_settings_new</i>
        </a>
    </li>
</ul>
<div id="cargarPHP"></div>


<a href="#" data-target="slide-out" id="btn-flotante"
    class="amber btn-floating btn-menu pink-text sidenav-trigger text-accent-4 tooltipped" data-tooltip="Menu"
    data-position="right"><i class="small material-icons ">menu</i></a>

<script>
$(document).ready(function() {

    var data = JSON.parse(localStorage.getItem("data"));
    
    var color = localStorage.getItem("color");
    var curso = localStorage.getItem("curso");
    var grado = localStorage.getItem("grado");

    console.log("curso: "+curso+grado);
    var i = 0;

    var count = Object.keys(data).length;


    for (let index = 0; index < count; index++) {
        $('ul.box-s').append('<li class="menu-item-p unidad-p"><div>' + data[index].nombre +
            '</div><ul class="ul-right ul-item'+index+'"></ul></li>');
    }

    $('.unidad-p').each(function() {
        var count2 = Object.keys(data[i].temas).length;
        for (let index = 0; index < count2; index++) {
            // $(this).children('ul').append('<li class="menu-item-p"><div><a href="../../../../' + curso +'/'+grado+'/'+ i+'/' + (index + 1) + '">' + data[i].temas[index] + '</a></div></li>');

            $(this).children('ul').append('<a href="../../../../' + curso +'/'+grado+'/'+ i+'/' + (index + 1) + '"><li class="menu-item-p"><div>' + data[i].temas[index] + '</div></li></a>');
        }


        i++;
        if (i == 5) {
            $("#menu").menu({
                classes: {
                    "ui-menu": "green"
                }
            });
        }
    });

    $("#tool").click(function() {
        $("#cargarPHP").load("../../../../../php/opentool.php")
    });



    $(".ui-state-active").css("background-color", color + "!important");
    $(".sidenav").css("background-color", color + "!important");
    $(".ui-widget-content .ui-state-active").css("background-color", color + "!important");
    $(".ui-menu-item").css("background-color", color + "!important");
    $(".Portada").css("background-color", color + "!important");


    // Darle la posición del al Ul 
    var cont = 0;

    $("ul.ul-right").each(function(){
        var altura_ul = ($(this).children().length) * 70;
        var altura_ventana = $(window).height();
        var altura_total = altura_ul + (cont * 70);
        
        if((altura_ventana) < altura_total){

            var excedente = altura_total - altura_ventana;

            $("head").append("<style> ul.ul-right.ul-item"+cont+"{ top:-"+excedente+"px!important; } </style>");
            // console.log("khe");
            // $(this).addClass("salio");
        }
        cont++;

    });

});
</script>
