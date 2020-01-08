<script type="text/javascript">
function Page_31() {
    start_31();
    inicio();
    count = 3;
}
function Page_32() {
    start_32();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_31() {
    $("#ventana").load(ruta + '1-3-31/index.php', {
        next: "Page_32()",
        procesar: "result_tipo_1_3_31()",
        titulo: "<center><h5><span>Descubre</span>la regla de formación en las siguientes sucesiones y <span>selecciona</span> dentro de cada recuadro.</h5></center>",
        restaurar: "start_31()",
        dir: ruta,
        cod: "1-3-31",
        nota: cal
    });
    return false;
};
function start_32() {
    $("#ventana").load(ruta + '1-3-32/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_32()",
        titulo: "<center><h5><span>Descubre</span> la regla de formación y luego <span>completa</span> las siguientes sucesiones.</h5></center>",
        restaurar: "start_32()",
        dir: ruta,
        cod: "1-3-32",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>