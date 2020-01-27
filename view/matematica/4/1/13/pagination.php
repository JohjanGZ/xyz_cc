<script type="text/javascript">

function Page_20() {
   
    start_20();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_20() {
    $("#ventana").load(ruta + '4-1-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_20()",
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "4-1-20",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>