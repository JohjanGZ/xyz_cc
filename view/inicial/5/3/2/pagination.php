<script type="text/javascript">

function Page_2() {
    start_2();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_2() {
    $("#ventana").load(ruta + '5-3-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_3_2()",
        titulo: "<center><h5><span>Coloca</span> las acciones que son correctas como acuerdos de convivencia en los vagones del tren.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "5-3-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>