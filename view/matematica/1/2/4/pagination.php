<script type="text/javascript">
function Page_16() {
    start_16();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_16() {
    $("#ventana").load(ruta + '1-2-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_2_16()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> cada figura geométrica y <span class='ftitulo'>completa</span> el cuadro..</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-2-16",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>