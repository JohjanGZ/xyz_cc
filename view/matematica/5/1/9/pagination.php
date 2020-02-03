<script type="text/javascript">

function Page_14() {
   
    start_14();
    inicio();
    count = 3;
}

function Page_15() {
   
   start_15();
   inicio();
   count = 3;
}


var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_14() {
    $("#ventana").load(ruta + '4-1-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_4_1_14()",
        titulo: "<center><h5><span>Observa</span> la tabla y <span>Selecciona</span> de la lista la lectura, desarrollo y potencia según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-1-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '4-1-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_15()",
        titulo: "<center><h5><span>Resuelve</span> y <span>selecciona</span> de la lista los números según corresponda.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-1-15",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>