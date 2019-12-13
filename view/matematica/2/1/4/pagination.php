<script type="text/javascript">


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
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_22() {
    $("#ventana").load(ruta + '2-1-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_2_1_22()",
        titulo: "<center><h5>El esquema muestra cuanto cuestan 3 manzanas, un platano más una manzana y una manzana más una fresa.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-1-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '2-1-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_2_1_23()",
        titulo: "<center><h5>El frutero ha representado sus ventas de la semana en un gráfico de barras. <span>Observa</span> y <span>responde</span>.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-1-23",
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