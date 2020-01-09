<script type="text/javascript">


function Page_10() {
    start_10();
    inicio();
    count = 3;
}

function Page_11() {  
   start_11();
   inicio();
   count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_10() {
    $("#ventana").load(ruta + '2-1-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_1_10()",
        titulo: "<center><h5><span>Clasifica</span> las líneas y <span>selecciona</span> el cuadro correspondiente.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-1-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '2-1-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_1_11()",
        titulo: "<center><h5><span>Clasifica</span> los siguientes elementos según el grupo al que pertenecen.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-1-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>