<script type="text/javascript">

function Page_4() {
    start_4();
    inicio();
    count = 3;
}
function Page_5() {
    start_5();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '4-4-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_4_4_4()",
        titulo: "<center><h5><span>Arrastra</span> las fracciones impropias a la recta numérica.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-4-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '4-4-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_5()",
        titulo: "<center><h5><span>Selecciona</span> de la lista las fracciones mixtas según corresponda.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "4-4-5",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>