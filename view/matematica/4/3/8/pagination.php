<script type="text/javascript">

function Page_8() {
    start_8();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 8do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_8() {
    $("#ventana").load(ruta + '4-3-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_8()",
        titulo: "<center><h5><span>Observa</span> y <span>resuelve</span> lo que se pide. Luego, <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-3-8",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>