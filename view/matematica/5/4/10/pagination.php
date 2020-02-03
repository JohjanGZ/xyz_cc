<script type="text/javascript">

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_17() {
    $("#ventana").load(ruta + '4-4-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_17()",
        titulo: "<center><h5><span>Observa</span> y <span>arrastra</span> las pesas necesarias a los platillos, para que se equilibre la balanza.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-4-17",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>