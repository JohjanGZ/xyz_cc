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


var cant = 3;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '4-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_4_1_7()",
        titulo: "<center><h5><span>Coloca</span> el número que falta.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-1-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '4-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_4_1_8()",
        titulo: "<center><h5>En los siguientes recuadros <span>completa</span> los números, su anterior o posterior según corresponda. Para ello utiliza el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-1-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '4-1-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_9()",
        titulo: "<center><h5><span>Arrastra</span> los números de tal manera que queden ordenados de mayor a menor</h5></center>",
        restaurar: "start_79)",
        dir: ruta,
        cod: "4-1-9",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>