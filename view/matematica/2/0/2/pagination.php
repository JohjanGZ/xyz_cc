<script type="text/javascript">

function Page_6() {
   
    start_6();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '2-0-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_6()",
        titulo: "<center><h5><span>Observa</span> el diagrama y <span>coloca</span> verdadero (V) o falso (F) según corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-0-6",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>