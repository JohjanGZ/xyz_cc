<script type="text/javascript">

function Page_19() {
    start_19();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_19() {
    $("#ventana").load(ruta + '1-0-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_19()",
        titulo: "<center><h5><span>Selecciona</span> y <span>arrastra</span> los objetos en los recuadros según la forma que tienen.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-0-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>