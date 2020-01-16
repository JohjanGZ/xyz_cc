<script type="text/javascript">
function Page_36() {
    start_36();
    inicio();
    count = 3;
}
function Page_37() {
    start_37();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_36() {
    $("#ventana").load(ruta + '3-2-36/index.php', {
        next: "Page_37()",
        procesar: "result_tipo_3_2_36()",
        titulo: "<center><h5><span>Señala</span> la respuesta correcta de las siguientes operaciones.</h5></center>",
        restaurar: "start_36()",
        dir: ruta,
        cod: "3-2-36",
        nota: cal
    });
    return false;
};
function start_37() {
    $("#ventana").load(ruta + '3-2-37/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_37()",
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_37()",
        dir: ruta,
        cod: "3-2-37",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>