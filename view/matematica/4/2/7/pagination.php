<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}
function Page_11() {
    start_11();
    inicio();
    count = 3;
}


var cant = 2;
var cal = cant / cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_10() {
    $("#ventana").load(ruta + '4-2-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_4_2_10()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de adición. Luego, <span>completa</span> los números que faltan, para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-2-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '4-2-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_11()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de adición. Luego, <span>completa</span> los números que faltan, para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "4-2-11",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>