<script type="text/javascript">
function Page_9() {
    start_9();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_9() {
    $("#ventana").load(ruta + '4-6-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_6_9()",
        titulo: "<center><h5>Lee y resuelve los siguientes ejercicios, considera: π= 3,14 ˄ C = 2 π R. Luego, <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "4-6-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>