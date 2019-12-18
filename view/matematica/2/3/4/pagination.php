<script type="text/javascript">


function Page_25() {
    start_25();
    inicio();
    count = 3;
}



var cant = 18;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_25() {
    $("#ventana").load(ruta + '2-3-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_25()",
        titulo: "<center><h5><span>Selecciona</span> las figuras que no son simétricas.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "2-3-25",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>