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

var cant = 22;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_18() {
    $("#ventana").load(ruta + '1-6-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_6_18()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta</span> el valor de las monedas y escribe el total de dinero.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-6-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-6-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_6_19()",
        titulo: "<center><h5><span class='ftitulo'>Suma</span> el valor de los monedas y billetes indicados.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-6-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '1-6-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_1_6_20()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> el valor de los billetes y monedas</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-6-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '1-6-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_6_21()",
        titulo: "<center><h5>Cuenta las monedas. Luego <span class='ftitulo'>selecciona</span> la cantidad mayor.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-6-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '1-6-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_1_6_22()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada cantidad de dinero con el objeto que se puede comprar.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-6-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '1-6-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_6_23()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el precio del objeto y si el dinero alcanza para pagarlo.<br> <span class='ftitulo'>Selecciona</span> los montos que sí alcanzan.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-6-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '1-6-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_6_24()",
        titulo: "<center><h5>Nos vamos de compras. ¿Cuánto dinero te queda? <span class='ftitulo'>Escribe</span> el vuelto.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-6-24",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>