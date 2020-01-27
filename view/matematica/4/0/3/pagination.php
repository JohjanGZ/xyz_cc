<script type="text/javascript">

function Page_7() {
    start_7();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_7() {
    $("#ventana").load(ruta + '4-0-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_7()",
        titulo: "<center><h5><span>Observa</span> los siguientes conjuntos. Luego <span>selecciona</span> de la lista los símbolos <span>⊂, ⊄, ∈ </span> o <span>∉</span> según corresponda.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-0-7",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>