<script type="text/javascript">


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

var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_23() {
    $("#ventana").load(ruta + '2-2-23/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_2_23()",
        titulo: "<center><h5><span>Completa</span> los números que faltan. </h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-2-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '2-2-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_2_2_24()",
        titulo: "<center><h5><span>Completa</span> los siguientes cuadrados mágicos.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "2-2-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '2-2-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_25()",
        titulo: "<center><h5>La suma de los números en los cuadrados es igual al número del rectángulo.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-2-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>