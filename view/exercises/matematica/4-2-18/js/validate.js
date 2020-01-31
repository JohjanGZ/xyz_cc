$('.pieza').draggable({
    start: function() {
        element = $(this).attr('alt');
        elementid = $(this);
    }
});