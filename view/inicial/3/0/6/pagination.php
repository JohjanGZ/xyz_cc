<script type="text/javascript">
function Page_8() {
    start_8();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_8() {
    $("#ventana").load(ruta + '3-0-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_8()",
        titulo: "<center><h5><span>Selecciona</span> el dibujo que representa cada oración.</h5></center> ",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-0-8",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>