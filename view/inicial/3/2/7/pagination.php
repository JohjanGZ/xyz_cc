<script type="text/javascript">
function Page_7() {
    start_7();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '3-2-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_7()",
        titulo: "<center><h5><span>Selecciona</span> lo que nos da cada planta.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-2-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>