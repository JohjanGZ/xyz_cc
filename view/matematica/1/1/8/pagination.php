<script type="text/javascript">
function Page_14() {
    start_14();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_14() {
    $("#ventana").load(ruta + '1-1-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_14()",
        titulo: "<center><h5><span>Observa</span> y <span>selecciona</span> de la lista <span> > </span> , <span> < </span> o <span> = </span>. según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-1-14",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>