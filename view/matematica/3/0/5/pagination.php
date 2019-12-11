<script type="text/javascript">
function Page_21() {
    start_21();
    inicio();
    count = 3;
}

function Page_22() {
    start_22();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_21() {
    $("#ventana").load(ruta + '3-0-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_0_21()",
        titulo: "<center><h5> <span class='ftitulo'>Indica</span> el camino que el gato empleó para llegar hasta su alimento.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-0-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '3-0-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_22()",
        titulo: "<center><h5> <span class='ftitulo'>Indica</span> el camino que empleó el perro para encontrar su alimento.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-0-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>