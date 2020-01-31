<script type="text/javascript">

function Page_7() {
    start_7();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '4-4-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_7()",
        titulo: "<center><h5><span>Simplifica</span> la fracción y <span>selecciona</span> la respuesta según corresponda. Luego, <span>relaciona</span> cada una con su escritura.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-4-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>