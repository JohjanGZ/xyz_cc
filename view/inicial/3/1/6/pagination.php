<script type="text/javascript">
function Page_6() {
    start_6();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '3-1-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_6()",
        titulo: "<center><h5><span>Observa</span> la cantidad y <span>arrastra</span> en el cuadro que corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-1-6",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>