<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}

function Page_2() {
    start_2();
    inicio();
    count = 3;
}

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-4-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_4_1()",
        titulo: "<center><h5><span>1.</span> Se compraron 6 cajas de chupetines para la fiesta. ¿Cuántos chupetines se compraron?</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-4-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '3-4-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_4_2()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-4-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '3-4-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_4_3()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-4-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '3-4-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_4_4()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-4-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-4-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_4_5()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-4-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '3-4-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_4_6()",
        titulo: "<center><h5><span>Arrastra</span> los números y <span>ubícalos</span> donde corresponden.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-4-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-4-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_4_7()",
        titulo: "<center><h5><span>Relaciona</span> las multiplicaciones con su respectivo resultado.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-4-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-4-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_4_8()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones. </h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-4-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-4-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_4_9()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones. </h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-4-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '3-4-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_10()",
        titulo: "<center><h5><span>Resuelve</span> las multiplicaciones. </h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-4-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>