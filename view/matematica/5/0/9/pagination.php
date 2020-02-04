<script type="text/javascript">

function Page_11() {
    start_11();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 11do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_11() {
    $("#ventana").load(ruta + '5-0-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_11()",
        titulo: "<center><h5>En el diagrama de Venn <span>resalta</span> la operación L <span>∆</span> M.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "5-0-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>