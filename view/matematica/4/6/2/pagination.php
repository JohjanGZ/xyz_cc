<script type="text/javascript">

function Page_4() {
    start_4();
    inicio();
    count = 3;
}
function Page_5() {
    start_5();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant/cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_4() {
    $("#ventana").load(ruta + '4-6-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_4_6_4()",
        titulo: "<center><h5>En la siguiente analogía numérica encuentra el valor de <span>x</span>. Luego, <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-6-4",
        nota: cal
    });
    return false;
};
function start_5() {
    $("#ventana").load(ruta + '4-6-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_6_5()",
        titulo: "<center><h5>En la siguiente analogía numérica encuentra el valor de <span>p</span>. Luego, <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "4-6-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>