<script type="text/javascript">

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

var cant = 12;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_3() {
    $("#ventana").load(ruta + '2-2-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_2_3()",
        titulo: "<center><h5><span>Observa</span> los cuadros y luego <span>completa</span>.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-2-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-2-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_2_4()",
        titulo: " <center><h5> <span>Observa</span> el ejemplo y <span>completa</span> el cuadro.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-2-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-2-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_2_5()",
        titulo: "<center><h5><span>Coloca</span> cómo  se leen los siguientes números y luego <span>realiza</span> su descomposición.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-2-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-2-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_2_6()",
        titulo: "<center><h5><span>Escribe</span> la descomposición de  los siguientes números en centenas, decenas y unidades.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-2-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-2-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_2_7()",
        titulo: "<center><h5><span>Completa</span> el cuadro.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-2-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-2-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_2_8()",
        titulo: "<center><h5><span>Observa</span> el ejemplo y <span>completa</span> el cuadro.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-2-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '2-2-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_2_9()",
        titulo: "<center><h5><span>Relaciona</span> el número correcto según corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-2-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-2-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_2_10()",
        titulo: "<center><h5><span>Relaciona</span> el número correcto según corresponda.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-2-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-2-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_2_11()",
        titulo: "<center><h5><span>Coloca</span> en el rectángulo, el número que corresponde.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-2-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-2-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_2_12()",
        titulo: "<center><h5><span>Coloca</span> en el rectángulo, el número que corresponde.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-2-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-2-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_2_13()",
        titulo: "<center><h5><span>Coloca</span> cómo se leen los siguientes números.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-2-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-2-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_14()",
        titulo: "<center><h5><span>Coloca</span> cómo se leen los siguientes números.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-2-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>