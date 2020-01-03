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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-1-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_1_1()",
        titulo: "<center><h5><span>Observa</span> los cuadros y luego <span>completa</span>.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-1-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-1-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_1_2()",
        titulo: "<center><h5><span>Relaciona</span> el número correcto según corresponda.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-1-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-1-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_1_3()",
        titulo: "<center><h5><span>Completa</span> el cuadro.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-1-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-1-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_1_4()",
        titulo: " <center><h5> <span>Coloca</span>, en el rectángulo, el número que corresponde.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-1-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-1-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_1_5()",
        titulo: "<center><h5><span>Coloca</span> en la línea cómo se leen los siguientes números:</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-1-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-1-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_1_6()",
        titulo: "<center><h5> <span>Coloca</span> cómo se leen los siguientes números y luego <span>realiza</span> su descomposición:</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-1-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '2-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_1_7()",
        titulo: "<center><h5><span>Observa</span> el ejemplo y <span>completa</span> el cuadro.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-1-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_1_8()",
        titulo: "<center><h5><span>Coloca</span> el número antecesor de los siguientes números:</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-1-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '2-1-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_1_9()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes adiciones:</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-1-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-1-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_1_10()",
        titulo: "<center><h5><span>Completa</span> cada relación.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-1-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-1-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_1_11()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>resuelve</span> el problema.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-1-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '2-1-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_1_12()",
        titulo: " <center><h5><span>Observa</span> los precios y <span>resuelve</span>.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-1-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>