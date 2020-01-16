<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}
function Page_2() {
    start_2();
    inicio();
    count = 3;
}
function Page_3() {
    start_3();
    inicio();
    count = 3;
}
function Page_4() {
    start_4();
    inicio();
    count = 3;
}
function Page_5() {
    start_5();
    inicio();
    count = 3;
}
var cant = 5;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-2-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_2_1()",
        titulo: "<center><h5><span>Observa</span> los cubos multibase y <span>forma</span> el número.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-2-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '3-2-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_2_2()",
        titulo: "<center><h5><span>Observa</span> los cubos multibase y <span>forma</span> el número.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-2-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '3-2-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_2_3()",
        titulo: "<center><h5><span>Observa</span> los cubos multibase y <span>forma</span> el número.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-2-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '3-2-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_2_4()",
        titulo: "<center><h5><span>Observa</span> los cubos multibase y <span>selecciona</span> el número correspondiente.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-2-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '3-2-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_5()",
        titulo: "<center><h5><span>Observa</span> los cubos multibase y <span>selecciona</span> el número correspondiente.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-2-5",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>