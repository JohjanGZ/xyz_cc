<script type="text/javascript">
function Page_10() {
    start_10();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_10() {
    $("#ventana").load(ruta + '4-6-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_6_10()",
        titulo: "<center><h5>En la siguiente figura <span>halla</span> el área sombreada (“r” en cm ∧ AC = π R2). Luego, <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-6-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>