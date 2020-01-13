<script type="text/javascript">
function Page_6() {
    start_6();
    inicio();
    count = 3;
}
function Page_7() {
    start_7();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '3-0-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_0_6()",
        titulo: "<center><h5><span>Selecciona</span> el dibujo que representa cada oración.</h5></center> ",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-0-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-0-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_7()",
        titulo: "<center><h5><span>Selecciona</span> los objetos que identifiques en las imagenes,</h5></center> ",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-0-7",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>