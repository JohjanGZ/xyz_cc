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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '4-0-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_4_0_1()",
        titulo: "<center><h5><span>Observa</span> los siguientes elementos y <span>clasifícalos</span> en conjuntos arrastrándolos hacia los cuadros inferiores según sus características.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "4-0-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '4-0-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_4_0_2()",
        titulo: "<center><h5><span>Agrupa</span> los elementos utilizando el diagrama de Venn. <span>Usa</span> el método de arrastre.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "4-0-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '4-0-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_4_0_3()",
        titulo: "<center><h5><span>Observa</span> los conjuntos y <span>completa</span> los recuadros según corresponda.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "4-0-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '4-0-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_4_0_4()",
        titulo: " <center><h5>Del conjunto anterior, <span>selecciona</span> verdadero (V) o falso (F) según corresponda.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-0-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '4-0-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_4_0_5()",
        titulo: "<center><h5><span>Observa</span> los siguientes conjuntos y <span>selecciona</span> en los recuadros los símbolos ⊂ (inclusión), ⊄ (no inclusión) o = (igualdad) según corresponda.</h5></center>",
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
        titulo: "<center><h5><span>Observa</span> el diagrama y <span>coloca</span> verdadero (V) o falso (F) según corresponda.</h5></center>",
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
        titulo: "<center><h5><span>Determina</span> si cada conjunto es finito, infinito, unitario o vacío.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-0-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '4-0-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_8()",
        titulo: "<center><h5><span>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-0-8",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>