<script type="text/javascript">

function Page_4() {
    start_4();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '1-1-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_4()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los conjuntos y <span class='ftitulo'>arrastra</span> la representación correcta.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-1-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>