<script type="text/javascript">
function Page_13() {
    start_13();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_13() {
    $("#ventana").load(ruta + '1-1-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_13()",
        titulo: "<center><h5> <span class='ftitulo'>Observa</span> cada animalito y completa.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-1-13",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>