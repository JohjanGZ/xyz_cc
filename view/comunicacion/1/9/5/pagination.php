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
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_8() {
    $("#ventana").load(ruta + '1-9-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_1_9_8()",
        titulo: "<center><h5><span>Arrastra</span> los signos de exclamación e interrogación donde corresponden.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-9-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '1-9-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_9()",
        titulo: "<center><h5><span>Cuenta</span>. ¿Cuántos signos de interrogación y exclamación hay?</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-9-9",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>