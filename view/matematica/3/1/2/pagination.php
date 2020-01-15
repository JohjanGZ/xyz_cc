<script type="text/javascript">
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
var cant = 8;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_2() {
    $("#ventana").load(ruta + '3-1-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_1_2()",
        titulo: "<center><h5><span>Arrastra</span> los números en la pirámide aditiva según corresponda.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-1-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '3-1-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_1_3()",
        titulo: "<center><h5><span>Arrastra</span> los números en la pirámide aditiva según corresponda.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-1-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '3-1-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_1_4()",
        titulo: "<center><h5><span>Selecciona</span> qué propiedad de la adición se aplicó en cada caso.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-1-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-1-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_1_5()",
        titulo: "<center><h5><span>Completa</span> el esquema y <span>aplica</span> la propiedad conmutativa de la adición.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-1-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '3-1-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_1_6()",
        titulo: "<center><h5><span>Completa</span> el esquema y <span>aplica</span> la propiedad conmutativa de la adición.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-1-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_1_7()",
        titulo: "<center><h5><span>Clasifica</span> cada ejercicio según la propiedad correspondiente.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-1-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '3-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_1_8()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones y <span>aplica</span> la propiedad asociativa.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-1-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-1-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_9()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones y <span>aplica</span> la propiedad asociativa.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-1-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>