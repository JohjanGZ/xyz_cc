<script type="text/javascript">

function Page_18() {
    start_18();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 18do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_18() {
    $("#ventana").load(ruta + '5-0-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_18()",
        titulo: "<center><h5><span>Cuenta</span> los segmentos que forman la figura. Luego, <span>selecciona</span> las respuestas según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "5-0-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>