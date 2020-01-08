<script type="text/javascript">

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
var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '1-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_1_1_7()",
        titulo: "<center><h5><span>Cuenta</span> los pétalos de cada flor y <span>unela</span> con su número.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-1-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '1-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_1_1_8()",
        titulo: "<center><h5><span>Cuenta</span> los dedos de cada mano y <span>unela con su número</span>.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-1-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '1-1-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_1_9()",
        titulo: "<center><h5><span>Escribe</span> el números de elementos.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-1-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '1-1-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_10()",
        titulo: "<center><h5><span>Cuenta</span> las patitas  de los escarabajos y <span>escribe</span> el número en el recuadro.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-1-10",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>