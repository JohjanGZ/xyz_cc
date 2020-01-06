<script type="text/javascript">

function Page_27() {
    start_27();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_27() {
    $("#ventana").load(ruta + '1-0-27/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_27()",
        titulo: "<center><h5><span>Selecciona</span> la maceta que tiene más flores.</h5></center>",
        restaurar: "start_27()",
        dir: ruta,
        cod: "1-0-27",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>