<script type="text/javascript">
function Page_23() {
    start_23();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_23() {
    $("#ventana").load(ruta + '1-6-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_23()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el gráfico de barras y <span>arrastra</span> el número de la cantidad de elementos que ubiques.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-6-23",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>