<script type="text/javascript">

function Page_8() {
    start_8();
    inicio();
    count = 3;
}

function Page_9() {
    start_9();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_8() {
    $("#ventana").load(ruta + '3-4-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_4_8()",
        titulo: "<center><h5><span>Relaciona</span> las fracciones equivalentes siguiendo el ejemplo.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-4-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-4-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_9()",
        titulo: "<center><h5><span>Observa</span> los gráficos y luego <span>selecciona</span> la afirmación que sea verdadera.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-4-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>