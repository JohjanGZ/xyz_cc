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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_3() {
    $("#ventana").load(ruta + '3-1-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_1_3()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los conjuntos y <span class='ftitulo'>arrastra</span> la representación correcta.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-1-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '3-1-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_4()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los conjuntos y <span class='ftitulo'>arrastra</span> la representación correcta.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-1-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>