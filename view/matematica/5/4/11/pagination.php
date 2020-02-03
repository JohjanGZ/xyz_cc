<script type="text/javascript">

function Page_18() {
    start_18();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_18() {
    $("#ventana").load(ruta + '4-4-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_18()",
        titulo: "<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> las figuras geométricas según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "4-4-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>