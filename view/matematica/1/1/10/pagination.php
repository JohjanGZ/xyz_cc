<script type="text/javascript">
function Page_19() {
    start_19();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_19() {
    $("#ventana").load(ruta + '1-1-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_19()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes adiciones, luego selecciona de la lista la respuesta correspondiente.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-1-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>