<script type="text/javascript">
function Page_4() {
    start_4();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 5do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '4-5-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_5_4()",
        titulo: "<center><h5> <span>Observa</span> el gráfico de variación proporcional directa. Luego, <span>completa</span> la tabla, para ello <span>selecciona</span> la respuesta correcta de la lista según corresponda. </h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-5-4",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>