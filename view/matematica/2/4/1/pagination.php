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
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '2-4-1/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_4_1()",
        titulo: "<center><h5><span>Halla</span> el valor de P, D y S.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "2-4-1",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>