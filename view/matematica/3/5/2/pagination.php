<script type="text/javascript">
function Page_2() {
    start_2();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_2() {
    $("#ventana").load(ruta + '3-5-2/index.php', {
        next: "respuesta()",
        procesar: "result_tipo_3_5_2()",
        titulo: "<center><h5><span>Indica</span> el  camino que empleó el perro para encontrar su alimento.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-5-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>