<script type="text/javascript">
function Page_11() {  
   start_11();
   inicio();
   count = 3;
}

var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_11() {
    $("#ventana").load(ruta + '2-4-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_4_11()",
        titulo: "<center><h5>El gráfico muestra las cantidades, tipos y tallas de las prendas que se vendieron en una tienda. <span>Completa</span> la tabla y luego <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-4-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>