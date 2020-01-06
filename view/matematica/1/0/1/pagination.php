<script type="text/javascript">

function Page_1() {
    start_1();
    inicio();
    count = 3;
}
function Page_2() {
    start_2();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_1() {
    $("#ventana").load(ruta + '1-0-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_0_1()",
        titulo: "<center><h5><span>Selecciona</span> las imágenes que tienen las rejas delante de los caballos.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "1-0-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '1-0-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_2()",
        titulo: "<center><h5><span>Selecciona</span> los niños que tienen las manos detrás</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "1-0-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>