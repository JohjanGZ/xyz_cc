<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}
function Page_11() {
    start_11();
    inicio();
    count = 3;
}
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


var cant = 5;
var cal = cant / cant;

var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_10() {
    $("#ventana").load(ruta + '4-2-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_4_2_10()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de adición. Luego, <span>completa</span> los números que faltan, para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-2-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '4-2-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_4_2_11()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de sustracción. Luego, <span>completa</span> los números que faltan, para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "4-2-11",
        nota: cal
    });
    return false;
};


function start_12() {
    $("#ventana").load(ruta + '4-2-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_4_2_12()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de multiplicación. Luego, <span>completa</span> los números que faltan, para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "4-2-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '4-2-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_4_2_13()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de división. Luego, <span>completa</span> los recuadros vacíos, para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-2-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '4-2-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_2_14()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de división. Luego, <span>selecciona</span> de la lista, la respuesta correcta.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-2-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>