<script type="text/javascript">
function Page_14() {
    start_14();
    inicio();
    count = 3;
}

function Page_15() {
    start_15();
    inicio();
    count = 3;
}

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_14() {
    $("#ventana").load(ruta + '6-0-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_6_0_14()",
        titulo: "<center><h5>Arrastra los términos de manera que completen la definición de la narración de un cuento.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "6-0-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '6-0-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_0_15()",
        titulo: "<center><h5>Relaciona las siguientes preguntas con la estructura de la narración de un cuento.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "6-0-15",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>