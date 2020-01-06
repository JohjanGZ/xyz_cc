<script type="text/javascript">

function Page_5() {
    start_5();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_5() {
    $("#ventana").load(ruta + '1-0-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_5()",
        titulo: "<center><h5><span>Selecciona</span> y <span>coloca</span> a los animales según la indicación.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-0-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>