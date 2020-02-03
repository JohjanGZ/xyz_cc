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
////////////// 5do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_2() {
    $("#ventana").load(ruta + '4-5-2/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_5_2()",
        titulo: "<center><h5> <span>Lee</span> el problema y <span>resuelve</span>. Luego, <span>selecciona</span> de la lista de los recuadros lo que corresponda. </h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "4-5-2",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>