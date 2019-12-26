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


var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_10() {
    $("#ventana").load(ruta + '2-6-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_6_10()",
        titulo: "<center><h5><span>Halla</span> el perímetro de la puerta.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-6-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '2-6-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_2_6_11()",
        titulo: "<center><h5><span>Halla</span> el perímetro de la casa.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-6-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '2-6-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_6_12()",
        titulo: "<center><h5><span>Halla</span> el perímetro de las figuras, teniendo en cuenta que el lado de cada cuadradito mide 2 cm.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-6-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '2-6-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_6_13()",
        titulo: "<center><h5><span>Halla</span> el área de las figuras, teniendo en cuenta que el área de cada cuadradito es igual a 1 cm2.</center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-6-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '2-6-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_6_14()",
        titulo: "<center><h5><span>Convierte</span> a centímetros las siguientes medidas:</center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-6-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '2-6-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_6_15()",
        titulo: "<center><h5>¿Cuánto crees que miden los siguientes objetos? <span>Selecciona</span> en el recuadro correspondiente.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-6-15",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>