<script type="text/javascript">

function Page_2() {
    start_2();
    inicio();
    count = 3;
}


var cant = 1;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_2() {
    $("#ventana").load(ruta + '4-3-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_2()",
        titulo: "<center><h5><span>Observa</span> y <span>completa</span> los recuadros con las cifras que faltan, de tal manera que los números sean múltiplos de 3. Para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "4-3-2",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>