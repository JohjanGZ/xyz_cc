<script type="text/javascript">

function Page_21() {
    start_21();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_21() {
    $("#ventana").load(ruta + '1-1-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_21()",
        titulo: "<center><h5><span>Calcula</span> la suma en vertical con ayuda de las imágenes. Luego en el recuadro <span>selecciona</span> la respuesta correspondiente.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-1-21",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>