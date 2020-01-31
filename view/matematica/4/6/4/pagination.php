<script type="text/javascript">
function Page_8() {
    start_8();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_8() {
    $("#ventana").load(ruta + '4-6-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_6_8()",
        titulo: "<center><h5>La suma de los números en los cuadrados es igual al número del rectángulo.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-6-8",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>