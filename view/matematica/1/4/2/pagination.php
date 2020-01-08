<script type="text/javascript">

function Page_4() {
    start_4();
    inicio();
    count = 3;
}
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
function Page_10() {
    start_10();
    inicio();
    count = 3;
}
var cant = 7;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_4() {
    $("#ventana").load(ruta + '1-4-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_1_4_4()",
        titulo: "<center><h5><span>Relaciona</span> las cantidades con el doble de las mismas.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-4-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '1-4-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_4_5()",
        titulo: "<center><h5><span>Completa</span> la tabla.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-4-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '1-4-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_4_6()",
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-4-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '1-4-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_4_7()",
        titulo: "<center><h5><span>Selecciona</span> la taza cuyo precio es el doble de 12.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-4-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '1-4-8/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_4_8()",
        titulo: "<center><h5><span>Selecciona</span> el pantalón cuyo precio es el doble de 25.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-4-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '1-4-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_4_9()",
        titulo: "<center><h5><span>Selecciona</span> el número que es el doble de  la figura que está en la parte superior.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-4-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '1-4-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_4_10()",
        titulo: "<center><h5><span>Relaciona</span> cada número con su doble.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-4-10",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>