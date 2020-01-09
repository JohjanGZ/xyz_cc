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


var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_29() {
    $("#ventana").load(ruta + '2-2-29/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_2_2_29()",
        titulo: "<center><h5><span>Observa</span> el siguiente diagrama y <span>escribe</span> cuantos.</h5></center>",
        restaurar: "start_29()",
        dir: ruta,
        cod: "2-2-29",
        nota: cal
    });
    return false;
};
function start_30() {
    $("#ventana").load(ruta + '2-2-30/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_2_2_30()",
        titulo: "<center><h5><span>Seleccione</span> las figuras geométricas que no tienen vértices.</h5></center>",
        restaurar: "start_30()",
        dir: ruta,
        cod: "2-2-30",
        nota: cal
    });
    return false;
};
function start_31() {
    $("#ventana").load(ruta + '2-2-31/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_2_2_31()",
        titulo: "<center><h5> <span>Cuenta</span> los lados y vértices de cada figura, luego <span>completa</span>.</h5></center>",
        restaurar: "start_31()",
        dir: ruta,
        cod: "2-2-31",
        nota: cal
    });
    return false;
};
function start_32() {
    $("#ventana").load(ruta + '2-2-32/index.php', {
        next: "Page_28()",
        procesar: "result_tipo_2_2_32()",
        titulo: "<center><h5><span>Observa</span> la figura y <span>completa</span>.</h5></center>",
        restaurar: "start_32()",
        dir: ruta,
        cod: "2-2-32",
        nota: cal
    });
    return false;
};
function start_33() {
    $("#ventana").load(ruta + '2-2-33/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_33()",
        titulo: "<center><h5><span>Identifica</span> a qué figura se hace referencia y <span>escribe</span> su nombre.</h5></center>",
        restaurar: "start_33()",
        dir: ruta,
        cod: "2-2-33",
        nota: cal
    });
    return false;
};


function start_34() {
    $("#ventana").load(ruta + '2-2-34/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_2_2_34()",
        titulo: "<center><h5><span>Seleccione</span> las figuras geométricas que tienen 3 vértices.</h5></center>",
        restaurar: "start_34()",
        dir: ruta,
        cod: "2-2-34",
        nota: cal
    });
    return false;
};
function start_35() {
    $("#ventana").load(ruta + '2-2-35/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_2_2_35()",
        titulo: "<center><h5><span>Seleccione</span> las figuras geométricas que no tienen vértices.</h5></center>",
        restaurar: "start_35()",
        dir: ruta,
        cod: "2-2-35",
        nota: cal
    });
    return false;
};
function start_36() {
    $("#ventana").load(ruta + '2-2-36/index.php', {
        next: "Page_27()",
        procesar: "result_tipo_2_2_36()",
        titulo: "<center><h5> <span>Cuenta</span> los lados y vértices de cada figura, luego <span>completa</span>.</h5></center>",
        restaurar: "start_36()",
        dir: ruta,
        cod: "2-2-36",
        nota: cal
    });
    return false;
};
function start_37() {
    $("#ventana").load(ruta + '2-2-37/index.php', {
        next: "Page_28()",
        procesar: "result_tipo_2_2_37()",
        titulo: "<center><h5><span>Observa</span> la figura y <span>completa</span>.</h5></center>",
        restaurar: "start_37()",
        dir: ruta,
        cod: "2-2-37",
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