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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_11() {
    $("#ventana").load(ruta + '1-5-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_5_11()",
        titulo: "<center><h5><span class='ftitulo'>Arrastra</span> y <span class='ftitulo'>forma</span> la representación que corresponde a la descomposición de los siguientes números:</h5></center>",  
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-5-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '1-5-12/index.php', {
        next: "start_13()",
        procesar: "result_tipo_1_5_12()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> cómo se leen los siguientes números:</h5></center>", 
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-5-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-5-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_13()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> la representación que corresponde a cada número.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-5-13",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>