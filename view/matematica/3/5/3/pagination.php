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
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_11() {
    $("#ventana").load(ruta + '3-5-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_5_11()",
        titulo: "<center><h5><span class='ftitulo'>Arrastra</span> y <span class='ftitulo'>forma</span> la representación que corresponde a la descomposición de los siguientes números:</h5></center>",  
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-5-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-5-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_5_12()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> cómo se leen los siguientes números:</h5></center>", 
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-5-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-5-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_5_13()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> la representación que corresponde a cada número.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-5-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '3-5-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_5_14()",
        titulo: "<center><h5><span class='ftitulo'>Realiza</span> la descomposición aditiva.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-5-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-5-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_5_15()",
        titulo: "<center><h5><span class='ftitulo'>Realiza</span> la descomposición de las siguientes representaciones gráficas:</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-5-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-5-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_5_16()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la descomposición de cada número.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-5-16",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>