<script type="text/javascript">


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

function Page_17() {
   start_17();
   inicio();
   count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_13() {
    $("#ventana").load(ruta + '4-1-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_4_1_13()",
        titulo: "<center><h5><span>Escribe</span> cuántas figuras hay de cada forma geométrica.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-1-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '4-1-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_4_1_14()",
        titulo: "<center><h5><span>Selecciona</span> las figuras geométricas que tienen los lados rectos.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-1-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '4-1-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_4_1_15()",
        titulo: "<center><h5><span>Selecciona</span> las figuras geométricas que tienen 3 vértices.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-1-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '4-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_4_1_16()",
        titulo: "<center><h5><span>Selecciona</span> las figuras geométricas que no tienen vértices.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-1-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '4-1-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_17()",
        titulo: "<center><h5><span>Relaciona</span> cada imagen con su respectivo nombre.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-1-17",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>