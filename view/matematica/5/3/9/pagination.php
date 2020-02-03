<script type="text/javascript">

function Page_9() {
    start_9();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 9do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '4-3-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_9()",
        titulo: "<center><h5><span>Resuelve</span> por el método práctico el <span>M.C.M</span> de los siguientes números. Para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "4-3-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>