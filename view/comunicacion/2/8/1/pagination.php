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

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-8-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_2_8_1()",
        titulo: "<center><h5><span>Relaciona</span> cada sujeto con el predicado correspondiente.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-8-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '2-8-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_8_2()",
        titulo: "<center><h5><span>Arrastra</span> un sujeto para cada predicado.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "2-8-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>