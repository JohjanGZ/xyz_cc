<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_10() {
    $("#ventana").load(ruta + '5-1-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_1_10()",
        titulo: " <center><h5><span>Selecciona</span> en forma ascendente los números para completar el collar.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "5-1-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>