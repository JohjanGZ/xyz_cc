<script type="text/javascript">
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
var cant = 3;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '3-2-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_2_6()",
        titulo: "<center><h5><span>Observa</span> los números en el tablero posicional. Luego, <span>selecciona</span> su descomposición.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-2-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-2-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_2_7()",
        titulo: "<center><h5><span>Observa</span> los números en el tablero posicional. Luego, <span>selecciona</span> su notación desarrollada.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-2-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '3-2-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_8()",
        titulo: "<center><h5><span>Observa</span> los precios de los televisores. Luego, <span>selecciona</span> el que tiene un costo de 3 724 soles.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-2-8",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>