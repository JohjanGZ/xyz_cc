<script type="text/javascript">


function Page_29() {  
   start_29();
   inicio();
   count = 3;
}

function Page_30() {
   start_30();
   inicio();
   count = 3;
}
function Page_31() {  
   start_31();
   inicio();
   count = 3;
}

function Page_32() {
   start_32();
   inicio();
   count = 3;
}

function Page_33() {
   start_33();
   inicio();
   count = 3;
}
function Page_34() {  
   start_34();
   inicio();
   count = 3;
}

function Page_35() {
   start_35();
   inicio();
   count = 3;
}
function Page_36() {  
   start_36();
   inicio();
   count = 3;
}

function Page_37() {
   start_37();
   inicio();
   count = 3;
}


var cant = 9;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_29() {
    $("#ventana").load(ruta + '2-2-29/index.php', {
        next: "Page_30()",
        procesar: "result_tipo_2_2_29()",
        titulo: "<center><h5><span>Observa</span> el siguiente diagrama y <span>escribe</span> cúantos niños viajan en cada medio de transportedurante las vacaciones.</h5></center>",
        restaurar: "start_29()",
        dir: ruta,
        cod: "2-2-29",
        nota: cal
    });
    return false;
};
function start_30() {
    $("#ventana").load(ruta + '2-2-30/index.php', {
        next: "Page_31()",
        procesar: "result_tipo_2_2_30()",
        titulo: "<center><h5>El frutero ha representado sus ventas de la semana en un gráfico de barras.<span>Observe</span> y <span>responde</span>.</h5></center>",
        restaurar: "start_30()",
        dir: ruta,
        cod: "2-2-30",
        nota: cal
    });
    return false;
};
function start_31() {
    $("#ventana").load(ruta + '2-2-31/index.php', {
        next: "Page_32()",
        procesar: "result_tipo_2_2_31()",
        titulo: "<center><h5>El frutero ha representado sus ventas de la semana en un gráfico de barras.<span>Observe</span> y <span>responde</span>.</h5></center>",
        restaurar: "start_31()",
        dir: ruta,
        cod: "2-2-31",
        nota: cal
    });
    return false;
};
function start_32() {
    $("#ventana").load(ruta + '2-2-32/index.php', {
        next: "Page_33()",
        procesar: "result_tipo_2_2_32()",
        titulo: "<center><h5>Se preguntó a los niños de primaria  por su color favorito.<span>Observa</span> en el gráfico sus respuestas y <span>completa</span>.</h5></center>",
        restaurar: "start_32()",
        dir: ruta,
        cod: "2-2-32",
        nota: cal
    });
    return false;
};
function start_33() {
    $("#ventana").load(ruta + '2-2-33/index.php', {
        next: "Page_34()",
        procesar: "result_tipo_2_2_33()",
        titulo: "<center><h5>Se preguntó a los niños de primaria  por su color favorito.<span>Observa</span> en el gráfico sus respuestas y <span>completa</span>.</h5></center>",
        restaurar: "start_33()",
        dir: ruta,
        cod: "2-2-33",
        nota: cal
    });
    return false;
};


function start_34() {
    $("#ventana").load(ruta + '2-2-34/index.php', {
        next: "Page_35()",
        procesar: "result_tipo_2_2_34()",
        titulo: "<center><h5>La gráfica muestra la cantidad de personas que asistieron a una reunión familiar.</h5></center>",
        restaurar: "start_34()",
        dir: ruta,
        cod: "2-2-34",
        nota: cal
    });
    return false;
};
function start_35() {
    $("#ventana").load(ruta + '2-2-35/index.php', {
        next: "Page_36()",
        procesar: "result_tipo_2_2_35()",
        titulo: "<center><h5><span>Observa</span> el gráfico de barras y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_35()",
        dir: ruta,
        cod: "2-2-35",
        nota: cal
    });
    return false;
};
function start_36() {
    $("#ventana").load(ruta + '2-2-36/index.php', {
        next: "Page_37()",
        procesar: "result_tipo_2_2_36()",
        titulo: "<center><h5><span>Observa</span> el gráfico de barras y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_36()",
        dir: ruta,
        cod: "2-2-36",
        nota: cal
    });
    return false;
};
function start_37() {
    $("#ventana").load(ruta + '2-2-37/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_37()",
        titulo: "<center><h5><span>Observa</span> el gráfico de barras y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_37()",
        dir: ruta,
        cod: "2-2-37",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>