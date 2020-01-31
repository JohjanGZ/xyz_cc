<script type="text/javascript">

function Page_1() {
    start_1();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 5do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '4-5-1/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_5_1()",
        titulo: "<center><h5> <span>Lee</span> y <span>completa</span> la tabla y los recuadros según corresponda. Para ello utiliza el teclado de la pantalla.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "4-5-1",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>