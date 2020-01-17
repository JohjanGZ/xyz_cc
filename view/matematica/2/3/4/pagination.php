<script type="text/javascript">

function Page_12() {
    start_12();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant/cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_12() {
    $("#ventana").load(ruta + '2-3-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_12()",
        titulo: "<center><h5><span>Arrastra</span> los números y <span>completa</span> la rueda de multiplicación.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-3-12",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>