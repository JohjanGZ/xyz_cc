<script type="text/javascript">
function Page_16() {
    start_16();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_16() {
    $("#ventana").load(ruta + '1-6-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_16()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> cómo se leen los siguientes números:</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-6-16",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>