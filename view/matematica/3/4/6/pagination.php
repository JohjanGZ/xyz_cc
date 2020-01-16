<script type="text/javascript">

function Page_21() {
    start_21();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 


function start_21() {
    $("#ventana").load(ruta + '3-4-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_21()",
        titulo: "<center><h5><span>Responde</span> las siguientes preguntas:</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-4-21",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>