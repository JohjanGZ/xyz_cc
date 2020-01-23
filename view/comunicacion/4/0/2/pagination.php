<script type="text/javascript">
function Page_5() {
    start_5();
    inicio();
    count = 3;
}

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

function Page_9() {
    start_9();
    inicio();
    count = 3;
}

var cant = 5;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_5() {
    $("#ventana").load(ruta + '4-0-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_4_0_5()",
        titulo: "<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> la forma de comunicación que utiliza cada actividad.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "4-0-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '4-0-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_4_0_6()",
        titulo: "<center><h5><span>Relaciona</span> cada situación con el tipo de comunicación que corresponde.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "4-0-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '4-0-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_4_0_7()",
        titulo: "<center><h5><span>Identifica</span> y <span>selecciona</span> el emisor, receptor y mensaje de los siguientes casos.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-0-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '4-0-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_4_0_8()",
        titulo: "<center><h5><span>Identifica</span> y <span>selecciona</span> el emisor, receptor y mensaje de los siguientes casos.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-0-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '4-0-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_9()",
        titulo: "<center><h5><span>Identifica</span> y <span>selecciona</span> el emisor, receptor y mensaje de los siguientes casos.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "4-0-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>