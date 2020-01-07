<script type="text/javascript">

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
var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_15() {
    $("#ventana").load(ruta + '1-1-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_1_15()",
        titulo: "<center><h5><span>Escribe</span> los números correspondientes a cada cantidad y <span>halla</span> la suma total.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-1-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '1-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_1_16()",
        titulo: "<center><h5><span>Cuenta</span> los dedos de cada mano y <span>unela con su número</span>.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-1-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-1-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_1_17()",
        titulo: "<center><h5><span>Escribe</span> el números de elementos.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-1-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '1-1-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_18()",
        titulo: "<center><h5><span>Cuenta</span> las patitas  de los escarabajos y <span>escribe</span> el número en el recuadro.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-1-18",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>