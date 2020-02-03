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
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_22() {
    $("#ventana").load(ruta + '4-1-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_22()",
        titulo: "<center><h5><span>Completa</span> la tabla en base al diagrama de segmentos que muestra información de las estaturas de 25 estudiantes del 5.° año de secundaria. Para ello utiliza el teclado de la pantalla. </h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "4-1-22",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>