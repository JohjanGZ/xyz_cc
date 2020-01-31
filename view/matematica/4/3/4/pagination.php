<script type="text/javascript">

function Page_4() {
    start_4();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 3do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '4-3-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_4()",
        titulo: "<center><h5><span>Observa</span> y <span>completa</span> los recuadros con las cifras que faltan, de tal manera que los números sean múltiplos de 5. Para ello <span>selecciona</span> el número correcto de la lista.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-3-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>