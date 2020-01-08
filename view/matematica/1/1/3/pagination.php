<script type="text/javascript">

function Page_5() {
    start_5();
    inicio();
    count = 3;
}
function Page_6() {
    start_6();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_5() {
    $("#ventana").load(ruta + '1-1-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_1_5()",
        titulo: "<center><h5><span>Cuenta</span> y <span>coloca</span> el conjunto de elementos donde corresponde.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-1-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '1-1-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_6()",
        titulo: "<center><h5><span>Cuenta</span> y <span>arrastra</span> la cantidad de elementos donde corresponda.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-1-6",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>