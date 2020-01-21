<script type="text/javascript">
function Page_15() {
    start_15();
    inicio();
    count = 3;
}

function Page_16() {
    start_16();
    inicio();
    count = 3;
}


var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_15() {
    $("#ventana").load(ruta + '2-3-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_3_15()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>selecciona</span> el adjetivo que corresponde para completa la oración.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-3-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-3-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_16()",
        titulo: "<center><h5><span>Observa</span> atentamente el paisaje. Luego coloca los adjetivos donde mejor correspondan.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-3-16",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>