<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_16() {
    $("#ventana").load(ruta + '3-7-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_7_16()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> las cantidades con el doble de las mismas. </h5></center>", 
        
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-7-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '3-7-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_7_17()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> la tabla.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-7-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '3-7-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_7_18()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-7-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '3-7-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_7_19()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la taza cuyo precio es el doble de 12. </h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-7-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '3-7-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_1_7_20()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el pantalón cuyo precio es el doble de 25.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-7-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '3-7-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_7_21()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el número que es el doble de la figura que está en la parte superior.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-7-21",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>