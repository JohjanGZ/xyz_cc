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
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_10() {
    $("#ventana").load(ruta + '2-6-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_6_10()",
        titulo: "<center><h5><span>Ordena</span> estos elementos de menor a mayor peso, escrbiendo en los recuadros desde el número 1 (para el menor) hasta el 5 (para el mayor).</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-6-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '2-6-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_6_11()",
        titulo: "<center><h5><span>Ordena</span> estos elementos de menor a mayor peso, escrbiendo en los recuadros desde el número 1 (para el menor) hasta el 5 (para el mayor).</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-6-11",
        nota: cal
    });
    return false;
};



function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>