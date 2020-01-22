<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}


var cant = 1;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_1() {
    $("#ventana").load(ruta + '4-6-1/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_6_1()",
        titulo: "<center><h5><span>Lee</span> atentamente y luego ordena los números del 1 al 6 de acuerdo a loshechos durante una mesa redonda.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "4-6-1",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>