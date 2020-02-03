<script type="text/javascript">

function Page_9() {
    start_9();
    inicio();
    count = 3;
}

function Page_10() {
    start_10();
    inicio();
    count = 3;
}

function Page_11() {
    start_11();
    inicio();
    count = 3;
}



var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_9() {
    $("#ventana").load(ruta + '6-0-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_6_0_9()",
        titulo: "<center><h5><span>Lee</span> el siguiente cuento de terror y <span>arrastra</span> cada parte de la estructura a donde corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "6-0-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '6-0-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_0_10()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta. ¿Cuál es la característica principal de un cuento de terror?</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "6-0-10",
        nota: cal
    });
    return false;
};




function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>