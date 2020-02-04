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
    $("#ventana").load(ruta + '6-3-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_6_3_8()",
        titulo: "<center><h5><span>Lee</span> el siguiente artículo de divulgación científica y <span>arrastra</span> cada parte de la estructura a donde corresponda.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "6-3-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '6-3-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_3_9()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta. ¿Cuál es la característica principal de un texto argumentativo?</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "6-3-9",
        nota: cal
    });
    return false;
};




function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>