<script type="text/javascript">
function Page_41() {
    start_41();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_41() {
    $("#ventana").load(ruta + '1-3-41/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_41()",
        titulo: "<center><h5><span>Completa</span> los términos que faltan en cada una de las sustracciones.</h5></center>",
        restaurar: "start_41()",
        dir: ruta,
        cod: "1-3-41",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>