<script type="text/javascript">


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

function Page_18() {
    start_18();
    inicio();
    count = 3;
}

function Page_19() {  
   start_19();
   inicio();
   count = 3;
}
function Page_20() {  
   start_20();
   inicio();
   count = 3;
}


var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_15() {
    $("#ventana").load(ruta + '2-4-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_4_15()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>coloca</span> un aspa (X)  por cada animal que encuentres.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-4-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '2-4-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_4_16()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>responde</span>.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-4-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '2-4-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_4_17()",
        titulo: "<center><h5><span>Observa</span> el gráfico de barras horizontales que muestra la asistencia  de mayo a ciertos supermercados y <span>contesta</span>.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,  
        cod: "2-4-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '2-4-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_4_18()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>completa</span> la tabla de datos.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-4-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '2-4-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_4_19()",
        titulo: "<center><h5> El gráfico muestra las cantidades, tipos y tallas de las prendas que se vendieron en una tienda. <span>Completa</span> la tabla y luego <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-4-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '2-4-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_4_20()",
        titulo: "<center><h5>La gráfica muestra la cantidad de personas que asistieron a una reunión familiar.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-4-20",
        nota: cal
    });
    return false;
};



function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>