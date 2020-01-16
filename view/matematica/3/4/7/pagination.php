<script type="text/javascript">

function Page_22() {
    start_22();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 

function start_22() {
    $("#ventana").load(ruta + '3-4-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_22()",
        titulo: "<center><h5><span>Observa</span> el gráfico y <span>selecciona</span> todas las oraciones que son correctas.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-4-22",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>