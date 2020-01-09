<script type="text/javascript">


function Page_15() {
   start_15();
   inicio();
   count = 3;
}

function Page_16() {
    count = 3;
    start_16();
    inicio();
}

function Page_17() {
    count = 3;
    start_17();
    inicio();

}

function Page_18() {
    count = 3;
    start_18();
    inicio();
}

var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_15() {
    $("#ventana").load(ruta + '2-2-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_2_15()",
        titulo: " <center><h5><span>Completa</span> cada relación.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-2-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-2-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_2_16()",
        titulo: " <center><h5><span>Compara</span> los siguientes números y <span>coloca</span> los signos <, > o =.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-2-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '2-2-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_2_17()",
        titulo: " <center><h5><span>Coloca</span> los números que correspondan.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-2-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '2-2-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_2_18()",
        titulo: " <center><h5><span>Coloca</span> en cada recuadro el número que corresponde para que se cumpla las comparaciones.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-2-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>