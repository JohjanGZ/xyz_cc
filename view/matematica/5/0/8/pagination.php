<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 10do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_10() {
    $("#ventana").load(ruta + '5-0-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_10()",
        titulo: "<center><h5><span>Observa</span> el diagrama de Venn y <span>resalta</span> la operación que piden.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "5-0-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>