|<script type="text/javascript">

function Page_29() {
    start_29();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant/cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_29() {
    $("#ventana").load(ruta + '2-7-29/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_7_29()",
        titulo: "<center><h5><span>Completa</span> el cuadro.</h5></center>",
        restaurar: "start_29()",
        dir: ruta,
        cod: "2-7-29",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>