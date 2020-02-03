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
var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '6-1-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_6_1_6()",
        titulo: "<center><h5><span>Selecciona</span>. ¿De qué género literario es propio el narrador?</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "6-1-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '6-1-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_1_7()",
        titulo: "<center><h5><span>Relaciona</span> cada miembro de la comunicación con su definición.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "6-1-7",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>