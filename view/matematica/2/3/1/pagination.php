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

function Page_16() {
    count = 3;
    start_16();
    inicio();
}

function Page_17() {
    count = 3;
    start_17();
    inicio();

}

function Page_18() {
    count = 3;
    start_18();
    inicio();
}

function Page_19() {
   start_19();
   inicio();
   count = 3;
}

var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_3_1()",
        titulo: "<center><h5>¿<span>Cuantos</span> elementos hay?<span>completa</span> los cuadros.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-3-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_3_2()",
        titulo: "<center><h5>¿<span>Cuantos</span> elementos hay?<span>completa</span> los cuadros.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-3-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-3-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_3_3()",
        titulo: "<center><h5><span>Completa</span> la tabla del 2.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-3-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-3-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_3_4()",
        titulo: " <center><h5> <span>Escribe</span> las siguientes sumas en forma de multiplicación.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-3-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-3-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_5()",
        titulo: "<center><h5> <span>Observa</span> los dibujos y<span>completa</span> el cuadro.</h5></center>. ",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-3-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>