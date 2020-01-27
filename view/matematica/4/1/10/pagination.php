<script type="text/javascript">

function Page_16() {
   
    start_16();
    inicio();
    count = 3;
}

function Page_17() {
   
   start_17();
   inicio();
   count = 3;
}


var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_16() {
    $("#ventana").load(ruta + '4-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_4_1_16()",
        titulo: "<center><h5><span>Coloca</span> o <span>arrastra</span> los signos  <span>÷</span> o <span>x</span>, entre las cifras de los números resaltados; de tal manera que se cumpla la igualdad.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-1-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '4-1-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_1_17()",
        titulo: "<center><h5><span>Resuelve</span> las divisiones. Luego, <span>selecciona</span> los números de la lista según corresponda.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-1-17",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>