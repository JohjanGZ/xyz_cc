<script type="text/javascript">
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
function Page_7() {
    start_7();
    inicio();
    count = 3;
}
function Page_8() {
    start_8();
    inicio();
    count = 3;
}
function Page_9() {
    start_9();
    inicio();
    count = 3;
}
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

var cant = 7;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_5() {
    $("#ventana").load(ruta + '1-5-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_5_5()",
        titulo: "<center><h5><span>Selecciona</span> el trencito que cuesta 37 soles.</span></h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-5-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '1-5-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_5_6()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta en cada año.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-5-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '1-5-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_1_5_7()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta que cuesta 43 soles.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-5-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '1-5-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_1_5_8()",
        titulo: "<center><h5><span>Relaciona</span> cada cantidad de dinero con el objeto que se puede comprar.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-5-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '1-5-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_5_9()",
        titulo: "<center><h5><span>Observa</span> el precio del objeto y si el dinero alcanza para pagarlo. <span>Selecciona</span> los montos que sí alcanzan.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-5-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '1-5-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_5_10()",
        titulo: "<center><h5>Nos vamos de compras. ¿Cuánto dinero te queda?<span>Selecciona</span> el vuelto.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-5-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '1-5-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_11()",
        titulo: "<center><h5>Nos vamos de compras. ¿Cuánto dinero te queda?<span>Selecciona</span> el vuelto.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-5-11",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>