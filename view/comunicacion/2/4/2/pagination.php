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

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '2-4-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_2_4_4()",
        titulo: "<center><h5><span>Arrastra</span> y <span>completa</span> cada frase con los siguientes adjetivos.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "2-4-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '2-4-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_4_5()",
        titulo: "<center><h5><span>Relacion</span> cada sustantivo con su adjetivo correspondiente.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-4-5",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>