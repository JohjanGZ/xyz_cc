<script type="text/javascript">
function Page_8() {
    start_8();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_8() {
    $("#ventana").load(ruta + '3-1-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_8()",
        titulo: "<center><h5><span>Arrastra</<span> los números que faltan.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-1-8",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>