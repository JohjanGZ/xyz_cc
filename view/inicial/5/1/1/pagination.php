<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '5-1-1/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_1_1()",
        titulo: "<center><h5><span>Observa</span> las escenas de cada recuadro y <span>selecciona</span> la hora que corresponde a cada acción.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "5-1-1",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>