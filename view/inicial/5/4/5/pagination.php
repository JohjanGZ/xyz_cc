<script type="text/javascript">

function Page_5() {
    start_5();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/inicial/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_5() {
    $("#ventana").load(ruta + '5-2-5/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_2_5()",
        titulo: " <center><h5><span>Observa</span> los conjuntos y <span>arrastra</span> la representación correcta.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "5-2-5",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>