<script type="text/javascript">

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

var cant = 4;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '3-8-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_8_4()",
        titulo: "<center><h5><span>Observa</span> las imágenes y <span>selecciona</span> su complemento.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-8-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-8-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_8_5()",
        titulo: "<center><h5><span>Ordena</span> las siguientes palabras y <span>forma</span> oraciones.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-8-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '3-8-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_8_6()",
        titulo: "<center><h5><span>Relaciona</span> los enunciados y <span>forma</span> oraciones.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-8-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-8-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_8_7()",
        titulo: "<center><h5><span>Arrastra</span> la palabra que complete la oración.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-8-7",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>