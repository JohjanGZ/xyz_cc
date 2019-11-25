<script type="text/javascript">
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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_12() {
    $("#ventana").load(ruta + '1-2-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_2_12()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> el cuadro.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-2-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-2-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_2_13()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta y escribe</span> el valor de las decenas y unidades.</h5></center>", 
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-2-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-2-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_2_14()",
        titulo: "<center><h5>¿Qué número va en el medio de cada trío? <span class='ftitulo'>Escríbelo.</span></h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-2-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-2-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_2_15()",
        titulo: "<center><h5><span class='ftitulo'>Realiza</span> la descomposición de los siguientes números en decenas y unidades.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-2-15",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>