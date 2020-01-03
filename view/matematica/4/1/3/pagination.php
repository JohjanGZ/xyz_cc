<script type="text/javascript">


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
function Page_21() {  
   start_21();
   inicio();
   count = 3;
}


var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_18() {
    $("#ventana").load(ruta + '2-1-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_1_18()",
        titulo: "<center><h5>El frutero ha representado sus ventas de la semana en un gráfico de barras. <span>Observa</span> y <span>responde</span>.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-1-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '2-1-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_1_19()",
        titulo: "<center><h5>El frutero ha representado sus ventas de la semana en un gráfico de barras. <span>Observa</span> y <span>responde</span>.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-1-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '2-1-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_2_1_20()",
        titulo: "<center><h5>Se preguntó a los niños de primaria por su color favorito. <span>Observa</span> en el gráfico sus respuestas y <span>completa</span>.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-1-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '2-1-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_1_21()",
        titulo: "<center><h5>Se preguntó a los niños de primaria por su color favorito. <span>Observa</span> en el gráfico sus respuestas y <span>completa</span>.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-1-21",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>