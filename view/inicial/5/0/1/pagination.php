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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '5-0-6/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_5_0_6()",
        titulo: "<center><h5><span>Observa</span> los dibujos y <span>colorea</span> los cuadrados según el color de cada artículo pertenecientes a cada imagen.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "5-0-6",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '5-0-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_5_0_2()",
        titulo: "<center><h5><span>Observa</span> atentamente la imagen y <span>completa</span> los espacios.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "5-0-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '5-0-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_5_0_3()",
        titulo: "<center><h5><span>Selecciona</span> el conjunto en donde todos los animales tienen dos patas.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "5-0-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '5-0-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_5_0_4()",
        titulo: " <center><h5><span>Observa</span> los conjuntos y <span>arrastra</span> la representación correcta.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "5-0-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '5-0-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_5()",
        titulo: " <center><h5><span>Observa</span> los conjuntos y <span>arrastra</span> la representación correcta.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "5-0-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>