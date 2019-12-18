<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '3-2-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_2_11()",
        titulo: "<center><h5><span>Escribe</span> qué propiedad de la adición se aplicó en cada caso.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-2-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-2-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_2_12()",
        titulo: "<center><h5><span>Completa</span> el esquema y <span>aplica</span> la propiedad conmutativa de la adición</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-2-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-2-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_2_13()",
        titulo: "<center><h5><span>Completa</span> el esquema y <span>aplica</span> la propiedad conmutativa de la adición</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-2-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '3-2-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_2_14()",
        titulo: "<center><h5><span class='ftitulo'>Lee, escribe</span> los datos y <span class='ftitulo'>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-2-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-2-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_2_15()",
        titulo: "<center><h5><span class='ftitulo'>Lee, escribe</span> los datos y <span class='ftitulo'>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-2-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-2-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_16()",
        titulo: "<center><h5><span class='ftitulo'>Lee, escribe</span> los datos y <span class='ftitulo'>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-2-16",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>