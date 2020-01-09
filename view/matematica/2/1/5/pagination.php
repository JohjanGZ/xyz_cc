<script type="text/javascript">


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
var cant = 11;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_12() {
    $("#ventana").load(ruta + '2-1-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_1_12()",
        titulo: "<center><h5><span>Lee</span> el enunciado y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-1-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-1-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_1_13()",
        titulo: "<center><h5><span>Lee</span> el enunciado y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-1-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-1-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_1_14()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>selecciona</span> en la tabla de datos cuántos animales hay según el número de patas que tienen.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-1-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '2-1-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_1_15()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>completa</span> la lista de datos.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-1-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '2-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_1_16()",
        titulo: "<center><h5><span>Marca</span> con un aspa (X) los cuadros teniendo en cuenta la cantidad de animales que registraste en la tabla de datos.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-1-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '2-1-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_1_17()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>responde</span>.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-1-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '2-1-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_1_18()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>completa</span> la tabla de datos.</h5></center>",
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
        titulo: "<center><h5><span>Observa</span> y <span>responde</span>.</h5></center>",
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
        titulo: "<center><h5>Anaís encontró en un cofre un grupo de fichas que tienen diseños distintos. <span>Completa</span> los dos gráficos de barras según su diseño o forma, colocando un aspa (X) en los cuadraditos correspondientes.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-1-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '2-1-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_2_1_21()",
        titulo: "<center><h5>Anaís encontró en un cofre un grupo de fichas que tienen diseños distintos. <span>Completa</span> los dos gráficos de barras según su diseño o forma, colocando un aspa (X) en los cuadraditos correspondientes.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-1-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '2-1-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_1_22()",
        titulo: "<center><h5>Gerardo encontró un grupo de cartas con diferentes figuras y diseños. <span>Completa</span> los dos diagramas de barras teniendo en cuenta el diseño de las cartas en uno de ellos y las figuras que estas contienen en el otro.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-1-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>