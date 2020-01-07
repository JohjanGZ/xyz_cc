<script type="text/javascript">

function Page_31() {
    start_31();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_31() {
    $("#ventana").load(ruta + '1-1-31/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_31()",
        titulo: "<center><h5>En los espacios en blanco <span>selecciona</span> los números que faltan, y <span>completa</span> las pirámides.</h5></center>",
        restaurar: "start_31()",
        dir: ruta,
        cod: "1-1-31",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>