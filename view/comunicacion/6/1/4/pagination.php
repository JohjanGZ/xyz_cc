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
    $("#ventana").load(ruta + '6-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_6_1_8()",
        titulo: "<center><h5><span>Identifica</span> las partes del siguiente mapa conceptual.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "6-1-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '6-1-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_1_9()",
        titulo: "<center><h5><span>Marca</span> si son verdaderas (V) o falsas (F) las siguientes afirmaciones.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "6-1-9",
        nota: cal
    });
    return false;
};




function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>