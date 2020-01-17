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

var cant = 6;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-7-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_7_1()",
        titulo: "<center><h5><span>Cuenta</span> el material multibase y <span>completa</span> según el ejemplo.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-7-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-7-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_2_7_2()",
        titulo: "<center><h5><span>Cuenta</span> el material multibase y <span>completa</span> según el ejemplo.</h5></center>",
       restaurar: "start_2()",
        dir: ruta,
        cod: "2-7-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '2-7-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_2_7_3()",
        titulo: "<center><h5><span>Cuenta</span> el material multibase y <span>completa</span> según el ejemplo.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "2-7-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '2-7-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_7_4()",
       titulo: "<center><h5><span>Cuenta</span> el material multibase y <span>completa</span> según el ejemplo.</h5></center>",
       restaurar: "start_4()",
        dir: ruta,
        cod: "2-7-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-7-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_7_5()",
        titulo: "<center><h5><span>Cuenta</span> el material multibase y <span>completa</span> según el ejemplo.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-7-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-7-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_7_6()",
        titulo: "<center><h5><span>Observa</span> los recuadros y <span>selecciona</span> el número que corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-7-6",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>