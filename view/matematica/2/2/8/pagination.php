<script type="text/javascript">

function Page_23() {
    start_23();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_23() {
    $("#ventana").load(ruta + '2-2-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_23()",
        titulo: "<center><h5><span>Realiza</span> las adiciones y <span>compara los resultados</span>. </h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-2-23",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>