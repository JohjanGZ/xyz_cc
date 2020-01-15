<script type="text/javascript">
function Page_2() {
    start_2();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_2() {
    $("#ventana").load(ruta + '3-3-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_2()",
        titulo: "<center><h5><span>Lee</span> y <span>arrastra</span> la expresión donde corresponda.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-3-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>