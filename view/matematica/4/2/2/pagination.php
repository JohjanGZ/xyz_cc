<script type="text/javascript">

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

function Page_4() {
    start_4();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_3() {
    $("#ventana").load(ruta + '4-2-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_4_2_3()",
        titulo: "<center><h5><span>Observa</span> la tabla. Luego, <span>completa</span> según corresponda.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "4-2-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '4-2-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_4()",
        titulo: "<center><h5><span>Observa</span> las tablas. Luego, <span>selecciona</span> de la lista el valor de posición del dígito encerrado.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-2-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>