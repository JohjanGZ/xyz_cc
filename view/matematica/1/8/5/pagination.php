<script type="text/javascript">
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
function Page_25() {
    start_25();
    inicio();
    count = 3;
}
var cant = 24;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_22() {
    $("#ventana").load(ruta + '1-8-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_1_8_22()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> las tablas. </h5></center>", 
        
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-8-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '1-8-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_8_23()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la mitad del número que aparece en la parte superior.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-8-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '1-8-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_1_8_24()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> cada número con su doble. </h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-8-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '1-8-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_8_25()",
        titulo: "<center><h5><span class='ftitulo'>Relaciona</span> según corresponda.  </h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-8-25",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>