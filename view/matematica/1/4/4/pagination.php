<script type="text/javascript">


function Page_19() {
    start_19();
    inicio();
    count = 3;
}
function Page_20() {
    start_20();
    inicio();
    count = 3;
}


var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_19() {
    $("#ventana").load(ruta + '1-4-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_4_19()",
        titulo: "<center><h5><span>Observa</<span> y <span>cuenta</span> las figuras de cada recuadro. Luego, <span>escribe</span> el triple y el total.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-4-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '1-4-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_4_20()",
        titulo: "<center><h5><span>Observa</<span> y <span>cuenta</span> las figuras de cada recuadro. Luego, <span>escribe</span> el triple y el total.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-4-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>