<script type="text/javascript">

function Page_7() {
    start_7();
    inicio();
    count = 3;
}
function Page_8() {
    start_8();
    inicio();
    count = 3;
}


var cant = 2;
var cal = cant / cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '4-2-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_4_2_7()",
        titulo: "<center><h5><span>Observa</span> las tablas. Luego, <span>selecciona</span> de la lista el valor de posición del dígito resaltado según corresponda.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-2-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '4-2-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_8()",
        titulo: "<center><h5><span>Observa</span> las tabla. Luego, <span>completa</span> según corresponda.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-2-8",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>