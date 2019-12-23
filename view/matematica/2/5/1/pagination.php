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
    count = 3;
    start_5();
    inicio();
}

function Page_6() {
    count = 3;
    start_6();
    inicio();
}

function Page_7() {
    count = 3;
    start_7();
    inicio();

}

function Page_8() {
    count = 3;
    start_8();
    inicio();
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
function Page_11() {
   start_11();
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
    $("#ventana").load(ruta + '2-5-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_5_1()",
        titulo: "<center><h5> <span>Observa</span> atentamente la siguiente imagen y luego <span>responde</span>.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-5-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-5-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_5_2()",
        titulo: "<center><h5><span>Observa</span> atentamente la siguiente imagen y luego <span>responde</span>.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-5-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-5-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_5_3()",
        titulo: "<center><h5><span>Relaciona</span> cada gráfico con la división que le corresponde.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-5-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-5-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_5_4()",
        titulo: " <center><h5><span>Observa</span> y <span>resuelve</span> la división.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-5-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-5-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_5_5()",
        titulo: "<center><h5><span>Arrastra</span> los números y <span>resuelve</span> las siguientes tablas de divisiones:</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-5-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-5-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_5_6()",
        titulo: "<center><h5><span>Observa</span> el ejemplo y <span>completa</span>.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-5-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-5-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_5_7()",
        titulo: "<center><h5><span>Reconoce</span> cuántas figuras hay en total y <span>realiza</span> las divisiones correspondientes.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-5-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-5-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_5_8()",
        titulo: "<center><h5><span>Observa</span> y <span>completa</span> siguiendo el ejemplo.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-5-8",
        nota: cal
    });
    return false;
};
/**SEPA**/
function start_9() {
    $("#ventana").load(ruta + '2-5-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_5_9()",
        titulo: "<center><h5><span>Completa</span> escribiendo el dividendo, el divisor y el cociente.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-5-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '2-5-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_5_10()",
        titulo: "<center><h5><span>Completa</span> la familia de operaciones.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-5-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '2-5-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_5_11()",
        titulo: "<center><h5><span>Completa</span> la tabla del 3.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-5-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>