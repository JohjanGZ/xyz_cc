<script type="text/javascript">
function Page_6() {
    start_6();
    inicio();
    count = 3;
}

function Page_7() {
    start_7();
    inicio();
    count = 3;
}

function Page_8() {
    start_8();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '6-0-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_6_0_6()",
        titulo: "<center><h5><span>Determina</span> de qué tipo son cada uno de los puntos resaltados en el siguiente texto y <span>arrastra</span>  el término correspondiente.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "6-0-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '6-0-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_6_0_7()",
        titulo: "<center><h5><span>Relaciona</span> cada miembro de la comunicación con su definición.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "6-0-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '6-0-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_0_8()",
        titulo: "<center><h5><span>Agrega</span> el punto y los dos puntos donde haga falta en cada caso.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "6-0-8",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>