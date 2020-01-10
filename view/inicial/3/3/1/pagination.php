<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}
function Page_2() {
    start_2();
    inicio();
    count = 3;
}
function Page_3() {
    start_3();
    inicio();
    count = 3;
}
function Page_4() {
    start_4();
    inicio();
    count = 3;
}
function Page_5() {
    start_5();
    inicio();
    count = 3;
}
function Page_6() {
    start_6();
    inicio();
    count = 3;
}
var cant = 6;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '1-3-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_3_1()",
        titulo: "<center><h5><span>Realiza</span> la descomposición de los siguientes números en decenas y unidades.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "1-3-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '1-3-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_1_3_2()",
        titulo: "<center><h5><span>Completa</span> el cuadro</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "1-3-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '1-3-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_1_3_3()",
        titulo: "<center><h5><span>Selecciona</span> el avioncito que traslada a 42 pasajeros.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "1-3-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '1-3-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_1_3_4()",
        titulo: "<center><h5><span>Escribe</span> el número que ha sido representado en el ábaco.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "1-3-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '1-3-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_3_5()",
        titulo: "<center><h5><span>Realiza</span> la descomposición de los suiguientes números indicando de cada uno el valor en unidades. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-3-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '1-3-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_6()",
        titulo: "<center><h5><span>Realiza</span> la descomposición de los suiguientes números indicando de cada uno el valor en unidades. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-3-6",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>