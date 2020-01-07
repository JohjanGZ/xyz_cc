<script type="text/javascript">
function Page_20() {
    start_20();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_20() {
    $("#ventana").load(ruta + '1-1-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_20()",
        titulo: "<center><h5><span>Realiza</span> las sumas. Luego, en los espacios en blanco selecciona los números correspondientes de la de la lista según corresponda.</h5></center>",       
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-1-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>