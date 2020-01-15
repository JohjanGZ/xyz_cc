<script type="text/javascript">

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_3() {
    $("#ventana").load(ruta + '5-2-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_2_3()",
        titulo: "<center><h5><span>Une</span> con una línea al animal con alguna de sus caracteristicas.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "5-2-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>