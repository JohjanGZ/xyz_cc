<script type="text/javascript">

function Page_11() {
    start_11();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '4-4-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_11()",
        titulo: "<center><h5><span>Relaciona</span> las fracciones con el número decimal que le corresponde.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "4-4-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>