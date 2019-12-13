$('#primaria').load('primaria.php',{ 
    data: datos.Primaria,
    g:'todo',
    nivel:'primaria'
});
$('#secundaria').load('secundaria.php',{
    data: datos.Secundaria,
    g:'todo',
    nivel:'secundaria'
});
$('#inicial').load('inicial.php',{
    data: datos.Inicial,
    g:'todo',
    nivel:'inicial'
});

function grado(grado, nivel){
    $('#primaria').load('primaria.php',{
        data: datos.Primaria,
        g:grado,
        nivel:nivel
    });
}
$('#btn-home').click(function(){
    $('#primaria').load('primaria.php',{ 
    data: libros,
    g:'todo'
    });
});
$('#btn-pizarra').click(function(){
    $('#cuerpo').load('pizarra.php');
});
$(document).ready(function(){
    $('.sidenav').sidenav();
    $('select').formSelect();
});