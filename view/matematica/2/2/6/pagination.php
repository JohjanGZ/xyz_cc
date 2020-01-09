<script type="text/javascript">

function Page_20() {
   start_20();
   inicio();
   count = 3;
}

function Page_21() {
   start_21();
   inicio();
   count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_20() {
    $("#ventana").load(ruta + '2-2-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_2_2_20()",
        titulo: " <center><h5><span>Observa</span> los precios y <span>resuelve</span>.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-2-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '2-2-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_21()",
        titulo: " <center><h5><span>Realiza</span> las adiciones y <span>compara</span> los resultados.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-2-21",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>