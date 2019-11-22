<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}

function Page_2() {
    start_2();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '1-2-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_1_2_1()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> los números correspondientes a cada cantidad y halla la suma total.</h5></center>",
        
        restaurar: "start_1()",
        dir: ruta,
        cod: "1-2-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '1-2-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_2_2()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta</span> las chimeneas en cada barco y <span class='ftitulo'>escribe</span> los números correspondientes en cada casillero.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "1-2-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>