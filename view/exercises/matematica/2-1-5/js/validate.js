// Validar
var rpts = 0, otros = 0, element, element2;

$(".obj").draggable({
    
    start: function() {
     element=$(this).attr("data-value"); 
 }
});
$( ".boContainer" ).droppable({
  classes: {
    "ui-droppable-active": ".blue",
    "ui-droppable-hover": "ui-state-hover"
  },
  drop: function( event, ui ) {
    $(this).css("background-color", "rgb(19, 160, 241)");
  //  $( this ).target.append(event.target);
      element2=$(this).attr("data-value");
    if(element==element2){
      rpts++;
    }else{
      otros++;
    }
    element.removeClass("pieza");
  }
});
console.log(rpts, otros);
    // Formulario - Registrados