<script type="text/javascript">
function Page_18() {
    start_18();
    inicio();
    count = 3;
}
function Page_19() {
    start_19();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_18() {
    $("#ventana").load(ruta + '1-5-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_5_18()",
        titulo: "<center><h5><span>Observa</span> el calendario y <span>marca</span> la respuesta correcta.</h5></center>", 
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-5-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-5-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_19()",
        titulo: "<center><h5><span>Observa</span> el calendario y <span>marca</span> la respuesta correcta.</h5></center>", 
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-5-19",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>