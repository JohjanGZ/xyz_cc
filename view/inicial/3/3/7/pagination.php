<script type="text/javascript">
function Page_7() {
    start_7();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '3-3-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_7()",
        titulo: "<center><h5><span>Selecciona</span> donde los niños practican el compañerismo.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-3-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>