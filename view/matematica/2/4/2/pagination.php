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


var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_10() {
    $("#ventana").load(ruta + '2-4-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_4_10()",
        titulo: "<center><h5><span>Clasifica</span> las líneas y <span>escribe</span> un aspa (X) en el cuadro correspondiente.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-4-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '2-4-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_4_11()",
        titulo: "<center><h5><span>Clasifica</span> los siguientes elementos según el grupo al que pertenecen:</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-4-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '2-4-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_4_12()",
        titulo: "<center><h5><span>Cuenta</span> los lados y vértices de cada figura, luego <span>completa</span>.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-4-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-4-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_4_13()",
        titulo: "<center><h5><span>Observa</span> la figura y <span>completa</span>.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-4-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-4-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_4_14()",
        titulo: "<center><h5>Identifica a qué figura se hace referencia  y escribe su nombre.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-4-14",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>