<script type="text/javascript">

function Page_24() {
    start_24();
    inicio();
    count = 3;
}
var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_24() {
    $("#ventana").load(ruta + '1-2-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_2_24()",
        titulo: "<center><h5> <span>Hallar</span> el valor de cada elemento.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-2-24",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>