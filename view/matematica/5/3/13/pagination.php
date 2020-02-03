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
    $("#ventana").load(ruta + '4-3-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_18()",
        titulo: "<center><h5><span>Analiza</span> el siguiente gráfico circular que muestra las ventas en una tienda de ropa. Luegom <span>completa</span> la tabla seleccionando de la lista lo que se vendió según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "4-3-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>