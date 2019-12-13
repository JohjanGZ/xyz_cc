$(function(){
    // support
    $('#support').text($.fullscreen.isNativelySupported() ? 'supports' : 'doesn\'t support');
    // abrir  fullscreen
    $('#fullscreen .requestfullscreen').click(function(){
        $('#fullscreen').fullscreen();
        return false;
    });
    // exit 
    $('#fullscreen .exitfullscreen').click(function(){
        $.fullscreen.exit();
        return false;
    });
    
    $(document).bind('fscreenchange', function(e, state, elem){
        // si pantalla completa esta activada
        if ($.fullscreen.isFullScreen()){
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