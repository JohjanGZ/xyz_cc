<script type="text/javascript">
function Page_12() {
    start_12();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_12() {
    $("#ventana").load(ruta + '3-0-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_12()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center> ",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-0-12",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>