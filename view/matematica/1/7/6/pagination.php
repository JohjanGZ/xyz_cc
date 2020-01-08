<script type="text/javascript">

function Page_8() {
    start_8();
    inicio();
    count = 3;
}
function Page_9() {
    start_9();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_8() {
    $("#ventana").load(ruta + '1-7-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_1_7_8()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los espacios en blanco. Alfredo va al campo para atrapar mariposas y colibrís</h5></center>",  
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-7-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '1-7-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_7_9()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los espacios en blanco. Sofia va a el estaque en donde hay truchas y suches. Ella pretende pescar a uno de estos peces para la cena.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-7-9",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>