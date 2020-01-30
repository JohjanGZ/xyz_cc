<script type="text/javascript">
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

function Page_15() {
    start_15();
    inicio();
    count = 3;
}
var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_13() {
    $("#ventana").load(ruta + '5-8-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_5_8_13()",
        titulo: "<center><h5><span>Lee</span> “El peligro de manipular juegos pirotécnicos” ubicado en la página 145 del Texto escolar y selecciona la respuesta correcta.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "5-8-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '5-8-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_5_8_14()",
        titulo: "<center><h5>Selecciona la alternativa que completa adecuadamente el siguiente enunciado: “El texto argumentativo es…”.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "5-8-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '5-8-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_8_15()",
        titulo: "<center><h5>Selecciona la alternativa que no es un propósito del autor.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "5-8-15",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>