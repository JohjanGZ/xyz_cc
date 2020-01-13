<script type="text/javascript">
function Page_10() {
    start_10();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '3-0-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_10()",
        titulo: "<center><h5><span>Arrastra</span> la respuesta correcta.</h5></center> ",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-0-10",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>