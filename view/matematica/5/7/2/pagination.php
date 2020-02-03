<script type="text/javascript">

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
    start_16();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_10() {
    $("#ventana").load(ruta + '2-7-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_7_10()",
        titulo: "<center><h5>¿Cuál de estos objetos es un círculo? <span>Selecciona</span> la alternativa correcta.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-7-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '2-7-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_7_11()",
        titulo: "<center><h5>¿Cuál de estos objetos es una circunferencia? <span>Selecciona</span> la alternativa correcta.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-7-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '2-7-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_7_12()",
        titulo: "<center><h5><span>Observa</span>, y <span>selecciona</span> las alternativas pertenecientes a las figuras ovaladas.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-7-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-7-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_7_13()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta en cada caso.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-7-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-7-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_7_14()",
        titulo: "<center><h5><span>Reconoce</span> y <span>relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-7-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '2-7-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_7_15()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa correcta de las figuras que son círculos.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-7-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-7-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_7_16()",
        titulo: "<center><h5><span>Observa</span> y <span>cuenta</span> la cantidad de círculos y óvalos de la siguiente figura:</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-7-16",
        nota: cal
    });
    return false;
};



function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>