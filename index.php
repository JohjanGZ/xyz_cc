<?php
echo "<div id='fullscreen' >";   
include('carga.php');
include('header.php');
?>
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
var libros = (function() {
    var libros = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "js/data.json",
        'dataType': "json",
        'success': function(data) {
            libros = data;
        }
    });
    return libros;
})();
var returnedData = $.grep(libros, function(element) {
  return element.category === "cat1" && element.id === 3;
}, false);
console.log(returnedData);

</script>
<div id="cuerpo"></div>
<div class="fixed-action-btn">
    <a class="btn-floating btn-small orange">
        <i class="requestfullscreen large material-icons">fullscreen</i><i class="exitfullscreen large material-icons"
            style="display: none">fullscreen_exit</i>
    </a>
</div>
<!--  Scripts-->
<script src="js/materialize.min.js"></script>
<script type="text/javascript">
$('#notaciones').hide();
$(".notas").on("click", function() {
    var press = $(this).attr("class");
    if (press == "btn-floating amber notas on") {
        $('#notaciones').hide();
        $(this).removeClass("on");
        $(this).css("box-shadow",
            "0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2)"
        );
    } else {
        $('#notaciones').show();
        $(this).addClass("on");
        $(this).css("box-shadow",
            "inset rgba(0, 0, 0, 0.37) 2px 2px 3px 0px, 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2)"
        );
    }
    /*$(this).css("box-shadow","inset 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2)");
    $('#notaciones').load('../paint/paint.php');

    $(this).addClass("on");*/
});

$('#cuerpo').load('libros.php', {
    data: libros
});
$(document).ready(function() {
    $('.sidenav').sidenav();
    $('select').formSelect();
});
</script>
</body>

</html>
<script type='text/javascript'>
function AddUnidad() {
    $('#cuerpo').load('form_unidad.php')
}


</script>
</div>
<audio id="click" src="asset/cursor/sound/click.mp3"></audio>
<script type="text/javascript">
$(document).ready(function() {
    $("html").mouseup(function() {
        $(this).css({
            "cursor": "url(../asset/cursor/cursor_pointer.png),auto"
        })
    });

    $("html").mousedown(function() {
        $(this).css({
            "cursor": "url(../asset/cursor/cursor.png),pointer !important"
        })
    });
});
$("html").click(function() {
    document.getElementById('click').play();
});

$("#portada").css("display", "none");
$(function() {
    // check native support
    $('#support').text($.fullscreen.isNativelySupported() ? 'supports' : 'doesn\'t support');
    // open in fullscreen
    $('#fullscreen .requestfullscreen').click(function() {
        $('#fullscreen').fullscreen();
        return false;
    });
    // exit fullscreen
    $('#fullscreen .exitfullscreen').click(function() {
        $.fullscreen.exit();
        return false;
    });

    // document's ev{"adId":"00000001325f6931000000203296ac82"}ent
    $(document).bind('fscreenchange', function(e, state, elem) {
        // if we currently in fullscreen mode
        if ($.fullscreen.isFullScreen()) {
            $('#fullscreen .requestfullscreen').hide();
            $('#fullscreen .exitfullscreen').show();
        } else {
            $('#fullscreen .requestfullscreen').show();
            $('#fullscreen .exitfullscreen').hide();
        }
        $("#fullscreen").addClass("bg-fullscreen");
        $('#state').text($.fullscreen.isFullScreen() ? '' : 'not');
    });
});
</script>