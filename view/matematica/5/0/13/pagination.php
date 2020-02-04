<script type="text/javascript">

function Page_19() {
    start_19();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 19do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_19() {
    $("#ventana").load(ruta + '5-0-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_19()",
        titulo: "<center><h5><span>Relaciona</span> cada enunciado según corresponda.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "5-0-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>