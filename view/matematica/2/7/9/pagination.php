|<script type="text/javascript">

function Page_30() {
    start_30();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant/cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_30() {
    $("#ventana").load(ruta + '2-7-30/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_7_30()",
        titulo: "<center><h5><span>Relaciona</span> correctamente.</h5></center>",
        restaurar: "start_30()",
        dir: ruta,
        cod: "2-7-30",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>