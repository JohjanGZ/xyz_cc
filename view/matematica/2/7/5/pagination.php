|<script type="text/javascript">

function Page_25() {
    start_25();
    inicio();
    count = 3;
}
function Page_26() {
    start_26();
    inicio();
    count = 3;
}


var cant = 2;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_25() {
    $("#ventana").load(ruta + '2-7-25/index.php', {
        next: "start_26()",
        procesar: "result_tipo_2_7_25()",
        titulo: "<center><h5><span>Lee</span> y <span>completa</span> con el número correspondiente.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-7-25",
        nota: cal
    });
    return false;
};
function start_26() {
    $("#ventana").load(ruta + '2-7-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_7_25()",
        titulo: "<center><h5><span>Compara</span> los siguientes números y <span>coloca</span> los signos '<', '>' ó '='. .</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-7-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>