<script type="text/javascript">

function Page_12() {
    start_12();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_12() {
    $("#ventana").load(ruta + '4-4-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_12()",
        titulo: "<center><h5><span>Observa</span> los globos. Luego <span>selecciona</span> los números decimales equivalentes según corresponda.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "4-4-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>