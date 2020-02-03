<script type="text/javascript">
function Page_11() {
    start_11();
    inicio();
    count = 3;
}

function Page_12() {
    start_12();
    inicio();
    count = 3;
}

function Page_13() {
    start_13();
    inicio();
    count = 3;
}



var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '6-0-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_6_0_11()",
        titulo: "<center><h5><span>Selecciona</span>. ¿Cuáles de estos elementos forman parte de la comunicación entre las personas?</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "6-0-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '6-0-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_6_0_12()",
        titulo: "<center><h5><span>Relaciona</span> cada miembro de la comunicación con su definición.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "6-0-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '6-0-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_0_13()",
        titulo: "<center><h5><span>Completa</span> el esquema de la comunicación.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "6-0-13",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>