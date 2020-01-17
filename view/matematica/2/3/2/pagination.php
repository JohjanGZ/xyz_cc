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
var cant = 5;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_6() {
    $("#ventana").load(ruta + '2-3-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_2_3_6()",
        titulo: "<center><h5><span>Observa</span>, <span>suma</span> y <span>completa</span>.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-3-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '2-3-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_3_7()",
        titulo: "<center><h5><span>Completa</span> la operación que representa cada imagen.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-3-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '2-3-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_3_8()",
        titulo: "<center><h5><span>Completa</span> la tabla del 3.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-3-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '2-3-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_3_9()",
        titulo: "<center><h5><span>Halla</span> el valor de D, A y P.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-3-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '2-3-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_10()",
        titulo: "<center><h5><span>Halla</span> el valor de (A + B) - C.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-3-10",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>