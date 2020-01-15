<script type="text/javascript">
function Page_11() {
    start_11();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '3-2-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_11()",
        titulo: "<center><h5><span>Selecciona</span> en la parte de abajo los accesorios que se usan verano.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-2-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>