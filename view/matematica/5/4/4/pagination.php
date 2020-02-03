<script type="text/javascript">

function Page_6() {
    start_6();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '4-4-6/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_4_4_6()",
        titulo: "<center><h5><span>Observa</span> y <span>selecciona</span> de la lista las fracciones que representan cada gráfico, también las que son equivalentes.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "4-4-6",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>