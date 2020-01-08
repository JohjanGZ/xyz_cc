<script type="text/javascript">

function Page_12() {
    start_12();
    inicio();
    count = 3;
}
function Page_13() {
    start_13();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 

function start_12() {
    $("#ventana").load(ruta + '1-5-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_5_12()",
        titulo: "<center><h5><span>Selecciona</span> los días en los que asistes al colegio.</h5></center>", 
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-5-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-5-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_13()",
        titulo: "<center><h5><span>Selecciona</span> la palabra 'antes' o 'después' según corresponda.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-5-13",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>