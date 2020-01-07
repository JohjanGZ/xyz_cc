<script type="text/javascript">

function Page_12() {
    start_12();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_12() {
    $("#ventana").load(ruta + '1-1-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_12()",
        titulo: "<center><h5><span>Cuenta</span> y <span>coloca</span> el conjunto de elementos donde corresponde.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-1-12",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>