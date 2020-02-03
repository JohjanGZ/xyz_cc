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
    $("#ventana").load(ruta + '4-1-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_4()",
        titulo: "<center><h5><span>Completa</span> la tabla <span>seleccionando</span> de la lista los números, su descomposición o lectura según corresponda. </h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-1-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>