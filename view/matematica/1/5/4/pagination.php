<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_17() {
    $("#ventana").load(ruta + '1-5-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_5_17()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los números de tres cifras.</h5></center>", 
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-5-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '1-5-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_5_18()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> cómo se leen los siguientes números:</h5></center>", 
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-5-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-5-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_5_19()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> Escribe el número que corresponde a cada representación del ábaco.</h5></center>",  
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-5-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '1-5-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_20()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> los números formados por:</h5></center>",  
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-5-20",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>