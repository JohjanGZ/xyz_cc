<script type="text/javascript">


function Page_21() {
    start_21();
    inicio();
    count = 3;
}
function Page_22() {
    start_22();
    inicio();
    count = 3;
}
function Page_23() {
    start_23();
    inicio();
    count = 3;
}
function Page_24() {
    start_24();
    inicio();
    count = 3;
}
function Page_25() {
    start_25();
    inicio();
    count = 3;  
}



var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_21() {
    $("#ventana").load(ruta + '2-5-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_2_5_21()",
        titulo: "<center><h5><span>Resuelve</span>.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-5-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '2-5-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_2_5_22()",
        titulo: "<center><h5><span>Resuelve</span>.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-5-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '2-5-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_2_5_23()",
        titulo: "<center><h5><span>Completa</span> las sucesiones numéricas. <span>Sumando</span> 3 para el perro y 10 para la abeja. </h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-5-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '2-5-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_2_5_24()",
        titulo: "<center><h5><span>Halla</span> el número que falta para completar la sucesión.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "2-5-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '2-5-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_5_25()",
        titulo: "<center><span>Resuelve</span>.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-5-25",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>