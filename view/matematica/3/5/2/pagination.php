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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '3-5-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_5_6()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el material multibase y <span class='ftitulo'>completa.</span></h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-5-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-5-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_5_7()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el material multibase y <span class='ftitulo'>completa.</span></h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-5-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '3-5-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_5_8()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el material multibase y <span class='ftitulo'>completa.</span></h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-5-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '3-5-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_5_9()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> según el valor posicional. <span class='ftitulo'>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-5-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '3-5-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_5_10()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta</span> las centenas, las decenas y las unidades, <br>y ubícalas en el tablero de valor posicional.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-5-10",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>