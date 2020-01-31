<script type="text/javascript">

function Page_19() {
    start_19();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_19() {
    $("#ventana").load(ruta + '4-2-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_19()",
        titulo: "<center><h5><span>Lee</span> el enunciado e <span>interpreta</span> el gráfico de barras compuestas. Luego, <span>completa</span> la tabla con los valores según correspondan.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "4-2-19",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>