<script type="text/javascript">


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
function Page_26() {  
   start_26();
   inicio();
   count = 3;
}

function Page_27() {
   start_27();
   inicio();
   count = 3;
}

function Page_28() {
   start_28();
   inicio();
   count = 3;
}

var cant = 5;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_24() {
    $("#ventana").load(ruta + '2-2-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_2_2_24()",
        titulo: "<center><h5><span>Seleccione</span> las figuras geométricas que tienen 3 vértices.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "2-2-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '2-2-25/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_2_2_25()",
        titulo: "<center><h5><span>Seleccione</span> las figuras geométricas que no tienen vértices.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-2-25",
        nota: cal
    });
    return false;
};
function start_26() {
    $("#ventana").load(ruta + '2-2-26/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_2_2_26()",
        titulo: "<center><h5> <span>Cuenta</span> los lados y vértices de cada figura, luego <span>completa</span>.</h5></center>",
        restaurar: "start_26()",
        dir: ruta,
        cod: "2-2-26",
        nota: cal
    });
    return false;
};
function start_27() {
    $("#ventana").load(ruta + '2-2-27/index.php', {
        next: "Page_28()",
        procesar: "result_tipo_2_2_27()",
        titulo: "<center><h5><span>Observa</span> la figura y <span>completa</span>.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "2-2-27",
        nota: cal
    });
    return false;
};
function start_28() {
    $("#ventana").load(ruta + '2-2-28/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_28()",
        titulo: "<center><h5><span>Identifica</span> a qué figura se hace referencia y <span>escribe</span> su nombre.</h5></center>",
        restaurar: "start_28()",
        dir: ruta,
        cod: "2-2-28",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>