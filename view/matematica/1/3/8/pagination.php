<script type="text/javascript">
function Page_38() {
    start_38();
    inicio();
    count = 3;
}
function Page_39() {
    start_39();
    inicio();
    count = 3;
}
function Page_40() {
    start_40();
    inicio();
    count = 3;
}
var cant = 3;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_38() {
    $("#ventana").load(ruta + '1-3-38/index.php', {
        next: "Page_39()",
        procesar: "result_tipo_1_3_38()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes adiciones realizando los respectivos canjes.</h5></center>",
        restaurar: "start_38()",
        dir: ruta,
        cod: "1-3-38",
        nota: cal
    });
    return false;
};
function start_39() {
    $("#ventana").load(ruta + '1-3-39/index.php', {
        next: "Page_40()",
        procesar: "result_tipo_1_3_39()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes adiciones realizando los respectivos canjes.</h5></center>",
        restaurar: "start_39()",
        dir: ruta,
        cod: "1-3-39",
        nota: cal
    });
    return false;
};
function start_40() {
    $("#ventana").load(ruta + '1-3-40/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_40()",
        titulo: "<center><h5><span>Relaciona</span> cada adición con su resultado.</h5></center>",
        restaurar: "start_40()",
        dir: ruta,
        cod: "1-3-40",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>